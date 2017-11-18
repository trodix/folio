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
        $server = $request->server;
        //var_dump($request);

        //*****************reCAPTCHA**************************
        // Ma clé privée
        $secret = "6LcE5DEUAAAAAKT2RGqXXRPkx6DkcQTidvsfJ-91";
        // Paramètre renvoyé par le recaptcha
        if(isset($data['g-recaptcha-response'])){
            $response['captcha'] = $data['g-recaptcha-response'];
            // On récupère l'IP de l'utilisateur
            $remoteip = $server->get('REMOTE_ADDR');

            $api_url = "https://www.google.com/recaptcha/api/siteverify?secret=" 
                    . $secret
                    . "&response=" . $response['captcha']
                    . "&remoteip=" . $remoteip ;

            $decode = json_decode(file_get_contents($api_url), true);
        }
        //******************************************************

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