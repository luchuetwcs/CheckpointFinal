<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Albums;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Album controller.
 *
 * @Route("albums")
 */
class AlbumsController extends Controller
{
    /**
     * Lists all album entities.
     *
     * @Route("/", name="albums")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $albums = $em->getRepository('AppBundle:Albums')->findAll();

        return $this->render('albums/index.html.twig', array(
            'albums' => $albums,
        ));
    }

    /**
     * Creates a new album entity.
     *
     * @Route("/new", name="albums_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $album = new Albums();
        $form = $this->createForm('AppBundle\Form\AlbumsType', $album);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($album);
            $em->flush();

            return $this->redirectToRoute('albums_show', array('id' => $album->getId()));
        }

        return $this->render('albums/new.html.twig', array(
            'album' => $album,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a album entity.
     *
     * @Route("/{id}", name="albums_show")
     * @Method("GET")
     */
    public function showAction(Albums $album)
    {
        $deleteForm = $this->createDeleteForm($album);

        return $this->render('albums/show.html.twig', array(
            'album' => $album,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing album entity.
     *
     * @Route("/{id}/edit", name="albums_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Albums $album)
    {
        $deleteForm = $this->createDeleteForm($album);
        $editForm = $this->createForm('AppBundle\Form\AlbumsType', $album);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('albums_edit', array('id' => $album->getId()));
        }

        return $this->render('albums/edit.html.twig', array(
            'album' => $album,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a album entity.
     *
     * @Route("/{id}", name="albums_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Albums $album)
    {
        $form = $this->createDeleteForm($album);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($album);
            $em->flush();
        }

        return $this->redirectToRoute('albums_index');
    }

    /**
     * Creates a form to delete a album entity.
     *
     * @param Albums $album The album entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Albums $album)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('albums_delete', array('id' => $album->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
