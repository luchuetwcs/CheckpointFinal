<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;


class recetteType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('titre')
            ->add('description', TextareaType::class, array ('attr' => array('maxlength' => 300),'required'=> false, 'label'=>'Description :'))
            ->add('ingredient', TextType::class , array('required' => false ))
            ->add('ingredient1', TextType::class , array('required' => false ))
            ->add('ingredient2', TextType::class , array('required' => false ))
            ->add('ingredient3', TextType::class , array('required' => false ))
            ->add('ingredient4', TextType::class , array('required' => false ))
            ->add('ingredient5', TextType::class , array('required' => false ));
    }/**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\recette'
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
