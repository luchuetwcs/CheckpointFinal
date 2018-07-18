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
        $difficulte = ['Enfantin','Facile','Moyenne','Difficile'];
        $cout = ['Bon marché','Peu cher','Assez cher'];

        $randCout = array_rand($cout,1);
        for ($i = 0; $i < 5; $i++) {

            $recette = new Recette();
            $recette->setNom("Recette n° ".$i);
            $recette->setNbPersonne(mt_rand(1,10));
            $recette->setDifficulte($difficulte[mt_rand(0,3)]);
            $recette->setCout($cout[mt_rand(0,2)]);
            $recette->setPreparation(new \DateTime('00:'.$i));
            $recette->setCuisson(new \DateTime());
            $recette->setEtape('Etape ');

            $manager->persist($recette);

        }

        foreach ($ingredient as $value) {
            $ingredient = new Ingredient();
            $ingredient->setNom($value);
            $manager->persist($ingredient);
        }

        $manager->flush();
    }
}