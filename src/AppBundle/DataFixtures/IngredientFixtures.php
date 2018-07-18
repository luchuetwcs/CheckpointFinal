<?php

namespace AppBundle\DataFixtures;

use AppBundle\Entity\Ingredient;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use Faker\Factory;

class IngredientFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $faker = Factory::create();
        for($i = 0; $i < 50; $i++){
            $ingredient = new Ingredient();
            $ingredient->setNom($faker->word);

            $manager->persist($ingredient);
            $this->addReference('ingredient'.$i, $ingredient);
        }
        $manager->flush();
    }
}
