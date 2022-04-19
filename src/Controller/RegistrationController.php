<?php

namespace App\Controller;

use App\Entity\Citoyen;
use App\Entity\Employee;
use App\Form\RegistrationFormType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Symfony\Contracts\Translation\TranslatorInterface;

class RegistrationController extends AbstractController
{
    /**
     * @Route("/register", name="app_register")
     */
    public function register(Request $request, UserPasswordEncoderInterface $userPasswordEncoder, EntityManagerInterface $entityManager): Response
    {
        $user = new Employee();
        $form = $this->createForm(RegistrationFormType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // encode the plain password
            $user->setMotDePasse(
            $userPasswordEncoder->encodePassword(
                    $user,
                    $form->get('motDePasse')->getData()
                )
            );
            $user->setEquipe( null);
            $user->setService(null);
            $user->setRole(2);
            $citoyen=new Citoyen();
            $citoyen->setNom($form->get('nom')->getData());
            $citoyen->setPrenom($form->get('prenom')->getData());
            $citoyen->setEmail($form->get('email')->getData());
            $citoyen->setCin($form->get('cin')->getData());
            $citoyen->setVille("");
            $citoyen->setPhoto("null");
            $citoyen->setEmailConfirmed(false);
            $citoyen->setNumTel(0);
            $citoyen->setMotDePasse($userPasswordEncoder->encodePassword(
                $user,
                $form->get('motDePasse')->getData()
            ));
            $user->setRoles("EMPLOYEE_USER");
            $entityManager->persist($citoyen);

            $entityManager->persist($user);
            $entityManager->flush();
            // do anything else you need here, like send an email

            return $this->redirectToRoute('app_login');
        }

        return $this->render('registration/register.html.twig', [
            'registrationForm' => $form->createView(),
        ]);
    }
}