<?php

namespace iahm\PageBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function homeAction()
    {
        return $this->render('iahmPageBundle:Default:home.html.twig');
    }

    public function eventsAction($event)
    {
        return $this->render('iahmPageBundle:Events:'.$event.'.html.twig');
    }
}
