<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\Contact;

class ContactController extends Controller
{
    /**
     * @Route("/contact", name="contact")
     */
    public function contactAction(Request $request)
    {
        $reponse['message'] = "";
        $data = $request->request->all();
        if(isset($data['contact'])){
            $formContact = new Contact();
            $formContact->setLastName($data['contact']['lastName']);
            $formContact->setFirstName($data['contact']['firstName']);
            $formContact->setMail($data['contact']['mail']);
            $formContact->setMessage($data['contact']['message']);

            $em = $this->getDoctrine()->getManager();
            $em->persist($formContact);
            $em->flush();
            $reponse['message'] = "Votre message a bien été envoyé";
        }
        // replace this example code with whatever you need
        return $this->render('folio/contact.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
            'reponse' => $reponse
        ]);
    }
}