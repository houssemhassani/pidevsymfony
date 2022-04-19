<?php

namespace App\Controller;

use App\Entity\Admin;
use App\Entity\Demande;
use App\Entity\Service;
use App\Form\Demande1Type;
use App\Repository\CitoyenRepository;
use App\Repository\DemandeRepository;
use App\Repository\ServiceRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/demande")
 */
class DemandeController extends AbstractController
{


    /**
     * @Route("/table", name="app_demande_index", methods={"GET"})
     */
    public function indexadmin(): Response
    {
          $demande =$this->getDoctrine()->getManager()->getRepository(Demande::class)->findAll();



        return $this->render('demande/index.html.twig', [
            'demandes'=>$demande
        ]);

    }


















    /**
     * @Route("/new", name="app_demande_new", methods={"GET", "POST"})
     */
    public function new(Request $request, EntityManagerInterface $entityManager, CitoyenRepository $rep1,ServiceRepository $rep2): Response
    {
        $demande = new Demande();
        $demande->setDateDemande(new \DateTime('now'));
        $form = $this->createForm(Demande1Type::class, $demande);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            (new \DateTime('now'));
          //  ( new \DateTime-('Y-m-d H:i:s'));
            $demande-> setEtat('en cours');
            $entityManager->persist($demande);
            $entityManager->flush();

            return $this->redirectToRoute('app_demande_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('demande/new.html.twig', [
            'demande' => $demande,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="app_demande_show", methods={"GET"})
     */
    public function show(Demande $demande): Response
    {
        return $this->render('demande/show.html.twig', [
            'demande' => $demande,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="app_demande_edit", methods={"GET", "POST"})
     */
    public function edit(Request $request, Demande $demande, EntityManagerInterface $entityManager): Response
    {
        $demande->setEtat('traité');
        $form = $this->createForm(Demande1Type::class, $demande);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $entityManager->flush();

            return $this->redirectToRoute('app_demande_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('demande/edit1.html.twig', [
            'demande' => $demande,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="app_demande_delete", methods={"POST"})
     */
    public function delete(Request $request, Demande $demande, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$demande->getId(), $request->request->get('_token'))) {
            $entityManager->remove($demande);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_demande_index', [], Response::HTTP_SEE_OTHER);
    }


    /**
     * @param Request $request
     * @param DemandeRepository $repository
     * @return Response
     * @Route ("table/recherche", name="recherche")
     */


    public function  rechercheByDate(Request $request , DemandeRepository $repository){

      //  $em=$this->getDoctrine()->getManager();
       // $demande = $em->getRepository($repository)->findAll();
            $data = $request->get('search');
            $demande = $repository->findBy (['typeDemande'=>$data],array('numDemande'=>'ASC'));

        return $this->render('demande/index.html.twig', [
            'demandes'=>$demande
        ]);
    }




}
