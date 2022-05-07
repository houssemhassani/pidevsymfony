<?php

namespace App\Controller;

use App\Entity\Commantaire;
use App\Form\CommantaireType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\ORM\EntityManagerInterface;
use App\Entity\Publication;

class DetailsController extends AbstractController
{

    /**
     * @Route("/details/{id}", name="app_details")
     */
    public function index(Request $request,EntityManagerInterface $entityManager,int $id): Response
    {
        $publications = $entityManager
            ->getRepository(Publication::class)
            ->find($id);

        $commantaire = new Commantaire();
        $form = $this->createForm(CommantaireType::class, $commantaire);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $commantaire->setPublication($publications);
            $entityManager->persist($commantaire);
            $entityManager->flush();

            return $this->redirectToRoute('app_details', array(
                'id' => $id
            ), Response::HTTP_SEE_OTHER);
        }
        return $this->render('details/index.html.twig', [
            'controller_name' => 'DetailsController','publications' => $publications,'commantaires' => $publications->getCommantaires(),
            'form' => $form->createView()
        ]);
    }


}
