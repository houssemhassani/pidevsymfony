<?php

namespace App\Controller;
use Twilio\Rest\Client;

use App\Entity\Employee;
use App\Form\EmployeeType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bridge\Twig\Mime\TemplatedEmail;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Mime\Address;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Symfony\Component\HttpFoundation\Response;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/gesemployee")
 *
 *
 */
class GestionEmployeeController extends AbstractController
{
    /**
     * @Route("/", name="app_gestion_employee_index", methods={"GET"})
     * @Security("is_granted('ROLE_ADMIN')")
     */
    public function index(Request $request,EntityManagerInterface $entityManager): Response
    {
        $user=new Employee();
        $this->get('security.token_storage')->getToken()->getUser();
        $donnee=$this->getDoctrine()->getRepository(Employee::class)->findAll();

        //$user=$this->get('security.context')->getToken()->getUser();
        return $this->render('gestion_employee/index.html.twig', [
            'employees' => $donnee,
            'user'=>$user
        ]);

    }


    /**
     * @Route("/new", name="app_gestion_employee_new", methods={"GET", "POST"})
     * @Security("is_granted('ROLE_ADMIN')")
     */
    public function new(Request $request, UserPasswordEncoderInterface $encoder,MailerInterface $mailer, EntityManagerInterface $entityManager): Response
    {
        $employee = new Employee();
        $form = $this->createForm(EmployeeType::class, $employee);
        $form->handleRequest($request);
        $sid    = "AC522e7bcbe6182a9e25d41e420bd2603f";
        $token  = "6b01aceaf76e4c7f44ff5476923f36dd";
        $twilio = new Client($sid, $token);


            if ($form->isSubmitted() && $form->isValid()) {
                $employee->setRole(2);
                $employee->setEquipe(null);
                $hash = $encoder->encodePassword($employee, $employee->getPassword());
                $employee->setPassword($hash);
                $e=$form["email"]->getData();
                $message = $twilio->messages
                    ->create("whatsapp:+21692144965", // to
                        array(
                            "from" => "whatsapp:+14155238886",
                            "body" => "Bienvenue Mr/Mme : ".$employee->getNom()."Vous êtes un Employée \n Vous pouvez coonecter sur notre application avec les coordonées suivants: \n CIN: ".$employee->getCin()."\n Mot De Passe :".$form->get('motDePasse')->getData(),
                        )
                    );
                $entityManager->persist($employee);
               // $nbr=$this->randomm();
                $entityManager->flush();
                $e=$form["email"]->getData();



                /*$email = (new TemplatedEmail())
                    ->from(new Address('noreplysahti@gmail.com', 'E-Citoyen'))
                    ->to($form->get("email")->getData())
                    ->subject('Bienvenue')
                    ->text("bienvenue à notre application E_Citoyen \n Vous êtes ajoutée comme une employee
                    \n Login:".$form->get('cin')->getData()." \n Mot De Passe :".$form->get("motDePasse")->getData());
                ;
                $mailer->send($email);*/





                return $this->redirectToRoute('app_gestion_employee_index', [], Response::HTTP_SEE_OTHER);

        }
        return $this->render('gestion_employee/new.html.twig', [
            'employee' => $employee,
            'form' => $form->createView(),
            'message'=>""
        ]);
    }

    /**
     * @Route("/{id}", name="app_gestion_employee_show", methods={"GET"})
     * @Security("is_granted('ROLE_ADMIN')")
     */
    public function show(Employee $employee): Response
    {
        return $this->render('gestion_employee/show.html.twig', [
            'employee' => $employee,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="app_gestion_employee_edit", methods={"GET", "POST"})
     * @Security("is_granted('ROLE_ADMIN')")
     */
    public function edit(Request $request, UserPasswordEncoderInterface $encoder, Employee $employee, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(EmployeeType::class, $employee);
        $form->handleRequest($request);
        

        if ($form->isSubmitted() && $form->isValid()) {
            $hash = $encoder->encodePassword($employee, $employee->getPassword());
            $employee->setPassword($hash);
            $entityManager->flush();

            return $this->redirectToRoute('app_gestion_employee_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('gestion_employee/edit.html.twig', [
            'employee' => $employee,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="app_gestion_employee_delete", methods={"POST"})
     * @Security("is_granted('ROLE_ADMIN')")
     */
    public function delete(Request $request, Employee $employee, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$employee->getId(), $request->request->get('_token'))) {
            $entityManager->remove($employee);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_gestion_employee_index', [], Response::HTTP_SEE_OTHER);
    }
}
