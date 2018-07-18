<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Genre_recette;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

/**
 * Genre_recette controller.
 *
 * @Route("genre_recette")
 */
class Genre_recetteController extends Controller
{
    /**
     * Lists all genre_recette entities.
     *
     * @Route("/", name="genre_recette_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $genre_recettes = $em->getRepository('AppBundle:Genre_recette')->findAll();

        return $this->render('genre_recette/index.html.twig', array(
            'genre_recettes' => $genre_recettes,
        ));
    }

    /**
     * Finds and displays a genre_recette entity.
     *
     * @Route("/{id}", name="genre_recette_show")
     * @Method("GET")
     */
    public function showAction(Genre_recette $genre_recette)
    {

        return $this->render('genre_recette/show.html.twig', array(
            'genre_recette' => $genre_recette,
        ));
    }
}
