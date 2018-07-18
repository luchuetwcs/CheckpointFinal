<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Recettes;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Recette controller.
 *
 * @Route("recettes")
 */
class RecettesController extends Controller
{
    /**
     * Lists all recette entities.
     *
     * @Route("/", name="recettes_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $recettes = $em->getRepository('AppBundle:Recettes')->findAll();

        return $this->render('recettes/index.html.twig', array(
            'recettes' => $recettes,
        ));
    }

    /**
     * Creates a new recette entity.
     *
     * @Route("/new", name="recettes_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $recette = new Recette();
        $form = $this->createForm('AppBundle\Form\RecettesType', $recette);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($recette);
            $em->flush();

            return $this->redirectToRoute('recettes_show', array('id' => $recette->getId()));
        }

        return $this->render('recettes/new.html.twig', array(
            'recette' => $recette,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a recette entity.
     *
     * @Route("/{id}", name="recettes_show")
     * @Method("GET")
     */
    public function showAction(Recettes $recette)
    {
        $deleteForm = $this->createDeleteForm($recette);

        return $this->render('recettes/show.html.twig', array(
            'recette' => $recette,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing recette entity.
     *
     * @Route("/{id}/edit", name="recettes_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Recettes $recette)
    {
        $deleteForm = $this->createDeleteForm($recette);
        $editForm = $this->createForm('AppBundle\Form\RecettesType', $recette);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('recettes_edit', array('id' => $recette->getId()));
        }

        return $this->render('recettes/edit.html.twig', array(
            'recette' => $recette,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a recette entity.
     *
     * @Route("/{id}", name="recettes_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Recettes $recette)
    {
        $form = $this->createDeleteForm($recette);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($recette);
            $em->flush();
        }

        return $this->redirectToRoute('recettes_index');
    }

    /**
     * Creates a form to delete a recette entity.
     *
     * @param Recettes $recette The recette entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Recettes $recette)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('recettes_delete', array('id' => $recette->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
