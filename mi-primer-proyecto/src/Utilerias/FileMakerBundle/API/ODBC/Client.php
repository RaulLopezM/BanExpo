<?php

namespace Utilerias\FileMakerBundle\API\ODBC;

use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\Config\FileLocator;
use Symfony\Component\DependencyInjection\Loader\YamlFileLoader;
use Utilerias\EmailBundle\Controller\EmailController;

require_once 'Server.php';

error_reporting(2047);
ini_set("display_errors", 1);
ini_set('memory_limit', '128M');

class Client {

    private $soapServer;
    private $server;
    private $dataBase;
    private $user;
    private $pass;
    private $port;
    private $query;
    private $conn;
    private $bindParameters;
    private $cache;
    private $expirationCache;
    private $result;
    private $FM_CnnInfo;

    public function __construct($db = "TSM") {
        $container = new ContainerBuilder();
        $loader = new YamlFileLoader($container, new FileLocator(__DIR__ . "/../../../../../app/config"));
        $loader->load('parameters.yml');
        $this->FM_CnnInfo = $container->getParameter('FileMaker_' . $db);
        $this->soapServer = $this->FM_CnnInfo['fm_soap'];
        $this->dataBase = $this->FM_CnnInfo['fm_database'];
        $this->user = $this->FM_CnnInfo['fm_user'];
        $this->port = $this->FM_CnnInfo['fm_port'];
        $this->pass = $this->FM_CnnInfo['fm_password'];

        if ($this->FM_CnnInfo['fm_on_site']) {
            $this->server = $this->FM_CnnInfo['fm_server'];
            //$this->conn = new WebService($this->getConnParameters());
        } else {
            $this->server = 'localhost';
            $this->conn = new \SoapClient($this->soapServer, array('exceptions' => 0, 'cache_wsdl' => WSDL_CACHE_NONE));
        }
        $this->cache = 0;
        $this->expirationCache = 0;
    }

    public function getCache() {
        return $this->cache;
    }

    public function getExpirationTime() {
        return $this->expirationCache;
    }

    public function getConn() {
        return $this->Conn;
    }

    public function getServer() {
        return $this->server;
    }

    public function getUser() {
        return $this->user;
    }

    public function getPass() {
        return $this->pass;
    }

    public function getQuery() {
        return $this->query;
    }

    public function getBindParameters() {
        return $this->bindParameters;
    }

    private function updateConn() {
        $this->conn = new SoapClient($this->server, array('exceptions' => 0));
    }

    public function setCache($cache) {
        $this->cache = $cache;
    }

    public function setExpirationTime($expiration) {
        $this->expirationCache = $expiration;
    }

    public function setServer($server) {
        $this->server = $server;
        $this->updateConn();
    }

    public function setDataBase($dataBase) {
        $this->dataBase = $dataBase;
        $this->updateConn();
    }

    public function setUser($user) {
        $this->user = $user;
        $this->updateConn();
    }

    public function setPassword($pass) {
        $this->pass = $pass;
        $this->updateConn();
    }

    public function setQuery($query) {
        $this->query = $query;
    }

    public function removeAllBindParameters() {
        $this->bindParameters = array();
    }

    public function removeBindParameterByName($name) {
        unset($this->bindParameters[$name]);
    }

    public function setPort($port) {
        $this->port = $port;
        $this->updateConn();
    }

    private function getBindParameterType($var) {
        switch (gettype($var)) {
            case "boolean":
                return \PDO::PARAM_BOOL;
            case "integer":
                return \PDO::PARAM_INT;
            case "double":
            case "string":
                return \PDO::PARAM_STR;
            case "null":
                return \PDO::PARAM_NULL;

            /*
              PDO::PARAM_BOOL (integer)
              Represents a boolean data type.
              PDO::PARAM_NULL (integer)
              Represents the SQL NULL data type.
              PDO::PARAM_INT (integer)
              Represents the SQL INTEGER data type.
              PDO::PARAM_STR (integer)
              Represents the SQL CHAR, VARCHAR, or other string data type.
              /*PDO::PARAM_LOB (integer)
              Represents the SQL large object data type.
              PDO::PARAM_STMT (integer)
              Represents a recordset type. Not currently supported by any drivers.
              PDO::PARAM_INPUT_OUTPUT (integer)
             */
        }
    }

    /*
      PDO::PARAM_STR, PDO::PARAM_INT
     */

    public function setBindParameter($varName, $value, $type = null, $length = null) {
        if ($type == null)
            $type = $this->getBindParameterType($value);

        if (empty($varName) || empty($value) || empty($type)) {
            return "varNAme value and type are required parameters for setBindParameter function, please define it.";
        }
        $this->bindParameters[$varName] = array("value" => $value, "type" => $type, "length" => $length);
    }

    private function getConnParameters() {
        if (empty($this->server))
            return "Server is undefined.";
        if (empty($this->dataBase))
            return "Database is undefined.";
        if (empty($this->user))
            return "Database user is undefined.";
        if (empty($this->pass))
            return "Database user password is undefined.";

        return array(
            "server" => $this->server,
            "database" => $this->dataBase,
            "user" => $this->user,
            "pass" => $this->pass,
            "port" => $this->port
        );
    }

    private function buildSoapObject() {
        $query = $this->getQuery();
        if (empty($query))
            return "Query is undefined. Please use setQuery method to define it.";
        $connp = $this->getConnParameters();
        $bindP = $this->getBindParameters();
        return $soapObj = array(
            "conn" => $connp,
            "bindParameters" => $bindP,
            "query" => $query,
            "cache" => $this->cache,
            "expirationCache" => $this->expirationCache
        );
    }

    private function getAssocArray($meta, &$data) {
        if (empty($meta))
            return;
        for ($i = 0; $i < count($data); $i++) {
            for ($index = 0; $index < count($data[$i]); $index++) {
                $data[$i][$meta[$index]] = $data[$i][$index];
                unset($data[$i][$index]);
            }
        }
    }

    public function getResultAssoc() {
        if ($this->FM_CnnInfo['fm_on_site']) {
            $result = $this->result;
        } else {
            $result = json_decode($this->result, TRUE);
        }
        if ($result[0]['ws_status'] !== 0) {
            /* Notificacion de server error al correo */
            $msg_error_server = $result[0]["ws_info"];
            $msg_error = '[FileMaker][FileMaker]  (802): Unable to open file';
            //$msg_error_server = '[FileMaker][FileMaker] Failed to connect to listener (2)';
            //if ($msg_error == $msg_error_server) {

            $EM = new EmailController();
            $EM->notify_server_error($msg_error_server, $result[0]["ws_query"]);
            //}
            /* Notificacion de server error al correo */

            return array("status" => FALSE, "data" => $msg_error_server);
        }
        $this->getAssocArray($result[1]["meta"], $result[1]["data"]);
        unset($result[1]["meta"]);
        return array("status" => TRUE, "data" => (COUNT($result[1]["data"]) > 0) ? $result[1]["data"] : NULL);
    }

    public function exec() {
        $data = $this->buildSoapObject();
        if (gettype($data) !== "array") {
            return "Ooops! Something went wrong, are you a real developer? :/<br>" . $data;
        }
        if ($this->FM_CnnInfo['fm_on_site']) {
            $this->conn = new \WebService($data);
            $json = $this->conn->execute($data);
        } else {
            $json = $this->conn->main($data);
        }
        $this->result = $json;
        return $json;
        /* if (is_soap_fault($Array_Resultado)) {//Para cachar los errores
          trigger_error("SOAP Fault: (faultcode: {$Array_Resultado->faultcode}, faultstring: {$Array_Resultado->faultstring})", E_USER_ERROR);
          } */
    }

}
