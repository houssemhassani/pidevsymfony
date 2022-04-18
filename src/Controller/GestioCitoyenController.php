<?php

namespace App\Controller;

use App\Entity\Citoyen;
use App\Form\CitoyenType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

/**
 * @Route("/gescitoyen")
 */
class GestioCitoyenController extends AbstractController
{
    /**
     * @Route("/", name="app_gestio_citoyen_index", methods={"GET"})
     */
    public function index(EntityManagerInterface $entityManager): Response
    {
        $citoyens = $entityManager
            ->getRepository(Citoyen::class)
            ->findAll();

        return $this->render('gestio_citoyen/index.html.twig', [
            'citoyens' => $citoyens,
        ]);
    }

    /**
     * @Route("/new", name="app_gestio_citoyen_new", methods={"GET", "POST"})
     */
    public function new(Request $request,UserPasswordEncoderInterface $encoder, EntityManagerInterface $entityManager): Response
    {
        $citoyen = new Citoyen();
        $form = $this->createForm(CitoyenType::class, $citoyen);
        $form->handleRequest($request);

        if ($form->isSubmitted()  ) {

                $hash = $encoder->encodePassword($citoyen, $citoyen->getPassword());
                $citoyen->setEmailConfirmed(false);
                $citoyen->setMotDePasse($hash);
                $entityManager->persist($citoyen);
                $entityManager->flush();
                return $this->redirectToRoute('app_gestio_citoyen_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('gestio_citoyen/new.html.twig', [
            'citoyen' => $citoyen,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="app_gestio_citoyen_show", methods={"GET"})
     */
    public function show(Citoyen $citoyen): Response
    {
        return $this->render('gestio_citoyen/show.html.twig', [
            'citoyen' => $citoyen,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="app_gestio_citoyen_edit", methods={"GET", "POST"})
     */
    public function edit(Request $request, Citoyen $citoyen, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(CitoyenType::class, $citoyen);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_gestio_citoyen_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('gestio_citoyen/edit.html.twig', [
            'citoyen' => $citoyen,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="app_gestio_citoyen_delete", methods={"POST"})
     */
    public function delete(Request $request, Citoyen $citoyen, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$citoyen->getId(), $request->request->get('_token'))) {
            $entityManager->remove($citoyen);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_gestio_citoyen_index', [], Response::HTTP_SEE_OTHER);
    }
}
