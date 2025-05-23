<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class RegistrationFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('email', EmailType::class, [
                'required' => true,
                'label' => 'Email',
            ])
            ->add('nom', TextType::class, [
                'required' => true,
                'label' => 'Nom',
            ])
            ->add('plainPassword', PasswordType::class, [
                'mapped' => false,
                'required' => true,
                'label' => 'Mot de passe',
            ])
            ->add('agreeTerms', CheckboxType::class, [
                'mapped' => false,
                'required' => true,
                'label' => 'J\'accepte les termes et conditions',
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}
