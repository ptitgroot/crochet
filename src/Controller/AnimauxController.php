<?php


namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class AnimauxController extends AbstractController
{
    /**
     * @Route("/animaux", name="animaux")
     * @return Response
     */
    public function index()
    {
        return $this->render('peluches/animaux.html.twig');
    }
}
