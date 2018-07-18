<?php

namespace AppBundle\DataFixtures;

use AppBundle\Entity\Ingredient;
use AppBundle\Entity\Recette;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class IngredientFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $ingredient = ['oeufs','farine','levure','beurre','chocolat','pommes','sucre',"jaune d'oeuf","blanc d'oeuf",'sucre roux','sel'];
        $i=0;
        foreach ($ingredient as $value) {
            
            $ingredient = new Ingredient();
            $ingredient->setNom($value);
            $manager->persist($ingredient);
            $this->addReference('ingredient'.$i,$ingredient);
            $i++;
        }

        $manager->flush();

        ;
    }
}