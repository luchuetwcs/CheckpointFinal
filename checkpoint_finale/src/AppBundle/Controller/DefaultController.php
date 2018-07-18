<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Recette;
use AppBundle\Form\RecetteType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $recettes = $em->getRepository(Recette::class)->findAll();

        //$url = strstr($recettes[0][url] , '""');

        return $this->render('default/index.html.twig', array(
            'one' => $recettes
           // 'url' =>$url
        ));
    }

    /**
     * @Route("/add", name="add")
     */
    public function addAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $recettes = $em->getRepository(Recette::class)->findAll();

        $recette = new Recette();
        $form = $this->createForm(RecetteType::class, $recette);


        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($recette);
            $em->flush();

            // You can use too :
            // return $this->redirect($this->generateUrl('review_show', array('id' => $review->getId())))

            return $this->redirectToRoute('add', array('id' => $recette->getId()));
        }

        return $this->render('default/add.html.twig', array(
            'recette' => $recette,
            'form' => $form->createView()
        ));

    }

}
