<?php

namespace App\Controller;

use App\Entity\Commantaire;
use App\Form\CommantaireType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/ajout/comm")
 */
class AjoutCommController extends AbstractController
{
    /**
     * @Route("/", name="app_ajout_comm_index", methods={"GET"})
     */
    public function index(EntityManagerInterface $entityManager): Response
    {
        $commantaires = $entityManager
            ->getRepository(Commantaire::class)
            ->findAll();

        return $this->render('ajout_comm/index.html.twig', [
            'commantaires' => $commantaires,
        ]);
    }

    /**
     * @Route("/new/{id}", name="app_ajout_comm_new", methods={"GET", "POST"})
     */
    public function new(Request $request, EntityManagerInterface $entityManager,int $id): Response
    {
        $commantaires = $entityManager
            ->getRepository(Commantaire::class)
            ->findAll();
        $commantaire = new Commantaire();
        $form = $this->createForm(CommantaireType::class, $commantaire);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $commantaire->setIdPublication($id);
            $entityManager->persist($commantaire);
            $entityManager->flush();

            return $this->redirectToRoute('app_ajout_comm_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('ajout_comm/new.html.twig', [
            'commantaires' => $commantaires,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="app_ajout_comm_show", methods={"GET"})
     */
    public function show(Commantaire $commantaire): Response
    {
        return $this->render('ajout_comm/show.html.twig', [
            'commantaire' => $commantaire,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="app_ajout_comm_edit", methods={"GET", "POST"})
     */
    public function edit(Request $request, Commantaire $commantaire, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(CommantaireType::class, $commantaire);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_ajout_comm_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('ajout_comm/edit.html.twig', [
            'commantaire' => $commantaire,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="app_ajout_comm_delete", methods={"POST"})
     */
    public function delete(Request $request, Commantaire $commantaire, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$commantaire->getId(), $request->request->get('_token'))) {
            $entityManager->remove($commantaire);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_ajout_comm_index', [], Response::HTTP_SEE_OTHER);
    }
}
