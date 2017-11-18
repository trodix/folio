<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $trimmedPathinfo = rtrim($pathinfo, '/');
        $context = $this->context;
        $request = $this->request;
        $requestMethod = $canonicalMethod = $context->getMethod();
        $scheme = $context->getScheme();

        if ('HEAD' === $requestMethod) {
            $canonicalMethod = 'GET';
        }


        // homepage
        if ('' === $trimmedPathinfo) {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'homepage');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
        }

        if (0 === strpos($pathinfo, '/ppe')) {
            // ppe1
            if ('/ppe/1' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::ppe1Action',  '_route' => 'ppe1',);
            }

            // ppe2
            if ('/ppe/2' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::ppe2Action',  '_route' => 'ppe2',);
            }

            // ppe3
            if ('/ppe/3' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::ppe3Action',  '_route' => 'ppe3',);
            }

        }

        // veille
        if ('/veille' === $pathinfo) {
            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::veilleAction',  '_route' => 'veille',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
