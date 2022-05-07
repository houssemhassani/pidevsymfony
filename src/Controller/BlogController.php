<?php

namespace App\Controller;

use App\Entity\Publication;
use App\Form\PublicationType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class BlogController extends AbstractController
{
    /**
     * @Route("/blog", name="app_blog")
     */
    public function index(Request $request,EntityManagerInterface $entityManager): Response
    {
        $publications = $entityManager
            ->getRepository(Publication::class)
            ->findAll();
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
            return $this->redirectToRoute('app_blog', [], Response::HTTP_SEE_OTHER);
        }

         return $this->render('blog/index.html.twig', [
            'controller_name' => 'BlogController','publications' => $publications,
             'form' => $form->createView()
        ]);
    }


}

