<?php

error_reporting(2047);
ini_set("display_errors", 1);
ini_set('memory_limit', '512M');
set_time_limit(0);
//include("./Mcache.php");

class WebService {

    private $conn;
    private $bindParameters;
    private $query;
    private $cache;
    private $expirationCache;
    public $error;
    public $errorInfo;
    public $errorCache;

    function __construct($data) {
        /* validate data */
        $this->error = 0;
        $this->errorInfo = "ok";
        $this->errorCache = $data["cache"];
        $this->conn = $data["conn"];
        $this->bindParameters = $data["bindParameters"];
        $this->query = $data["query"];
        $this->cache = $data["cache"];
        $this->expirationCache = $data["expirationCache"];
        $this->error = WebService::validateData($data);
        if ($this->error !== 0) {
            $this->errorInfo = $this->error;
            $this->error = 1;
            $this->cache = 0;
        }
    }

    private static function validateData($data) {
        $result = WebService::validateConn($data);
        if ($result !== 0)
            return $result;
        $result = WebService::validateBindParameters($data);
        if ($result !== 0)
            return $result;
        $result = WebService::validateQuery($data);
        if ($result !== 0)
            return $result;
        return 0;
    }

    private static function validateConn($data) {
        $result = WebService::validateParameter("conn", $data["conn"], "array");
        if ($result != 0)
            return $result;
        $result = WebService::validateParameter("conn{'server'}", $data["conn"]["server"], "string");
        if ($result != 0)
            return $result;
        $result = WebService::validateParameter("database", $data["conn"]["database"], "string");
        if ($result != 0)
            return $result;
        $result = WebService::validateParameter("user", $data["conn"]["user"], "string");
        if ($result != 0)
            return $result;
        $result = WebService::validateParameter("pass", $data["conn"]["pass"], "string");
        if ($result != 0)
            return $result;
        return 0;
    }

    private static function validateBindParameters($data) {
        if ($data["bindParameters"] == null)
            return 0;
        return WebService::validateParameter("bindParameters", $data["bindParameters"], "array", 0);
    }

    private static function validateQuery($data) {
        return WebService::validateParameter("query", $data["query"], "string");
    }

    private static function validateParameter($field, $parameter, $type, $empty = 1) {
        if (empty($parameter) && $empty)
            return "Empty $field.";
        if (gettype($parameter) !== $type)
            return "Invalid $field type, found " . gettype($parameter) . " must be $field.";
        return 0;
    }

    private function getDriverStr() {
        $str = "Driver={FileMaker ODBC};";
        $str .= "Server=" . $this->conn["server"] . ";";
        $str .= "AutoDetectEncoding=No;";
        $str .= "MultiByteEncoding=UTF-8;";
        $str .= "UseLongVarchar=yes;";
        $str .= "Database=" . $this->conn["database"] . ";";
        //$str .= "UID=".$this->conn["user"].";";
        //$str .= "PWD=".$this->conn["pass"].";";
        return $str;
    }

    private function utfprepare(&$var) {

        foreach ($var AS $key => &$value) {

            if (is_array($value)) {
                $this->utfprepare($value);
            } else {
                $value = utf8_encode($value);
            }
        }
    }

    /**
      Replace characters with accentos and eñes por su código correspondiente en filemaker
     */
    private function formatQuery($str) {
        $patterns = array("á", "é", "í", "ó", "ú", "Á", "É", "Í", "Ó", "Ú", "ñ", "Ñ");
        $replacements = array("'+CHR(225)+'", "'+CHR(233)+'", "'+CHR(237)+'", "'+CHR(243)+'", "'+CHR(250)+'", "'+CHR(193)+'", "'+CHR(201)+'", "'+CHR(205)+'", "'+CHR(211)+'", "'+CHR(218)+'", "'+CHR(241)+'", "'+CHR(209)+'");
        $str = str_replace($patterns, $replacements, $str);
        return $str;
    }

    private function prepare($query) {
        $words = explode(" ", $query);
        $index = 0;
        if ($this->bindParameters !== null)
            foreach ($this->bindParameters as $key => $value) {
                $this->bindParameters[$key] = $this->getWordFormated($value["value"]);
                $index++;
            }
        $q = "";
        foreach ($words as $key => $word) {
            if (isset($this->bindParameters[$word]))
                $q .= " " . $this->bindParameters[$word];
            else
                $q .= " " . $word;
        }

        $this->query = $q;
    }

    private function getWordFormated($word) {
        switch (gettype($word)) {
            case "boolean":
                return $word;
            case "integer":
                return $word;
            case "double":
            case "string":
                return "'" . $word . "'";
            case "null":
                return "NULL";
            default:
                return "none";
        }
    }

    private function isInsert() {
        if (strrpos(strtolower($this->query), "insert"))
            return true;
        return false;
    }

    private function isDelete() {
        if (strrpos(strtolower($this->query), "delete"))
            return true;
        return false;
    }

    private function isUpdate() {
        if (strrpos(strtolower($this->query), "delete"))
            return true;
        return false;
    }

    private function executeQuery() {
        $cnn = odbc_connect($this->getDriverStr(), $this->conn["user"], $this->conn["pass"]);
        $this->prepare($this->query);
        //$stmt = odbc_prepare($cnn, $this->formatQuery($this->query));
        //$result = odbc_execute($stmt, array());
        $result = odbc_exec($cnn, $this->formatQuery($this->query));
        
        
        
        if ($result === false) {
            return odbc_errormsg();
        }
        if ($this->isInsert() || $this->isDelete() || $this->isUpdate()) {
            $dataResult = array("meta" => array(), "data" => array());
            return $dataResult;
        }
        $r = array();
        $meta = array();
        $fRow = null;
        $index = 0;
        $items = 0;
        while ($row = odbc_fetch_array($result)) {
            $index = 0;
            foreach ($row as $key => $value) {
                $meta[$index] = $key;
                $row[$index] = $value;
                $index++;
                unset($row[$key]);
            }
            array_push($r, $row);
            $items++;
        }
        odbc_free_result($result);
        odbc_close($cnn);
        $this->utfprepare($r);
        $dataResult = array("meta" => $meta, "data" => $r);
        return $dataResult;
    }

    public function execute($data) {
        try {
            $queryResult = null;
            $cacheExists = 0;
            $cache = false;
            if ($this->cache) {
                $mcache = new \Mcache($this->conn["database"], $this->query, null, $this->expirationCache);
                $mcache->updateCaheInfo();
                $cacheExists = $mcache->cacheExists();
                if ($cacheExists) {
                    if (!$mcache->expire()) {
                        $queryResult = $mcache->getDataFrom();
                        $this->errorCache = 1;
                    } else {
                        $queryResult = $this->executeQuery();
                        $mcache->setData($queryResult);
                        $mcache->save();
                        $this->errorCache = 0;
                    }
                } else {
                    $queryResult = $this->executeQuery();
                    $mcache->setData($queryResult);
                    $mcache->save();
                    $this->errorCache = 0;
                }
            } else {
                $queryResult = $this->executeQuery();
            }

            $result = array();
            if (count($queryResult) == 0)
                $queryResult = null;
            $result[0] = $this->getError();
            $result[1] = $queryResult;

            return $result;
        } catch (Exception $err) {
            // Catch Expcetions from the above code for our Exception Handling             
            $this->setError($err->getMessage(), -1, $this->cache);
            $result = array();
            $result[0] = $this->getError();
            $result[1] = null;
            return $result;
        }
    }

    public function setError($info, $code = -1, $cache = false) {
        $this->errorInfo = $info;
        $this->error = $code;
        $this->errorCache = $cache;
    }

    public function getError() {
        $msgError = odbc_errormsg();
        if (!empty($msgError)) {
            $this->setError($msgError, odbc_error(), $this->cache);
        }
        return array(
            "ws_status" => $this->error,
            "ws_info" => $msgError,
            "ws_cached" => $this->errorCache,
            "ws_query" => $this->query
        );
    }

}

/*
$soapServer = new SoapServer('Server.wsdl',array('exceptions' => 0,'cache_wsdl' => WSDL_CACHE_NONE) );
$soapServer->AddFunction("main");  
$soapServer->handle();

function main( $data ){
    
    $ws = new WebService( $data );
    if( $ws->error !== 0){
        $result = array();
        $result[0]= $result;
        $result[1] = null;
        return $result;
    }
    //return base64_encode(gzcompress(json_encode($ws->execute()),9));
    return json_encode($ws->execute());
}*/