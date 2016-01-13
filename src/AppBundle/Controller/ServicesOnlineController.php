<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class ServicesOnlineController extends Controller
{
    /**
     * @Route("/servicosonline", name="servicos")
     */
    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('servicesonline/index.html.twig', [
            'base_dir' => realpath($this->container->getParameter('kernel.root_dir').'/..'),
        ]);
    }
}