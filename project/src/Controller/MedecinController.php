<?php

namespace App\Controller;

use App\Entity\Medecin;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MedecinController extends AbstractController
{
    /**
     * @Route("/medecin", name="medecin")
     */
    public function index(): Response
    {
        $doctrine=$this->getDoctrine();
        $rep=$doctrine->getRepository(Medecin::class);
        $LesMedecins=$rep->findAll();
        return $this->render('medecin/index.html.twig', [
            'LesMedecins' => $LesMedecins
        ]);
    }
}
