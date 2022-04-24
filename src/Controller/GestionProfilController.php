<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Symfony\Component\Routing\Annotation\Route;

/**
 *
 *
 */
class GestionProfilController extends AbstractController
{
    /**
     * @Route("/gestionprofil", name="app_gestion_profil")
     *
     */
    public function index(): Response
    {
        return $this->render('gestion_profil/index.html.twig', [
            'controller_name' => 'GestionProfilController',
        ]);
    }
}
