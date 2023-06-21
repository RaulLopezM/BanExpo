<?php

namespace Prueba\PrimerBundle\Controller;

use Prueba\PrimerBundle\Model\PruebaModel;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class DefaultController extends Controller{

    protected $PruebaModel;
    public function __construct()
    {
        $this->PruebaModel = new PruebaModel();
    }
    public function indexAction()
    {
        $resultVisitante = $this->PruebaModel->getVisitante();

        $resultMovimiento = $this->PruebaModel->getMovimientos();



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

        return $this->render('PruebaPrimerBundle:Default:index.html.twig',array('data' => $resultMovimiento));

    }
}
