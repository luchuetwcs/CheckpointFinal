<?php
namespace AppBundle\DataFixtures;


use AppBundle\AppBundle;
use AppBundle\Entity\Categorie;
use AppBundle\Entity\Recette;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
public function load(ObjectManager $manager)
{

    $recette = new Recette();
    $recette->setCategorie("Plat");
    $recette->setImage('https://image.afcdn.com/recipe/20130524/6376_w420h344c1cx1150cy867.jpg');

    $recette->setTitre("Carry Poulet ");
    $recette->setCout("2 ");
    $recette->setTemps("60");
    $recette->setNombrePersonne("4");

    $recette->setPreparation("Etape 1
Couper le poulet et le faire dorer sur le feu (dans une marmite contenant l\'huile).
Etape 2
Pendant ce temps, préparer les ingrédients.
Etape 3
Une fois que le poulet est bien doré y ajouter les oignons que l\'on fait fondre tout en remuant avec le poulet, puis l\'ail pareil (qui ne doit pas brûler), puis le safran et enfin les tomates. On mélange et on fait fondre les tomates.
Etape 4
Ajouter ensuite de l\'eau jusqu\'à recouvrir le dessus du poulet, puis ajouter enfin le thym.
Etape 5
Une fois que vous avez obtenu une sauce de 3 mm d\'épaisseur environ (un peu de sauce mais PAS TROIS TONNES!!), c\'est bon... Ajouter du poivre en fin de cuisson. Rajouter du sel en cours de cuisson s\'il en manque (goûter pour s\'en assurer).
Etape 6
Manger avec du riz, des grains et un bon petit rougail mangue pimenté bien sûr");

    $manager->persist($recette);

    $recette1 = new Recette();
    $recette1->setCategorie("Plat");
     $recette1->setImage('https://ileauxepices.com/blog/wp-content/uploads/2013/01/rougail-saucisse-reunion-epices-300x163.jpg');
    $recette1->setCout("1 ");
    $recette1->setTitre("Rougail saucisse ");
    $recette1->setTemps("60");
    $recette1->setNombrePersonne("4");



    $recette1->setPreparation("Faites dessaler les saucisses fraiches de porc en les faisant bouillir en changeant l’eau 2 fois, piquez les à plusieurs endroits pour mieux les dessaler. Bien égoutter et coupez les en 2 ou 3 morceaux.

Dans une marmite, faites roussir les bouts de saucisses pendant 5 mn dans l’huile puis rajoutez les oignons hachés finement. Bien mélanger, puis ajoutez le piment vert écrasé en purée, terminez en ajoutant les tomates concassées et les gros piments coupés en Julienne si vous avez choisi cette option. Couvrez et terminez la cuisson de votre rougail saucisse à feu doux pendant 20 min jusqu’à obtention d’une belle sauce réduite. Assaisonnez si besoin d’un peu de sel.

Pour décorer votre plat de service, jetez un peu d’oignons verts ciselés et/ou quelques gros piments coupés en rondelle.");

    $manager->persist($recette1);

    $manager->flush();


}
}