<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Preparateur;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Preparateur controller.
 *
 * @Route("preparateur")
 */
class PreparateurController extends Controller
{
    /**
     * Lists all preparateur entities.
     *
     * @Route("/", name="preparateur_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $preparateurs = $em->getRepository('AppBundle:Preparateur')->findAll();

        return $this->render('preparateur/index.html.twig', array(
            'preparateurs' => $preparateurs,
        ));
    }

    /**
     * Creates a new preparateur entity.
     *
     * @Route("/new", name="preparateur_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $preparateur = new Preparateur();
        $form = $this->createForm('AppBundle\Form\PreparateurType', $preparateur);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($preparateur);
            $em->flush();

            return $this->redirectToRoute('preparateur_show', array('id' => $preparateur->getId()));
        }

        return $this->render('preparateur/new.html.twig', array(
            'preparateur' => $preparateur,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a preparateur entity.
     *
     * @Route("/{id}", name="preparateur_show")
     * @Method("GET")
     */
    public function showAction(Preparateur $preparateur)
    {
        $deleteForm = $this->createDeleteForm($preparateur);

        return $this->render('preparateur/show.html.twig', array(
            'preparateur' => $preparateur,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing preparateur entity.
     *
     * @Route("/{id}/edit", name="preparateur_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Preparateur $preparateur)
    {
        $deleteForm = $this->createDeleteForm($preparateur);
        $editForm = $this->createForm('AppBundle\Form\PreparateurType', $preparateur);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('preparateur_edit', array('id' => $preparateur->getId()));
        }

        return $this->render('preparateur/edit.html.twig', array(
            'preparateur' => $preparateur,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a preparateur entity.
     *
     * @Route("/{id}", name="preparateur_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Preparateur $preparateur)
    {
        $form = $this->createDeleteForm($preparateur);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($preparateur);
            $em->flush();
        }

        return $this->redirectToRoute('preparateur_index');
    }

    /**
     * Creates a form to delete a preparateur entity.
     *
     * @param Preparateur $preparateur The preparateur entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Preparateur $preparateur)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('preparateur_delete', array('id' => $preparateur->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
