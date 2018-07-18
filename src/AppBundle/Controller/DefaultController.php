<?php

namespace AppBundle\Controller;

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
        $accueil = true;

        $em = $this->getDoctrine()->getManager();

        $recipe1 = $em->getRepository('AppBundle:Recipe')->find(mt_rand(0,18));
        $recipe2 = $em->getRepository('AppBundle:Recipe')->find(mt_rand(0,18));
        $recipe3 = $em->getRepository('AppBundle:Recipe')->find(mt_rand(0,18));
        $recipe4 = $em->getRepository('AppBundle:Recipe')->find(mt_rand(0,18));

        // replace this example code with whatever you need
        return $this->render('default/index.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
            'recipe1' => $recipe1,
            'recipe2' => $recipe2,
            'recipe3' => $recipe3,
            'recipe4' => $recipe4,
            'activeAccueil' => $accueil
        ]);
    }
}
