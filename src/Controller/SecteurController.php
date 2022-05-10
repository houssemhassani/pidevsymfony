<?php

namespace App\Controller;

use App\Entity\Secteur;
use App\Form\MapType;
use App\Repository\SecteurRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/secteur")
 */
class SecteurController extends AbstractController
{
    /**
     * @Route("/", name="app_secteur_index")
     */
    public function index(SecteurRepository $secteurRepository): Response
    {
        return $this->render('admin/secteur/index.html.twig', [
            'secteurs' => $secteurRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="app_secteur_new")
     */
    public function new(Request $request, SecteurRepository $secteurRepository): Response
    {
        $secteur = new Secteur();
        $form = $this->createForm(Secteur::class, $secteur);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $secteurRepository->add($secteur);
            return $this->redirectToRoute('app_secteur_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('admin/secteur/new.html.twig', [
            'secteur' => $secteur,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{idSecteur}", name="app_secteur_show", methods={"GET"})
     */
    public function show(Secteur $secteur): Response
    {
        return $this->render('admin/secteur/show.html.twig', [
            'secteur' => $secteur,
        ]);
    }

    /**
     * @Route("/{idSecteur}/edit", name="app_secteur_edit", methods={"GET", "POST"})
     */
    public function edit(Request $request, Secteur $secteur, SecteurRepository $secteurRepository): Response
    {
        $form = $this->createForm(MapType::class, $secteur);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $secteurRepository->add($secteur);
            return $this->redirectToRoute('app_secteur_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('admin/secteur/edit.html.twig', [
            'secteur' => $secteur,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{idSecteur}", name="app_secteur_delete", methods={"POST"})
     */
    public function delete(Request $request, Secteur $secteur, SecteurRepository $secteurRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$secteur->getIdSecteur(), $request->request->get('_token'))) {
            $secteurRepository->remove($secteur);
        }

        return $this->redirectToRoute('app_secteur_index', [], Response::HTTP_SEE_OTHER);
    }
}
