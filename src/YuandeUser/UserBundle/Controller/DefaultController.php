<?php

namespace YuandeUser\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('YuandeUserUserBundle:Default:index.html.twig', array('name' => $name));
    }
}
