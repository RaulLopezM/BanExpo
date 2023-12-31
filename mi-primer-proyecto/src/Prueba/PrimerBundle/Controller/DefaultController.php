<?php

namespace Prueba\PrimerBundle\Controller;

use Prueba\PrimerBundle\Model\PruebaModel;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use AppBundle\Entity\Movimiento;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;



class DefaultController extends Controller{

    protected $PruebaModel;
    public function __construct()
    {
        $this->PruebaModel = new PruebaModel();
    }
    public function indexAction()
    {
        $resultVisitante = $this->PruebaModel->getVisitante();




        $array = json_decode('[
              {
                "Nombre": "Juan",
                "Apellidos": "Peréz",
                "Correo": "juan@example.com"
            },
             {
                "Nombre": "Luis",
                "Apellidos": "Hernandéz",
                "Correo": "luis@example.com"
            },
            {
                "Nombre": "María" ,
                "Apellidos": "González",
                "Correo": "maria@example.com"
            },
            {
                "Nombre": "Raul",
                "Apellidos": "Pérez",
                "Correo": "Raul@example.com"
            }
        ]');

        return $this->render('PruebaPrimerBundle:Default:index.html.twig');

    }
    public function getMovimientosAction(Request $noCuenta){

        $post = $noCuenta->getContent();
        $post = json_decode($post, true);

        $result=$this->PruebaModel->getMovimientos($post['ncuenta']);

        return $this->jsonResponse($result);

    }
    public function insertarMovAction(Request $request)
    {
        $post = $request->getContent();
        $post = json_decode($post, true);
        $result=$this->PruebaModel->insDeposito($post);

        return $this->jsonResponse($result);
    }
    public function getSaldoAction(Request $saldo){
        $post = $saldo->getContent();
        $post = json_decode($post,true);
        $result = $this->PruebaModel->getSaldo();
    }
    protected function jsonResponse($data)
    {
        $response = new Response(json_encode($data));
        $response->headers->set('Content-Type','application/json');
        return $response;
    }
}
