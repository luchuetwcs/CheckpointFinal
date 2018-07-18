<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Ingredients;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

/**
 * Ingredient controller.
 *
 * @Route("ingredients")
 */
class IngredientsController extends Controller
{
    /**
     * Lists all ingredient entities.
     *
     * @Route("/", name="ingredients_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $ingredients = $em->getRepository('AppBundle:Ingredients')->findAll();

        return $this->render('ingredients/index.html.twig', array(
            'ingredients' => $ingredients,
        ));
    }

    /**
     * Finds and displays a ingredient entity.
     *
     * @Route("/{id}", name="ingredients_show")
     * @Method("GET")
     */
    public function showAction(Ingredients $ingredient)
    {

        return $this->render('ingredients/show.html.twig', array(
            'ingredient' => $ingredient,
        ));
    }
}
