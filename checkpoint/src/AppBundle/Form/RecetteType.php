<?php

namespace AppBundle\Form;

use AppBundle\Entity\CategorieRecette;
use AppBundle\Entity\Ingredient;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class RecetteType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nom')
            ->add('nombreDePersonne')
            ->add('categories', EntityType::class, array(
                'class'=> 'AppBundle\Entity\CategorieRecette',
                'placeholder'=> 'selectionnez votre catégorie',
                'mapped'=> false))
            ->add('ingredients',EntityType::class, array(
                'class'=> 'AppBundle\Entity\Ingredient',
                'label'     => 'Choisissez vos ingrédients',
                'mapped'  => false))
        ;
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
