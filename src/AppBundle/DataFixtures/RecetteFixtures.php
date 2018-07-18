<?php

namespace AppBundle\DataFixtures;

use AppBundle\Entity\Recette;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use Faker\Factory;

class RecetteFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $faker = Factory::create();
        for($i = 0; $i < 10; $i++){
            $recette = new Recette();
            $recette->setNom($faker->word);
            $recette->setCuisson(rand(0,100));
            $recette->setPreparation(rand(5,100));
            $recette->setDescription($faker->realText(rand(100,1000)));
            $recette->setType($faker->word);
            $recette->setVegetarien(rand(0,1));

            $manager->persist($recette);
            $this->addReference('recette'.$i, $recette);
        }
        $manager->flush();
    }
}
