<?php

namespace App\Controller;

use App\Entity\Admin;
use App\Form\AdminType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use function PHPUnit\Framework\equalTo;

/**
 * @Route("/gesadmin")
 */
class GestionAdminController extends AbstractController
{
    /**
     * @Route("/", name="app_gestion_admin_index", methods={"GET"})
     */
    public function index(EntityManagerInterface $entityManager): Response
    {
        $admins = $entityManager
            ->getRepository(Admin::class)
            ->findAll();

        return $this->render('gestion_admin/index.html.twig', [
            'admins' => $admins,
        ]);
    }

    /**
     * @Route("/new", name="app_gestion_admin_new", methods={"GET", "POST"})
     */
    public function new(Request $request,UserPasswordEncoderInterface $encoder, EntityManagerInterface $entityManager): Response
    {
        $admin = new Admin();
        $form = $this->createForm(AdminType::class, $admin);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()  ) {
            if($admin->getConfirmMotDePasse()==$admin->getMotDePasse())
            {
                $hash = $encoder->encodePassword($admin, $admin->getPassword());
                $admin->setMotDePasse($hash);
                $entityManager->persist($admin);
                $entityManager->flush();
                return $this->redirectToRoute('app_gestion_admin_index', [], Response::HTTP_SEE_OTHER);
            }
        }

        return $this->render('gestion_admin/new.html.twig', [
            'admin' => $admin,
            'form' => $form->createView(),

        ]);
    }

    /**
     * @Route("/{id}", name="app_gestion_admin_show", methods={"GET"})
     */
    public function show(Admin $admin): Response
    {
        return $this->render('gestion_admin/show.html.twig', [
            'admin' => $admin,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="app_gestion_admin_edit", methods={"GET", "POST"})
     */
    public function edit(Request $request, Admin $admin, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(AdminType::class, $admin);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_gestion_admin_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('gestion_admin/edit.html.twig', [
            'admin' => $admin,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="app_gestion_admin_delete", methods={"POST"})
     */
    public function delete(Request $request, Admin $admin, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$admin->getId(), $request->request->get('_token'))) {
            $entityManager->remove($admin);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_gestion_admin_index', [], Response::HTTP_SEE_OTHER);
    }
}
