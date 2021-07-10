<?php

namespace App\Form;

use App\Entity\Vehicule;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class VehiculeType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('immatricule')
            ->add('modele')
            ->add('marque')
            ->add('nbrePlace')
            ->add('visiteTechnique')
            ->add('assurance')
            ->add('proprietaire', EntityType::class, [
                'class' => Vehicule::class,
                'choice_label' => 'id'
        ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Vehicule::class,
        ]);
    }
}
