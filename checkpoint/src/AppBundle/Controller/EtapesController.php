<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Etapes;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Etape controller.
 *
 * @Route("etapes")
 */
class EtapesController extends Controller
{
    /**
     * Lists all etape entities.
     *
     * @Route("/", name="etapes_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $etapes = $em->getRepository('AppBundle:Etapes')->findAll();

        return $this->render('etapes/index.html.twig', array(
            'etapes' => $etapes,
        ));
    }

    /**
     * Creates a new etape entity.
     *
     * @Route("/new", name="etapes_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $etape = new Etape();
        $form = $this->createForm('AppBundle\Form\EtapesType', $etape);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($etape);
            $em->flush();

            return $this->redirectToRoute('etapes_show', array('id' => $etape->getId()));
        }

        return $this->render('etapes/new.html.twig', array(
            'etape' => $etape,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a etape entity.
     *
     * @Route("/{id}", name="etapes_show")
     * @Method("GET")
     */
    public function showAction(Etapes $etape)
    {
        $deleteForm = $this->createDeleteForm($etape);

        return $this->render('etapes/show.html.twig', array(
            'etape' => $etape,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing etape entity.
     *
     * @Route("/{id}/edit", name="etapes_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Etapes $etape)
    {
        $deleteForm = $this->createDeleteForm($etape);
        $editForm = $this->createForm('AppBundle\Form\EtapesType', $etape);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('etapes_edit', array('id' => $etape->getId()));
        }

        return $this->render('etapes/edit.html.twig', array(
            'etape' => $etape,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a etape entity.
     *
     * @Route("/{id}", name="etapes_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Etapes $etape)
    {
        $form = $this->createDeleteForm($etape);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($etape);
            $em->flush();
        }

        return $this->redirectToRoute('etapes_index');
    }

    /**
     * Creates a form to delete a etape entity.
     *
     * @param Etapes $etape The etape entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Etapes $etape)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('etapes_delete', array('id' => $etape->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
