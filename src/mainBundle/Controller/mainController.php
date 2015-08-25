<?php

namespace mainBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class mainController extends Controller
{
    public function indexAction()
    {
        return $this->render('mainBundle:Default:index.html.twig');
    }
}
