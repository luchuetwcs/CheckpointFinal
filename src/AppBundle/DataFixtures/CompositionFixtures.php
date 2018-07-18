<?php

namespace AppBundle\DataFixtures;

use AppBundle\Entity\Composition;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;

Class CompositionFixtures extends Fixture implements DependentFixtureInterface
{
    public function load(ObjectManager $manager)
    {   
        for($i=0; $i<10;$i++){
        $composition = new Composition();
        $composition->setQuantite(mt_rand(0,1000));
        for($a=0; $a<mt_rand(1,15); $a++){
        $composition->setRecette($this->getReference('recette'.$i));
        }
        $composition->setIngredients($this->getReference('ingredient'.$i));

        $manager->persist($composition);
        }
        $manager->flush();
    }

    public function getDependencies()
    {
        return[
            RecetteFixtures::class,
            IngredientFixtures::class
        ];
    }
}