<?php

namespace App\Controller;

use App\Entity\Employee;
use App\Form\EmployeeType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;
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
    public function randomm()
    {
        $caracteres = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $longueurMax = strlen($caracteres);
        $chaineAleatoire = '';
        for ($i = 0; $i <8; $i++)
        {
            $chaineAleatoire .= $caracteres[rand(0, $longueurMax - 1)];
        }
        return $chaineAleatoire;
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


            if ($form->isSubmitted() && $form->isValid()) {
                $employee->setRole(2);
                $employee->setEquipe(null);
                $hash = $encoder->encodePassword($employee, $employee->getPassword());
                $employee->setPassword($hash);
                $e=$form["email"]->getData();
                $entityManager->persist($employee);
                $nbr=$this->randomm();
                $entityManager->flush();
                $e=$form["email"]->getData();

                $email = (new Email())
                    ->from('houssemhassanii@gmail.com')
                    ->to($e)
                    ->subject('🥳 Une nouvelle reclamation est organisé à 🥳ForU🥳')

                    ->text('Bien Inscrit . Vous voulez attendre une email de confirmation de la part de notre admin : '.$nbr);

                $mailer->send($email);




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
