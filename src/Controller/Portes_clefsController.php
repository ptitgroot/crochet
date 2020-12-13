<?php


namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class Portes_clefsController extends AbstractController
{
    /**
     * @Route("/portes_clefs", name="portes_clefs")
     * @return Response
     */
    public function index()
    {
        return $this->render('peluches/portes_clefs.html.twig');
    }
}