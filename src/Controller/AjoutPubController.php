<?php

namespace App\Controller;

use App\Entity\Publication;
use App\Entity\User;
use App\Form\PublicationType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\DomCrawler\Image;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/ajout/pub")
 */
class AjoutPubController extends AbstractController
{
    /**
     * @Route("/", name="app_ajout_pub_index", methods={"GET"})
     */
    public function index(EntityManagerInterface $entityManager): Response
    {
        $publications = $entityManager
            ->getRepository(Publication::class)
            ->findAll();

        return $this->render('ajout_pub/index.html.twig', [
            'publications' => $publications,
        ]);
    }


    /**
     * @Route("/new", name="app_ajout_pub_new", methods={"GET", "POST"})
     */
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $publication = new Publication();
        $form = $this->createForm(PublicationType::class, $publication);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $file= $publication->getPhoto();
            $fileName= md5(uniqid()).'.'.$file->guessExtension();
            try {
                $file->move(
                    $this->getParameter('uploads'),
                    $fileName
                );
            } catch (FileException $e) {
                // ... handle exception if something happens during file upload
            }
            $entityManager = $this->getDoctrine()->getManager();
            $publication->setPhoto($fileName);
            $entityManager->persist($publication);
            $entityManager->flush();
            $this->addFlash(
                'info',
                'added successfully'
            );
            return $this->redirectToRoute('app_ajout_pub_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('ajout_pub/new.html.twig', [
            'publication' => $publication,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="app_ajout_pub_show", methods={"GET"})
     */
    public function show(Publication $publication): Response
    {
        return $this->render('ajout_pub/show.html.twig', [
            'publication' => $publication,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="app_ajout_pub_edit", methods={"GET", "POST"})
     */
    public function edit(Request $request, Publication $publication, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(PublicationType::class, $publication);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $file= $publication->getPhoto();
            $fileName= md5(uniqid()).'.'.$file->guessExtension();
            try {
                $file->move(
                    $this->getParameter('uploads'),
                    $fileName
                );
            } catch (FileException $e) {
                // ... handle exception if something happens during file upload
            }
            $entityManager = $this->getDoctrine()->getManager();
            $publication->setPhoto($fileName);
            $entityManager->flush();

            return $this->redirectToRoute('app_ajout_pub_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('ajout_pub/edit.html.twig', [
            'publication' => $publication,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="app_ajout_pub_delete", methods={"POST"})
     */
    public function delete(Request $request, Publication $publication, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$publication->getId(), $request->request->get('_token'))) {
            $entityManager->remove($publication);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_ajout_pub_index', [], Response::HTTP_SEE_OTHER);
    }

    /**
     * @Route("/{id}/like", name="app_ajout_pub_like", methods={"GET","POST"})
     */
    public function like(Publication $publication, EntityManagerInterface $entityManager)
    {
        /** @var User $user */
        $user = $this->getUser();

        $publication->addUserLike($user);
        $user->addPublicationsLiked($publication);

        $entityManager->flush();

        return $this->redirectToRoute('app_details',[
            'id' => $publication->getId()
        ]);
    }

    /**
     * @Route("/{id}/dislike", name="app_ajout_pub_dislike", methods={"GET","POST"})
     */
    public function dislike(Publication $publication, EntityManagerInterface $entityManager)
    {
        /** @var User $user */
        $user = $this->getUser();

        $publication->addUserDisliked($user);
        $user->addPublicationsDisliked($publication);

        $entityManager->flush();

        return $this->redirectToRoute('app_details',[
            'id' => $publication->getId()
        ]);
    }

}
