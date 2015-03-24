<?php

namespace profileBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        
        $username='folan';
        return $this->render('::layout.html.twig',array('username'=>$username));
    }
    
     public function voirAction()
    {
        
        $username='folan';
        return $this->render('::layout.html.twig',array('username'=>$username));
    }
}
