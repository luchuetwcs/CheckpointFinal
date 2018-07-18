<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Bands;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Band controller.
 *
 * @Route("bands")
 */
class BandsController extends Controller
{
    /**
     * Lists all band entities.
     *
     * @Route("/", name="bands_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $bands = $em->getRepository('AppBundle:Bands')->findAll();

        return $this->render('bands/index.html.twig', array(
            'bands' => $bands,
        ));
    }

    /**
     * Creates a new band entity.
     *
     * @Route("/new", name="bands_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $band = new Band();
        $form = $this->createForm('AppBundle\Form\BandsType', $band);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($band);
            $em->flush();

            return $this->redirectToRoute('bands_show', array('id' => $band->getId()));
        }

        return $this->render('bands/new.html.twig', array(
            'band' => $band,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a band entity.
     *
     * @Route("/{id}", name="bands_show")
     * @Method("GET")
     */
    public function showAction(Bands $band)
    {
        $deleteForm = $this->createDeleteForm($band);

        return $this->render('bands/show.html.twig', array(
            'band' => $band,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing band entity.
     *
     * @Route("/{id}/edit", name="bands_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Bands $band)
    {
        $deleteForm = $this->createDeleteForm($band);
        $editForm = $this->createForm('AppBundle\Form\BandsType', $band);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('bands_edit', array('id' => $band->getId()));
        }

        return $this->render('bands/edit.html.twig', array(
            'band' => $band,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a band entity.
     *
     * @Route("/{id}", name="bands_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Bands $band)
    {
        $form = $this->createDeleteForm($band);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($band);
            $em->flush();
        }

        return $this->redirectToRoute('bands_index');
    }

    /**
     * Creates a form to delete a band entity.
     *
     * @param Bands $band The band entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Bands $band)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('bands_delete', array('id' => $band->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
