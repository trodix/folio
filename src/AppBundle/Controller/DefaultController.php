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
        // replace this example code with whatever you need
        return $this->render('folio/index.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
        ]);
    }

    /**
     * @Route("/ppe/1", name="ppe1")
     */
    public function ppe1Action(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('folio/ppe1.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
        ]);
    }

    /**
     * @Route("/ppe/2", name="ppe2")
     */
    public function ppe2Action(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('folio/ppe2.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
        ]);
    }

    /**
     * @Route("/ppe/3", name="ppe3")
     */
    public function ppe3Action(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('folio/ppe3.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
        ]);
    }

    /**
     * @Route("/veille", name="veille")
     */
    public function veilleAction(Request $request)
    {
        $articles = $this->getDoctrine()->getRepository('AppBundle:Article')->findAll();
        // replace this example code with whatever you need
        return $this->render('folio/veille.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR, 'articles' => $articles
        ]);
    }
}
