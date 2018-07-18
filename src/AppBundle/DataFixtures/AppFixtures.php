<?php

// src/DataFixtures/AppFixtures.php
namespace AppBundle\DataFixtures;

use AppBundle\Entity\Ingredient;
use AppBundle\Entity\Recipe;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    /**
     * @param ObjectManager $manager
     */
    public function load(ObjectManager $manager)
    {
        $ingredients= ['carotte(s)', 'oignon(s)', 'fenouille(s)', 'poireau(x)', 'pomme de terre', 'champignon(s)',
                'courgette', 'celeri(s)', 'navet(s)', 'poivron(s)', 'tomage', 'échalotte(s)', 'haché de boeuf',
                'pavet(s) de boeuf', 'crevette(s)', 'onglet(s) de boeuf', 'dorade(s)', 'sole(s)', 'thon'];

        $recettes = ['Mijoté : ', 'Grillé : ', 'Brochette : '];

        $duration = [05, 10, 15, 20, 25, 30, 35, 40, 45, 50, 55];

        // create 20 products! Bam!
        for ($i = 0; $i < 19; $i++) {
            $product = new Ingredient();
            $product->setName($ingredients[$i]);
            $product->setQuantite(mt_rand(0, 1));
            $manager->persist($product);
            $recipe = new Recipe();
            $recipe->setId($i);
            $recipe->setTitle($recettes[mt_rand(0, 2)].$ingredients[mt_rand(12, 18)]);
            $recipe->setTimePreparation(new \DateTime('00:'.$duration[mt_rand(0, 5)]));
            $recipe->setTimeCuisson(new \DateTime('00:'.$duration[mt_rand(5, 10)]));
            $recipe->setDescription('Un plat qui fera l\'unanimité auprès de vos convives');
            $manager->persist($recipe);
        }

        $manager->flush();
    }
}