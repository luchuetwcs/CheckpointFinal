<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;

/**
 * Homepage controller.
 *
 * @Route("/")
 */
class HomepageController extends Controller
{
    /**
     * @Route("/", name="homepage")
     *
     */
    public function indexAction(request $request)
    {
        return $this->render('homepage/homepage.html.twig', array());
    }
}
