<?php

namespace App\Form;

use App\Entity\Chauffeur;
use App\Entity\Vehicule;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;


class VehiculeType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('immatricule')
            ->add('modele')
            ->add('marque')
            ->add('nbrePlace')
            ->add('visiteTechnique', ChoiceType::class, [
                'choices'  => [
                    'A Jour' => 'A Jour',
                    'Pas à jour' => 'Pas à jour',
                
                    
                ],
            ])
            ->add('assurance', ChoiceType::class, [
                'choices'  => [
                    'Valide' => 'Valide',
                    'Invalide' => 'Invalide',
                    
                    
                ],
            ])
            ->add('proprietaire', EntityType::class, [
                'class' => Chauffeur::class,
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
