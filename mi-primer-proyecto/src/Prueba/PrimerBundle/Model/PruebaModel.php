<?php
namespace Prueba\PrimerBundle\Model;
use Utilerias\SQLBundle\Model\SQLModel;

class PruebaModel{
    protected $SQLModel;
    public function __construct(){
        $this->SQLModel = new SQLModel();
        $this->SQLModel->setSchema("QB");
    }
    public function getVisitante(){
        $qry = '';
        $qry .= 'SELECT';
        $qry .= '"Nombre",';
        $qry .= '"Apellidos",';
        $qry .= '"Correo"';
        $qry .= 'FROM "QB"."tb_qb_Clientes" LIMIT 20';
        $result = $this->SQLModel->executeQuery($qry);
        return $result;
    }
    public function  getMovimientos(){

        $cliente = "7";
        $qry = '';
        $qry .= 'SELECT';
        $qry .= '"Cliente",';
        $qry .= '"NoCuenta",';
        $qry .= '"Movimientos",';
        $qry .='"Cantidad"';
        $qry .=' FROM "QB"."vw_qb_Movimientos"';
        $qry .=' WHERE "NoCuenta"=';
        $qry.="$cliente";
        $result = $this->SQLModel->executeQuery($qry);
        return $result;
    }
    public function insDeposito ($datos){
        $tipoTrans =$datos['tipoTrans'];
        $cantidad = $datos['cantidad'];
        $qry = '';
        $qry .= 'INSERT ';
        $qry .= 'INTO "QB"."tb_qb_Transacciones"';
        $qry .= '("Fecha","Cantidad","TipoTrans","NoCuenta") ';
        $qry .= 'VALUES(';
        $qry .= "now(),$cantidad,'$tipoTrans',7)";

        $result = $this->SQLModel->executeQuery($qry);
        return $result;
    }
    public function uptSaldo(){
        $qry = '';
        $qry .= 'SELECT';
        $qry .= '"Nombre",';
        $qry .= '"Apellidos",';
        $qry .= '"Correo"';
        $qry .= 'FROM "QB"."tb_qb_Clientes" LIMIT 20';
        $result = $this->SQLModel->executeQuery($qry);
        return $result;
    }
}

?>
