<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\IsTrue;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\NotBlank;

class RegistrationFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('first_name', TextType::class, array('attr' => array("class" => "form-control border-0", "style" => "margin-bottom: 15px;")))
            ->add('last_name', TextType::class, array('attr' => array("class" => "form-control border-0", "style" => "margin-bottom: 15px;")))
            ->add('birthday', DateType::class, 
            array(
                'widget' => 'choice',
                'years' => range(2003,1921,),
                'months' => range(date('m'), 12),
                'days' => range(date('d'), 31)),
            array('attr' => array("class" => "form-control border-0", "style" => "margin-bottom: 15px;",)))
            ->add('email', EmailType::class, array('attr' => array("class" => "form-control border-0", "style" => "margin-bottom: 15px; ")))

            ->add('password', PasswordType::class, array('attr' => array("class" => "form-control border-0", "style" => "margin-bottom: 15px;")), [
                // instead of being set onto the object directly,
                // this is read and encoded in the controller
                'mapped' => false,
                'attr' => ['autocomplete' => 'new-password'],
                'constraints' => [
                    new NotBlank([
                        'message' => 'Please enter a password',
                    ]),
                    new Length([
                        'min' => 6,
                        'minMessage' => 'Your password should be at least {{ limit }} characters',
                        // max length allowed by Symfony for security reasons
                        'max' => 4096,
                    ]),
                ],
            ])

            ->add('mentor_mantee', ChoiceType::class, array('choices'=>array('Mentor'=>'Mentor', 'Mentee'=>'Mentee'),'attr' => array('class'=> 'form-control border-0', 'style'=>'margin-botton:15px')))  
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}
