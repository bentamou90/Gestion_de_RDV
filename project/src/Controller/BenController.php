<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class BenController extends AbstractController
{
    /**
     * @Route("/ben", name="ben")
     */
    public function index(): Response
    {
        return $this->render('ben/index.html.twig', [
            'controller_name' => 'BenController',
        ]);
    }

      /**
     * @Route("/premier",name="premier")
     */
    public function there(){
        return $this->render('blog/index.html.twig' , [
            'title' => "Bienvenue sur ma page Clinique Milie!",
        ]);
    }
}
