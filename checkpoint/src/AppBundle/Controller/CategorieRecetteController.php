<?php

namespace AppBundle\Controller;

use AppBundle\Entity\CategorieRecette;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Categorierecette controller.
 *
 * @Route("categorierecette")
 */
class CategorieRecetteController extends Controller
{
    /**
     * Lists all categorieRecette entities.
     *
     * @Route("/", name="categorierecette_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $categorieRecettes = $em->getRepository('AppBundle:CategorieRecette')->findAll();

        return $this->render('categorierecette/index.html.twig', array(
            'categorieRecettes' => $categorieRecettes,
        ));
    }

    /**
     * Creates a new categorieRecette entity.
     *
     * @Route("/new", name="categorierecette_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $categorieRecette = new Categorierecette();
        $form = $this->createForm('AppBundle\Form\CategorieRecetteType', $categorieRecette);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($categorieRecette);
            $em->flush();

            return $this->redirectToRoute('categorierecette_show', array('id' => $categorieRecette->getId()));
        }

        return $this->render('categorierecette/new.html.twig', array(
            'categorieRecette' => $categorieRecette,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a categorieRecette entity.
     *
     * @Route("/{id}", name="categorierecette_show")
     * @Method("GET")
     */
    public function showAction(CategorieRecette $categorieRecette)
    {
        $deleteForm = $this->createDeleteForm($categorieRecette);

        return $this->render('categorierecette/show.html.twig', array(
            'categorieRecette' => $categorieRecette,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing categorieRecette entity.
     *
     * @Route("/{id}/edit", name="categorierecette_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, CategorieRecette $categorieRecette)
    {
        $deleteForm = $this->createDeleteForm($categorieRecette);
        $editForm = $this->createForm('AppBundle\Form\CategorieRecetteType', $categorieRecette);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('categorierecette_edit', array('id' => $categorieRecette->getId()));
        }

        return $this->render('categorierecette/edit.html.twig', array(
            'categorieRecette' => $categorieRecette,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a categorieRecette entity.
     *
     * @Route("/{id}", name="categorierecette_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, CategorieRecette $categorieRecette)
    {
        $form = $this->createDeleteForm($categorieRecette);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($categorieRecette);
            $em->flush();
        }

        return $this->redirectToRoute('categorierecette_index');
    }

    /**
     * Creates a form to delete a categorieRecette entity.
     *
     * @param CategorieRecette $categorieRecette The categorieRecette entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(CategorieRecette $categorieRecette)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('categorierecette_delete', array('id' => $categorieRecette->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
