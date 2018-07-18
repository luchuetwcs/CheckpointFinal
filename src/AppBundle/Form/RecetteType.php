<?php

namespace AppBundle\Form;

use AppBundle\Entity\Preparateur;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\OptionsResolver\OptionsResolver;


class RecetteType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('preparateur',PreparateurType::class)
            ->add('nomRecette')
            ->add('imageFile',FileType::class)
            ->add('dateRecette')
            ->add('preparation')
            ->add('tempsDePreparation')
            ->add('nbPersonne')
            ->add('dificulte' ,ChoiceType::class, array(
                'choices'  => array(
                    'Dificile' => 'Dificile',
                    'facile' =>  'facile',
                    'moyenne' => 'moyenne',
                )))
            ->add('typeDeRecette' ,ChoiceType::class, array(
        'choices'  => array(
            'Entree' => 'Entree',
            'Plat' =>  'Plat',
            'Dessert' => 'Dessert',
        )));

    }/**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Recette'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'appbundle_recette';
    }


}
