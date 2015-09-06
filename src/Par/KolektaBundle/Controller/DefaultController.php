<?php

namespace Par\KolektaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('ParKolektaBundle:Default:index.html.twig', array('name' => $name));
    }
}
