<?php

namespace App\Controller;

use App\Entity\Employee;
use App\Form\EmployeeType;
use Doctrine\ORM\EntityManagerInterface;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Symfony\Component\HttpFoundation\Response;
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
     * @IsGranted("ROLE_EMPLOYEE")
     */
    public function index(Request $request,EntityManagerInterface $entityManager,PaginatorInterface $paginator): Response
    {
        $user=new Employee();
        $this->get('security.token_storage')->getToken()->getUser();
        $donnee=$this->getDoctrine()->getRepository(Employee::class)->findAll();
        $employees =$paginator->paginate($donnee,
            $request->query->getInt('page', 3)) ;

        //$user=$this->get('security.context')->getToken()->getUser();
        return $this->render('gestion_employee/index.html.twig', [
            'employees' => $employees,
            'user'=>$user
        ]);
    }

    /**
     * @Route("/new", name="app_gestion_employee_new", methods={"GET", "POST"})
     */
    public function new(Request $request, UserPasswordEncoderInterface $encoder, EntityManagerInterface $entityManager): Response
    {
        $employee = new Employee();
        $form = $this->createForm(EmployeeType::class, $employee);
        $form->handleRequest($request);


            if ($form->isSubmitted() && $form->isValid()) {
                $employee->setRole(0);
                $employee->setEquipe(null);
                $hash = $encoder->encodePassword($employee, $employee->getPassword());
                $employee->setPassword($hash);
                $entityManager->persist($employee);
                $entityManager->flush();


    
                return $this->redirectToRoute('app_gestion_employee_index', Response::HTTP_SEE_OTHER);

        }
        return $this->render('gestion_employee/new.html.twig', [
            'employee' => $employee,
            'form' => $form->createView(),
            'message'=>""
        ]);
    }

    /**
     * @Route("/{id}", name="app_gestion_employee_show", methods={"GET"})
     */
    public function show(Employee $employee): Response
    {
        return $this->render('gestion_employee/show.html.twig', [
            'employee' => $employee,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="app_gestion_employee_edit", methods={"GET", "POST"})
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
