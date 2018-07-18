<?php

namespace AppBundle\Controller;
use AppBundle\Entity\Ingredient;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Ingredient controller.
 *
 */
class AdminController extends Controller
{
    /**
     * Lists all ingredient entities.
     *
     * @Route("/", name="home_page")
     */
    public function indexAction()
    {


        return $this->render('default/index.html.twig', array(

        ));
    }



}
