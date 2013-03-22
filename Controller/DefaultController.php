<?php

namespace TurhanOz\DragDropBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('TurhanOzDragDropBundle:Default:index.html.twig', array('name' => $name));
    }
}
