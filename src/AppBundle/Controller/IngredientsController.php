<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Ingredient;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

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

        $ingredients = $em->getRepository('Ingredient.php')->findAll();

        return $this->render('ingredients/index.html.twig', array(
            'ingredients' => $ingredients,
        ));
    }

    /**
     * Creates a new ingredient entity.
     *
     * @Route("/new", name="ingredients_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $ingredient = new Ingredient();
        $form = $this->createForm('AppBundle\Form\IngredientsType', $ingredient);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($ingredient);
            $em->flush();

            return $this->redirectToRoute('ingredients_show', array('id' => $ingredient->getId()));
        }

        return $this->render('ingredients/new.html.twig', array(
            'ingredient' => $ingredient,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a ingredient entity.
     *
     * @Route("/{id}", name="ingredients_show")
     * @Method("GET")
     */
    public function showAction(Ingredient $ingredient)
    {
        $deleteForm = $this->createDeleteForm($ingredient);

        return $this->render('ingredients/show.html.twig', array(
            'ingredient' => $ingredient,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing ingredient entity.
     *
     * @Route("/{id}/edit", name="ingredients_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Ingredient $ingredient)
    {
        $deleteForm = $this->createDeleteForm($ingredient);
        $editForm = $this->createForm('AppBundle\Form\IngredientsType', $ingredient);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('ingredients_edit', array('id' => $ingredient->getId()));
        }

        return $this->render('ingredients/edit.html.twig', array(
            'ingredient' => $ingredient,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a ingredient entity.
     *
     * @Route("/{id}", name="ingredients_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Ingredient $ingredient)
    {
        $form = $this->createDeleteForm($ingredient);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($ingredient);
            $em->flush();
        }

        return $this->redirectToRoute('ingredients_index');
    }

    /**
     * Creates a form to delete a ingredient entity.
     *
     * @param Ingredient $ingredient The ingredient entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Ingredient $ingredient)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('ingredients_delete', array('id' => $ingredient->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
