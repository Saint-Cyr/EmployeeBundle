<?php

namespace Yame\EmployeeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('YameEmployeeBundle:Default:index.html.twig');
    }
}
