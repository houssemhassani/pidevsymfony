<?php

namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\NotBlank;

class ResetPasswordRequestFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('cin',TextType::class,[
                'attr'=>['autocomplete' => 'cin'],
                'constraints'=>[
                    new NotBlank([
                        'message' =>"Entre votre cin svp"
                    ]),
                    new Length([
                        'min' => 8,
                        'minMessage' => 'cin doit etre 8 entier',
                        'max' =>8,
                        'maxMessage' =>'cin doit etre 8 entier',
                        ]),
                ],
            ])
            ->add('email', EmailType::class, [
                'attr' => ['autocomplete' => 'email'],
                'constraints' => [
                    new NotBlank([
                        'message' => 'SVP entrer votre email',
                    ]),

                ],
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([]);
    }
}
