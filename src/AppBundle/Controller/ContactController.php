<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\Contact;
use Symfony\Component\HttpFoundation\JsonResponse;

class ContactController extends Controller
{
    /**
     * @Route("/contact", name="contact")
     */
    public function contactAction(Request $request)
    {
        $reponse['success'] = null;
        $data = $request->request->all();
        $server = $request->server;

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
            $isCaptchaValid = $decode['success'];
            $isCaptchaValid = true;
        }
        //******************************************************

        if(isset($data['contact']) && $isCaptchaValid === true){
            $formContact = new Contact();
            $formContact->setLastName($data['contact']['lastName']);
            $formContact->setFirstName($data['contact']['firstName']);
            $formContact->setMail($data['contact']['mail']);
            $formContact->setMessage($data['contact']['message']);
            $formContact->setDate(new \DateTime(date('Y-m-d H:i:s')));

            $em = $this->getDoctrine()->getManager();
            $em->persist($formContact);
            $em->flush();
            $reponse['success'] = true;
        }elseif (isset($data['contact']['submit'])) {
            $reponse['success'] = false;
        }
        // replace this example code with whatever you need
        return $this->render('folio/contact.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
            'reponse' => $reponse
        ]);
    }

    // /**
    //  * @Route("/contact/ajax", name="contactAjax")
    //  */
    // public function contactAjaxAction(Request $request)
    // {
    //     $data = $request->request->all();
    //     if ($request->isMethod('POST')) {
    //         if (isset($data['contact'], $data['contact']['submit'])) {
    //             //insertion
    //             $formContact = new Contact();
    //             $formContact->setLastName($data['contact']['lastName']);
    //             $formContact->setFirstName($data['contact']['firstName']);
    //             $formContact->setMail($data['contact']['mail']);
    //             $formContact->setMessage($data['contact']['message']);
    //             $formContact->setDate(new \DateTime(date('Y-m-d H:i:s')));

    //             $em = $this->getDoctrine()->getManager();
    //             $em->persist($formContact);
    //             $em->flush();

    //             //envoi des données JSON en front
    //             $response = new JsonResponse();
    //             $response->setStatusCode(200);
    //             //ajout de données éventuelles
    //             $response->setData([
    //                 'successMessage' => "Votre message a bien été envoyé"
    //             ]);
    //             return $response;
    //         }else{
    //             //form non valide
    //             //envoi des données d'erreurs JSON en front
    //             $response = new JsonResponse();
    //             $response->setStatusCode(200);
    //             $response->setData([
    //                 'errorMessage' => "Il semblerait qu'il y ait une erreur au niveau du formulaire"
    //             ]);
    //             return $response;
    //         }
    //     }
    //     // replace this example code with whatever you need
    //     return $this->render('folio/contact.html.twig', [
    //     'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
    //     ]);     
    // }
}