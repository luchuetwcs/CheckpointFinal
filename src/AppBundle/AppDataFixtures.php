<?php
/**
 * Created by PhpStorm.
 * User: wilder
 * Date: 18/07/18
 * Time: 14:53
 */

namespace AppBundle;

use AppBundle\Entity\Ingredient;
use AppBundle\Entity\Unite;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;


class AppDataFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $uniteNames = array('kilogramme','gramme','miligramme','litre','centilitre','mililitre');

        foreach ($uniteNames as $name) {
            $unite = new Unite();
            $unite->setUnite($name);

            $manager->persist($unite);
        }

        $manager->flush();

        $symboleNames = array('kg','gr','mg','l','cl','ml');

        foreach ($symboleNames as $name) {
            $symbole = new Unite();
            $symbole->setSymbole($name);

            $manager->persist($symbole);
        }

        $manager->flush();



        $ingredientNames = array('farine','beurre','lait','sucre','l\'huile','fromage blanc','vanille','courgette','tomate',
            'aubergine','feta', 'pomme de terre','sel','poivre','basilic','feta');


        // create 20 products! Bam!
        foreach ($ingredientNames as $name) {
            $ingredient = new Ingredient();
            $ingredient->setIngredient($name);

            $manager->persist($ingredient);
        }

        $manager->flush();

    }
}