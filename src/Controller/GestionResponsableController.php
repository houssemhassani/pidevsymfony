<?php

namespace App\Controller;

use App\Entity\Employee;
use App\Form\Employee1Type;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/gesresponsable")
 */
class GestionResponsableController extends AbstractController
{
    /**
     *
     * @Route("/", name="app_gestion_responsable_index", methods={"GET"})
     */
    public function index(EntityManagerInterface $entityManager): Response
    {
        $employees = $entityManager
            ->getRepository(Employee::class)
            ->findAll();

        return $this->render('gestion_responsable/index.html.twig', [
            'employees' => $employees,
        ]);
    }

    /**
     *
     * @Route("/new", name="app_gestion_responsable_new", methods={"GET", "POST"})
     */
    public function new(Request $request,UserPasswordEncoderInterface $encoder, EntityManagerInterface $entityManager): Response
    {
        $employee = new Employee();
        $form = $this->createForm(Employee1Type::class, $employee);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $employee->setRole(1);
            $employee->setEquipe(null);
            $hash = $encoder->encodePassword($employee, $employee->getPassword());
            $employee->setPassword($hash);
            $entityManager->persist($employee);

            $entityManager->flush();

            return $this->redirectToRoute('app_gestion_responsable_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('gestion_responsable/new.html.twig', [
            'employee' => $employee,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="app_gestion_responsable_show", methods={"GET"})
     */
    public function show(Employee $employee): Response
    {
        return $this->render('gestion_responsable/show.html.twig', [
            'employee' => $employee,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="app_gestion_responsable_edit", methods={"GET", "POST"})
     */
    public function edit(Request $request, Employee $employee, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(Employee1Type::class, $employee);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_gestion_responsable_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('gestion_responsable/edit.html.twig', [
            'employee' => $employee,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="app_gestion_responsable_delete", methods={"POST"})
     */
    public function delete(Request $request, Employee $employee, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$employee->getId(), $request->request->get('_token'))) {
            $entityManager->remove($employee);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_gestion_responsable_index', [], Response::HTTP_SEE_OTHER);
    }
}
