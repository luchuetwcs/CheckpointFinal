<?php
namespace AppBundle\DataFixtures;

use AppBundle\Entity\Etapes;
use AppBundle\Entity\Ingredient;
use AppBundle\Entity\CategorieRecette;
use AppBundle\Entity\Quantite;
use AppBundle\Entity\Recette;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        for ($i = 0; $i < 20; $i++) {

            $recette = new Recette();
            $recette->setNom('nom'.$i);
            $recette->setNombreDePersonne(mt_rand(1,10));

            $ingredient = new Ingredient();
            $ingredient->setNom('ingredient'.$i);
            $ingredient->setImage('img'.$i);
            $ingredient->setRecette($recette);


            $categorie = new CategorieRecette();
            $categorie->setType('categorie'.$i);
            $categorie->setRecette($recette);


            for ($j = 0; $j < 11; $j++){
                $etapes = new Etapes();
                $etapes->setEtape('etape'.$j);
                $etapes->setRecette($recette);

                }

            $quantite = new Quantite();
            $quantite->setQuantite('quantite'.$i);
            $quantite->setUniteDeMesure($i.'unite');
            $quantite->setRecette($recette);
            $quantite->setIngredient($ingredient);


            $manager->persist($recette);
            $manager->persist($categorie);
            $manager->persist($etapes);
            $manager->persist($ingredient);
            $manager->persist($quantite);

            }

        $manager->flush();
    }
}
