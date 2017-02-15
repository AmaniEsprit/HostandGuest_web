<?php

namespace Pidev\homeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('PidevhomeBundle:Default:index.html.twig');
    }
}
