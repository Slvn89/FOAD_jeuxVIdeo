<?php

namespace App\Form;

use App\Entity\Joueurs;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class InscriptionType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nom_joueur')
            ->add('pseudonyme')
            ->add('date_naissance')
            ->add('email')
            ->add('password')
            ->add('avatar')
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Joueurs::class,
        ]);
    }
}
