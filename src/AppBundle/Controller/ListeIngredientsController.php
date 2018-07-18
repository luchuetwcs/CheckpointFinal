<?php

namespace AppBundle\Controller;

use AppBundle\Entity\ListeIngredients;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Listeingredient controller.
 *
 * @Route("listeingredients")
 */
class ListeIngredientsController extends Controller
{
    /**
     * Lists all listeIngredient entities.
     *
     * @Route("/", name="listeingredients_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $listeIngredients = $em->getRepository('AppBundle:ListeIngredients')->findAll();

        return $this->render('listeingredients/index.html.twig', array(
            'listeIngredients' => $listeIngredients,
        ));
    }

    /**
     * Creates a new listeIngredient entity.
     *
     * @Route("/new", name="listeingredients_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $listeIngredient = new Listeingredients();
        $form = $this->createForm('AppBundle\Form\ListeIngredientsType', $listeIngredient);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($listeIngredient);
            $em->flush();

            return $this->redirectToRoute('listeingredients_show', array('id' => $listeIngredient->getId()));
        }

        return $this->render('listeingredients/new.html.twig', array(
            'listeIngredient' => $listeIngredient,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a listeIngredient entity.
     *
     * @Route("/{id}", name="listeingredients_show")
     * @Method("GET")
     */
    public function showAction(ListeIngredients $listeIngredient)
    {
        $deleteForm = $this->createDeleteForm($listeIngredient);

        return $this->render('listeingredients/show.html.twig', array(
            'listeIngredient' => $listeIngredient,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing listeIngredient entity.
     *
     * @Route("/{id}/edit", name="listeingredients_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, ListeIngredients $listeIngredient)
    {
        $deleteForm = $this->createDeleteForm($listeIngredient);
        $editForm = $this->createForm('AppBundle\Form\ListeIngredientsType', $listeIngredient);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('listeingredients_edit', array('id' => $listeIngredient->getId()));
        }

        return $this->render('listeingredients/edit.html.twig', array(
            'listeIngredient' => $listeIngredient,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a listeIngredient entity.
     *
     * @Route("/{id}", name="listeingredients_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, ListeIngredients $listeIngredient)
    {
        $form = $this->createDeleteForm($listeIngredient);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($listeIngredient);
            $em->flush();
        }

        return $this->redirectToRoute('listeingredients_index');
    }

    /**
     * Creates a form to delete a listeIngredient entity.
     *
     * @param ListeIngredients $listeIngredient The listeIngredient entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(ListeIngredients $listeIngredient)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('listeingredients_delete', array('id' => $listeIngredient->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
