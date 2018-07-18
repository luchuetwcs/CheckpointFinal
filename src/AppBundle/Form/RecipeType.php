<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use AppBundle\Entity\Recipe;
use AppBundle\Form\IngredientType;

class RecipeType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('name')->add('image')->add('details')->add('difficulty')->add('time');

        /*$builder->add('ingredients', CollectionType::class, array(
            'entry_type' => IngredientType::class,
            'entry_options' => array('label' => false),
            'allow_add' => true,
            'by_reference' => false,
        ));*/
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => Recipe::class,
        ));
    }


}
