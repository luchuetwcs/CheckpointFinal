<?php

namespace AppBundle\DataFixtures;

use AppBundle\Entity\Recette;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;

Class RecetteFixtures extends Fixture implements DependentFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $difficulte = ['Enfantin','Facile','Moyenne','Difficile'];
        $cout = ['Bon marché','Peu cher','Assez cher'];

        
        for($i = 0;$i <10; $i++){
            $recette = new Recette();
            $recette->setNom("Recette n° ");
            $recette->setNbPersonne(mt_rand(1,10));
            $recette->setDifficulte($difficulte[mt_rand(0,3)]);
            $recette->setCout($cout[mt_rand(0,2)]);
            $recette->setPreparation(new \DateTime());
            $recette->setCuisson(new \DateTime());
            $recette->setEtape('Etape ');

            $manager->persist($recette);
            $this->addReference('recette'.$i,$recette);
        }

        $manager->flush();

        
    }

    public function getDependencies()
    {
        return[
            IngredientFixtures::class
        ];
    }
}
