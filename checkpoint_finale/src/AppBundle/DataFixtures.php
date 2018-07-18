<?php
/**
 * Created by PhpStorm.
 * User: wilder
 * Date: 18/07/18
 * Time: 10:58
 */

namespace AppBundle;

use AppBundle\Entity\Ingredients;
use AppBundle\Entity\Ustensiles;
use AppBundle\Entity\Recette;


use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;



class DataFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {

        for ($i = 0; $i < 5; $i++) {
            $recette = new Recette();
            $recette->setTitre('tarte au chocolat');
            $recette->setAuteur('Aurel');
            $recette->setEnoncé('demandé a Maïté je sais plus comment faire, j\'avais trop bu');

            $ustensile = new Ustensiles();
            $ustensile->setNom('cuilliere');

            $ingredient = new Ingredients();
            $ingredient->setNom('chocolat');
            $ingredient->setPoid('200gr');

            $manager->persist($recette);
            $manager->persist($ustensile);
            $manager->persist($ingredient);
        }

        $manager->flush();
    }
}