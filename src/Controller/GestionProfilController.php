<?php

namespace App\Controller;

use App\Entity\Employee;
use http\Env\Request;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
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
    /**
     * @Route ("/gestionprofil/modifier",name="app_gestion_profil_modifier_email")
     */
    public function modifierEmail() :Response

    {
        $task = new Employee();
        $form = $this->createFormBuilder($task)
            ->add('email')
            ->add('cin')
            ->add('ajouter',SubmitType::class)
            ->getForm();
        return $this->render('gestion_profil/modifierEmail.html.twig', [
            'form' => $form->createView(),
        ]);
    }
}
