<?php

namespace Appartoo\Bundle\AdressebookBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('AppartooAdressebookBundle:Default:index.html.twig', array('name' => $name));
    }
}
