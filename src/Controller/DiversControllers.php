<?php


namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DiversControllers extends AbstractController
{
    /**
     * @Route("/divers", name="divers")
     * @return Response
     */
    public function index()
    {
        return $this->render('peluches/divers.html.twig');
    }
}