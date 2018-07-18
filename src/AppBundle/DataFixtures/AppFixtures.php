<?php

namespace AppBundle\DataFixtures;

use AppBundle\Entity\ListeIngredients;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

class AppFixtures extends Fixture implements DependentFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        for($i = 0; $i < 45; $i++){
            $listeIngredient = new ListeIngredients();
            $listeIngredient->setQuantite(rand(0,100));
            $listeIngredient->setIngredient($this->getReference('ingredient'.rand(0,49)));
            $listeIngredient->setRecette($this->getReference('recette'.rand(0,9)));

            $manager->persist($listeIngredient);
            $this->addReference('listeIngredient' . $i, $listeIngredient);
        }
        $manager->flush();
    }

    public function getDependencies()
    {
        return[
            IngredientFixtures::class,
            RecetteFixtures::class
        ];
    }
}
