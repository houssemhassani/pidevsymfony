<?php

namespace App\Controller;

use App\Entity\Citoyen;
use App\Entity\Employee;
use App\Form\CitoyenType;
use App\Repository\CitoyenRepository;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Twilio\Rest\Client;

/**
 * @Route("/gescitoyen")
 * @Security("is_granted('ROLE_ADMIN')")
 */
class GestioCitoyenController extends AbstractController
{
    /**
     * @Route("/", name="app_gestio_citoyen_index", methods={"GET"})
     */
    public function index(EntityManagerInterface $entityManager,CitoyenRepository $citoyenRepository): Response
    {
        $citoyens=$citoyenRepository->findOneBySomeField(false);

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
        $user=new Employee();

        if ($form->isSubmitted()  ) {

                $hash = $encoder->encodePassword($citoyen, $citoyen->getPassword());
                $citoyen->setEmailConfirmed(false);
                $citoyen->setMotDePasse($hash);
                $citoyen->setVille("null");
                $citoyen->setPhoto("null");
            $user->setRole(2);
            $user->setNom($form->get('nom')->getData());
            $user->setPrenom($form->get('prenom')->getData());
            $user->setCin($form->get('cin')->getData());

            $user->setEmail($form->get('email')->getData());
            $user->setMotDePasse($hash);
            $user->setService(null);
            $user->setEquipe(null);


            $entityManager->persist($citoyen);
            $entityManager->persist($user);
            $sid    = "AC522e7bcbe6182a9e25d41e420bd2603f";
            $token  = "6b01aceaf76e4c7f44ff5476923f36dd";
            $twilio = new Client($sid, $token);
            $message = $twilio->messages
                ->create("whatsapp:+21692144965", // to
                    array(
                        "from" => "whatsapp:+14155238886",
                        "body" => "Bienvenue Mr/Mme : ".$citoyen->getNom()."Vous êtes un citoyen \n Vous pouvez connecter sur notre application avec les coordonées suivants: \n CIN: ".$citoyen->getCin()."\n Mot De Passe :".$form->get('motDePasse')->getData(),
                    )
                );
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
     * @Route("/{id}/accept",name="app_gestion_citoyen_accepter",methods={"GET","POST"})
     */
    public function accepter(Request $request,Citoyen $citoyen,EntityManagerInterface $entityManager,CitoyenRepository $citoyenRepository): Response
    {
        $citoyen=$citoyenRepository->find($citoyen->getId());
        $citoyen->setEmailConfirmed(true);
        $entityManager->flush();

        return $this->redirectToRoute('app_gestio_citoyen_index',[],Response::HTTP_SEE_OTHER);
    }
    /**
     * @Route("/{id}/refuser",name="app_gestion_citoyen_refuser",methods={"GET"})
     */
    public function refuser(Request $request,Citoyen $citoyen,EntityManagerInterface $entityManager,CitoyenRepository $citoyenRepository)
    {

        $citoyen=$citoyenRepository->find($citoyen->getId());

        $qb = $entityManager->createQueryBuilder();
        $qb->delete('App\Entity\Employee', 's');
        $qb->where('s.cin = :project');
        $qb->setParameter('project', $citoyen->getCin());
        $qb->getQuery()->execute();


        $entityManager->remove($citoyen);

        $entityManager->flush();



        return $this->redirectToRoute('app_gestio_citoyen_index',[],Response::HTTP_SEE_OTHER);
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
