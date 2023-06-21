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
        $qry = '';
        $qry .= 'SELECT';
        $qry .= '"Cliente",';
        $qry .= '"NoCuenta",';
        $qry .= '"Movimientos",';
        $qry .='"Cantidad"';
        $qry .=' FROM "QB"."vw_qb_Movimientos"';
        $result = $this->SQLModel->executeQuery($qry);
        return $result;
    }
    public function insDeposito (){
        $qry = '';
        $qry .= 'INSERT INTO';
        $qry .= '"Nombre",';
        $qry .= '"Apellidos",';
        $qry .= '"Correo"';
        $qry .= 'FROM "QB"."tb_qb_Clientes" LIMIT 20';
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
