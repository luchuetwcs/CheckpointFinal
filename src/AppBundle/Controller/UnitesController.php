<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Unite;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

/**
 * Unite controller.
 *
 * @Route("unites")
 */
class UnitesController extends Controller
{
    /**
     * Lists all unite entities.
     *
     * @Route("/", name="unites_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $unites = $em->getRepository('Unite.php')->findAll();

        return $this->render('unites/index.html.twig', array(
            'unites' => $unites,
        ));
    }

    /**
     * Finds and displays a unite entity.
     *
     * @Route("/{id}", name="unites_show")
     * @Method("GET")
     */
    public function showAction(Unite $unite)
    {

        return $this->render('unites/show.html.twig', array(
            'unite' => $unite,
        ));
    }
}
