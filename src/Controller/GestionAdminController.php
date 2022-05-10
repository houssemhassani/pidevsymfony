<?php

namespace App\Controller;

use App\Entity\Admin;
use App\Form\AdminType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Twilio\Rest\Client;
use function PHPUnit\Framework\equalTo;

/**
 * @Route("/gesadmin")
 * @Security("is_granted('ROLE_ADMIN')")
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
        $sid    = "AC522e7bcbe6182a9e25d41e420bd2603f";
        $token  = "6b01aceaf76e4c7f44ff5476923f36dd";
        $twilio = new Client($sid, $token);

        if ($form->isSubmitted() && $form->isValid()  ) {
            if($admin->getConfirmMotDePasse()==$admin->getMotDePasse())
            {
                $hash = $encoder->encodePassword($admin, $admin->getPassword());
                $admin->setMotDePasse($hash);
                $entityManager->persist($admin);
                $entityManager->flush();
                $message = $twilio->messages
                    ->create("whatsapp:+21692144965", // to
                        array(
                            "from" => "whatsapp:+14155238886",
                            "body" => "Bienvenue Mr/Mme : ".$admin->getNom()."Vous êtes un Admin \n Vous pouvez connecter sur notre application avec les coordonées suivants: \n CIN: ".$admin->getCin()."\n Mot De Passe :".$form->get('motDePasse')->getData(),
                        )
                    );
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
