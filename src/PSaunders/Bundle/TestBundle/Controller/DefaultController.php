<?php

namespace PSaunders\Bundle\TestBundle\Controller;

use PSaunders\Components\Resource\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends AbstractController
{
    /**
     * Index
     * 
     * @return Response
     */
    public function indexAction()
    {
        return $this->render('PSaundersTestBundle:Default:index.html.twig');
    }
    
    /**
     * About
     * 
     * @return Response
     */
    public function aboutAction()
    {
        return $this->render('PSaundersTestBundle:Default:about.html.twig');
    }
}
