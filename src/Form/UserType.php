<?php

namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints as Assert;

class UserType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
        ->add('email')
        ->add('sexe', ChoiceType::class, [
            'choices'  => [
                'male' => 'male',
                'female' => 'female',
                'other' => 'other',
            ],
        ])
        ->add('name')
        ->add('adresse')
        ->add('cin')
        ->add('password',RepeatedType::class, [
            'type'=>PasswordType::class,
            'first_options'=>['label'=>'Password'],
            'second_options'=>['label'=>'Confirm Password']
            
        ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            // Configure your form options here
        ]);
    }
}
