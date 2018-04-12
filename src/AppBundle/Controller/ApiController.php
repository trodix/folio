<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;

class ApiController extends Controller
{
    /**
     * @Route("/api/article/{id}", name="articleGET")
     */
    public function articleByIdAction(Request $request, $id)
    {
        if($request->getMethod() == 'GET'){
            $article = $this->getDoctrine()->getRepository('AppBundle:Article')->find($id);

            $res = array(
                'id' => $article->getId(),
                'title' => $article->getTitle(),
                'urlSource' => $article->getUrlSource(),
                'body' => $article->getDescription(),
                'urlImage' => $article->getUrlPicture(),
            );

            $data = [
                'data' => $res,
            ];

        } else if($request->getMethod() == 'PUT'){

            var_dump($request);

            $info = pathinfo($_FILES['input_file']['name']);
            $ext = $info['extension']; // get the extension of the file
            $newname = $info.$ext; 

            $target = 'img/articles/'.$newname;
            move_uploaded_file( $_FILES['input_file']['tmp_name'], $target);


            if($request->parameters->urlImage == ""){
                $this->getDoctrine()->getRepository('AppBundle:Article')->refresh($article);
            }else{
                $this->getDoctrine()->getRepository('AppBundle:Article')->refresh($article);
            }
            
            $data = [
                'statut' => 200,
            ];

        }else{
            $data = [
                'statut' => 405,
            ];
        }
        return new JsonResponse($data);
    }
}