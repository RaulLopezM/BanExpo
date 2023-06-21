<?php

namespace Utilerias\FileMakerBundle\API;

use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\Config\FileLocator;
use Symfony\Component\DependencyInjection\Loader\YamlFileLoader;

//use Utilerias\EmailBundle\Controller\EmailController;

error_reporting(E_ALL & ~E_NOTICE & ~E_DEPRECATED & ~E_STRICT & ~E_WARNING);
include( __DIR__ . "/FM/FileMaker.php");

class FMAPI {

    const ASCEND = 'asc';
    const DESCEND = 'des';
    const SYNTAX = 'FULL';
    const API_NOTIFY = 'FMAPI';

    private $Cnn;
    private $FoundSetCount;
    private $Syntax;
    private $EmailController;
    private $OmitCode = array(401);

    public function __construct($db_data = "FileMaker_TSM") {
        if (is_array($db_data) && count($db_data) > 0) {
           $FM_CnnInfo = $db_data;
        }else{
            $container = new ContainerBuilder();
            $loader = new YamlFileLoader($container, new FileLocator(__DIR__ . "/../../../../app/config"));
            $loader->load('parameters.yml');
            $FM_CnnInfo = $container->getParameter($db_data);
            
        }        
        $this->Cnn = new \FileMaker();
        $this->Cnn->setProperty('database', $FM_CnnInfo['fm_database']);
        $this->Cnn->setProperty('username', $FM_CnnInfo['fm_user']);
        $this->Cnn->setProperty('password', $FM_CnnInfo['fm_password']);
        $this->Cnn->setProperty('hostspec', $FM_CnnInfo['fm_server']);
        $this->Cnn->setProperty('port', $FM_CnnInfo['fm_port']);
        $this->Syntax = NULL;
        //$this->EmailController = new EmailController();
    }

    public function Set_Full_Syntax() {
        $this->Syntax = self::SYNTAX;
    }

    public function Set_Short_Syntax() {
        $this->Syntax = NULL;
    }

    function Do_Query($Layout, $Args = null, $Sort = null, $Range = null) {
        try {
            if ($Args !== NULL) {

                $Find = &$this->Cnn->newFindCommand($Layout);
                foreach ($Args as $field => $value) {
                    $Find->addFindCriterion($field, trim($value));
                }
            } else {
                $Find = &$this->Cnn->newFindAllCommand($Layout);
            }

            if ($Range !== NULL) {
                $Find->setRange($Range[0], $Range[1]);
            }

            if ($Sort !== NULL) {

                $i = 1;
                foreach ($Sort as $field => $value) {
                    switch ($value) {
                        case self::ASCEND:
                            $Find->addSortRule($field, $i, FILEMAKER_SORT_ASCEND);
                            break;
                        case self::DESCEND:
                            $Find->addSortRule($field, $i, FILEMAKER_SORT_DESCEND);
                            break;
                        default:
                            $Find->addSortRule($field, $i, FILEMAKER_SORT_ASCEND);
                            break;
                    }
                    ++$i;
                }
            }
            $Result = $Find->execute();
            if (\FileMaker::isError($Result)) {
                if (!in_array($Result->getCode(), $this->OmitCode)) {
                    $this->EmailController->notify_server_error($Result->getMessage(), 'Do_Query[' . $Layout . ']', self::API_NOTIFY, $Result->getCode());
                    return array('status' => FALSE, 'data' => $Result->getMessage());
                }
                return array('status' => TRUE, 'data' => NULL);
            }
            $this->Set_FoundSet_Count($Result);
            return array('status' => TRUE, 'data' => $this->Query_Results($Result));
        } catch (Exception $err) {
            $this->EmailController->notify_server_error($err->getMessage(), 'Do_Query Try-Catch [' . $Layout . ']', self::API_NOTIFY);
            //trigger_error($err);
            print_r($err);
        }
    }

    private function Query_Results($Result) {
        try {
            $qr = array();
            $records = $Result->getRecords();
            $fields = $Result->getFields();
            $i = 0;
            if (count($records) > 0) {
                foreach ($records as $record) {
                    $qr[$i]['Record_ID'] = $record->getRecordId();
                    foreach ($fields as $fieldname) {
                        $field_aux = ($this->Syntax === NULL) ? preg_replace('/.*::/i', '', $fieldname) : strtr($fieldname, '::', '__');
                        $qr[$i][$field_aux] = htmlspecialchars_decode($record->getField($fieldname));
                    }
                    ++$i;
                }
            }
            return $qr;
        } catch (Exception $err) {
            //trigger_error($err);
            print_r($err);
        }
    }

    private function Set_FoundSet_Count($Result) {
        $this->FoundSetCount = $Result->getFoundSetCount();
    }

    public function Get_FoundSet_Count() {
        return $this->FoundSetCount;
    }

    function Run_Script($Layout, $Script, $Args) {
        $run = $this->Cnn->newPerformScriptCommand($Layout, $Script, $Args);
        $script = $run->execute();

        if (\FileMaker::isError($script)) {
            if (!in_array($script->getCode(), $this->OmitCode)) {
                //$this->EmailController->notify_server_error($script->getMessage(), 'Run_Script[' . $Script . ']', self::API_NOTIFY, $script->getCode());
            }
            return Array('status' => FALSE, 'data' => $script->getMessage());
        }
        return array('status' => TRUE, 'data' => $this->Query_Results($script));
    }

    function Do_Update($Layout, $Rec_Id, $Args) {
        $Rec = $this->Cnn->getRecordById($Layout, $Rec_Id);

        foreach ($Args as $field => $value) {
            $Rec->setField($field, trim($value));
        }

        $Result = $Rec->commit();

        if (\FileMaker::isError($Result)) {
            if (!in_array($Result->getCode(), $this->OmitCode)) {
                $this->EmailController->notify_server_error($Result->getMessage(), 'Do_Update[' . $Layout . ']', self::API_NOTIFY, $Result->getCode());
            }
            return NULL;
        }

//        try
//        {
//            $qr = array();
//            $fields = $Rec->getFields();
//            $i = 0;
//
//            $qr[$i]['Record_ID'] = $Rec_Id;
//            foreach ($fields as $fieldname)
//            {
//                $field_aux = ($this->Syntax === NULL) ? preg_replace('/.*::/i', '', $fieldname) : strtr($fieldname, '::', '__');
//                $qr[$i][$field_aux] = htmlspecialchars_decode($Rec->getField($fieldname));
//            }
//            ++$i;
//            return $qr;
//        }
//        catch (Exception $err)
//        {
//            trigger_error($err);
//        }
    }

    function Do_Insert($Layout, $Args) {
        $Rec = $this->Cnn->createRecord($Layout);

        foreach ($Args as $field => $value) {
            $Rec->setField($field, trim($value));
        }

        $Result = $Rec->commit();

        if (\FileMaker::isError($Result)) {
            if (!in_array($Result->getCode(), $this->OmitCode)) {
                $this->EmailController->notify_server_error($Result->getMessage(), 'Do_Insert[' . $Layout . ']', self::API_NOTIFY, $Result->getCode());
            }
            return array('status' => FALSE, 'data' => $Result->getMessage());
        }
        return array('status' => TRUE, 'data' => $Rec->getRecordId());
    }

    function Do_Delete($Layout, $Rec_Id) {
        $Del_Rec = & $this->Cnn->newDeleteCommand($Layout, $Rec_Id);
        $Result = $Del_Rec->execute();

        if (\FileMaker::isError($Result)) {
            if (!in_array($Result->getCode(), $this->OmitCode)) {
                $this->EmailController->notify_server_error($Result->getMessage(), 'Do_Delete[' . $Layout . ']', self::API_NOTIFY, $Result->getCode());
            }
            //echo "<p>Delete Error: " . $Result->getMessage() . "</p>";
        }
    }

    function Get_Portal_Records($Layout, $Args = NULL, $Sort = NULL) {
        try {
            //--------------------------
            if ($Args !== NULL) {
                $Find = & $this->Cnn->newFindCommand($Layout);

                foreach ($Args as $field => $value) {
                    $Find->addFindCriterion($field, $value);
                }
            } else {
                $Find = & $this->Cnn->newFindAllCommand($Layout);
            }
            //****************
            if ($Sort !== NULL) {
                $i = 1;
                foreach ($Sort as $field => $value) {
                    switch ($value) {
                        case self::ASCEND:
                            $Find->addSortRule($field, $i, FILEMAKER_SORT_ASCEND);
                            break;
                        case self::DESCEND:
                            $Find->addSortRule($field, $i, FILEMAKER_SORT_DESCEND);
                            break;
                        default:
                            $Find->addSortRule($field, $i, FILEMAKER_SORT_ASCEND);
                            break;
                    }
                    $i++;
                }
            }
            //****************
            $Result = $Find->execute();
            if (\FileMaker::isError($Result)) {
                if (!in_array($Result->getCode(), $this->OmitCode)) {
                    $this->EmailController->notify_server_error($Result->getMessage(), 'Get_Portal_Records[' . $Layout . ']', self::API_NOTIFY, $Result->getCode());
                    return Array('status' => FALSE, 'data' => $Result->getMessage());
                }
                //echo "<p>Find Error: " . $Result->getMessage() . "</p>";
                return Array('status' => TRUE, 'data' => '');
            }

            $Portals = $Result->getRelatedSets();
            $Records = $Result->getRecords();
            $Fields = $Result->getFields();
            $i = 0;
            foreach ($Records as $record) {
                $qr[$i]['Record_ID'] = $record->getRecordId();
                foreach ($Fields as $fieldname) {
                    $field_aux = ($this->Syntax === NULL) ? preg_replace('/.*::/i', '', $fieldname) : strtr($fieldname, '::', '__');
                    $qr[$i][$field_aux] = htmlspecialchars_decode(($record->getField($fieldname)));
                }
                for ($j = 0; $j < count($Portals); $j++) {
                    $R_Records = $record->getRelatedSet($Portals[$j]);
                    if (\FileMaker::isError($R_Records)) {
                        //$this->EmailController->notify_server_error($R_Records->getMessage(), 'getRelatedSet[' . $Layout . ']', self::API_NOTIFY, $R_Records->getCode());
                        //echo "<p>Portal Error: " . $R_Records->getMessage() . "</p>";
                        continue;
                    }
                    $R_Fields = $R_Records[0]->getFields();

                    $k = 0;
                    foreach ($R_Records as $rr) {
                        foreach ($R_Fields as $rf) {
                            $Field_Name = ($this->Syntax === NULL) ? preg_replace('/.*::/i', '', $rf) : strtr($rf, '::', '__');
                            $qr[$i]['Portal_' . $Portals[$j]][$k][$Field_Name] = htmlspecialchars_decode(($rr->getField($rf)));
                        }
                        ++$k;
                    }
                }
                ++$i;
            }

            return Array('status' => TRUE, 'data' => $qr);
        } catch (Exception $err) {
            $this->EmailController->notify_server_error($err->getMessage(), 'Get_Portal_Records Try-Catch [' . $Layout . ']', self::API_NOTIFY);
            return Array('status' => FALSE, 'data' => $err->getMessage());
        }
    }

    /**
     * 
     * Esta función permite hacer consultas con diferentes parametros, simulando 'and' y 'or'
     * 
     * @param $Layout Es el layout donde se realizará la búsqueda
     * 
     *      Ejemplo:
     *          $Layout = "Visitante"
     * 
     * @param $Args Representa todos los criterios de busqueda
     *      
     *      Ejemplo:
     *          $Args =  array(
     *              array( "tipoVisitante"=> "4" , "nombreVisitante"=>"==Carlos" ),
     *              array( "tipoVisitante"=> "2" , "nombreVisitante"=>"==Maria" ),
     *          );
     * 
     *      Equivale a SQL
     * 
     *          SELECT * FROM Visitante WHERE (tipoVisitante = 4 and nombreVisitante = "Carlos") or
     *          (tipoVisitante = 2 and nombreVisitante = "Maria")
     * 
     * @param $Sort Es un arreglo asociativo donde el key del array representa el nombre del campo para ordenar
     *        y el valor del array representa el tipo de ordenamiento
     * 
     *        Ejemplo:
     *          $Sort = array( "nombreVisitante"=>"ASCEND" );
     * *        $Sort = array( "nombreVisitante"=>"DESCEND" );
     */
    public function Do_ComplexQuery($Layout, $Args = null, $Sort = null) {

        if ($Args === null)
            return null;

        try {
            //Layout donde se hará la busqueda
            $Find = $this->Cnn->newCompoundFindCommand($Layout);
            if ($Sort !== NULL) {

                $i = 1;
                foreach ($Sort as $field => $value) {
                    switch ($value) {
                        case self::ASCEND:
                            $Find->addSortRule($field, $i, FILEMAKER_SORT_ASCEND);
                            break;
                        case self::DESCEND:
                            $Find->addSortRule($field, $i, FILEMAKER_SORT_DESCEND);
                            break;
                        default:
                            $Find->addSortRule($field, $i, FILEMAKER_SORT_ASCEND);
                            break;
                    }
                    ++$i;
                }
            }

            $index = 1;
            foreach ($Args as $args2) {
                $request = $this->Cnn->newFindRequest($Layout);
                foreach ($args2 as $field => $value) {
                    $request->addFindCriterion($field, $value);
                }
                $Find->add($index, $request);
                $index++;
            }
            // Execute the request.           
            $Result = $Find->execute();
            if (\FileMaker::isError($Result)) {
                if (!in_array($Result->getCode(), $this->OmitCode)) {
                    $this->EmailController->notify_server_error($Result->getMessage(), 'Do_ComplexQuery[' . $Layout . ']', self::API_NOTIFY, $Result->getCode());
                }
                return NULL;
            }
            $this->Set_FoundSet_Count($Result);
            return $this->Query_Results($Result);
        } catch (Exception $err) {
            $this->EmailController->notify_server_error($err->getMessage(), 'Do_ComplexQuery Try-Catch[' . $Layout . ']', self::API_NOTIFY);
            //trigger_error($err);
            print_r($err);
        }
    }

}

// End Class
?>