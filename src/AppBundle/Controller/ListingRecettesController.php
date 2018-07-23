<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

use AppBundle\Entity\Recettes;
use AppBundle\Entity\CompositionRecette;

class ListingRecettesController extends Controller
{
    /**
     * @Route("/listerecettes", name="listerecettes")
     */
    public function indexAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();

        $compo = $em->getRepository('AppBundle:CompositionRecette')->findAll();

        return $this->render('listeRecettes.html.twig', array(
            'compo' => $compo,
        ));
    }
}
