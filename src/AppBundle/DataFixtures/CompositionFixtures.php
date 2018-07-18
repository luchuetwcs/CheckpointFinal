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
        for($i=0; $i<5;$i++){
            $a =0;
            while($a < mt_rand(1,10)){
                $composition = new Composition();
                $composition->setQuantite(mt_rand(0,1000));
                $composition->setRecette($this->getReference('recette'.$i));
                $composition->setIngredients($this->getReference('ingredient'.mt_rand(0,10)));

                $manager->persist($composition);
                $a++;
            }
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