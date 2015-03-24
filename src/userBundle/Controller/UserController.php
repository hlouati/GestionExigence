<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace userBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Security\Core\SecurityContext;
use Symfony\Component\HttpFoundation\Request;
use userBundle\Entity\User;
/**
 * Description of UserController
 *
 * @author hamdi
 */
class UserController extends Controller {
    
   //put your code here

    public function loginAction (){
        
        
        if ($this->get('security.context')->isGranted('IS_AUTHENTICATED_REMEMBERED')) 
            {
               return $this->redirect($this->generateUrl('project_list'));
        }
        $request = $this->getRequest();
        $session = $request->getSession();
        
        if ($request->attributes->has(SecurityContext::AUTHENTICATION_ERROR)) {
            $error = $request->attributes->get(SecurityContext::AUTHENTICATION_ERROR);
        }
        
        else {
            $error = $session->get(SecurityContext::AUTHENTICATION_ERROR);
            $session->remove(SecurityContext::AUTHENTICATION_ERROR);
        }


        
        return $this->render('userBundle:login:login.html.twig',array('last_username' => $session->get(SecurityContext::LAST_USERNAME),'error'=> $error,));
    }
    
    public function logoutAction (){
        
             $this->get('security.context')->setToken(null);
             $this->get('request')->getSession()->invalidate();
             return $this->redirect($this->generateUrl('user_login'));
    }
    
    public function dashboardAction (){
          
          return $this->render('userBundle:dashboard:home.html.twig');
        
    }
    public function addAction(Request $request) {
     
    
     $user=new User;
         
      
         $formBuilder = $this->createFormBuilder($user);
         $formBuilder
                    ->add('nom',        'text')
                    ->add('prenom',       'text')
                    ->add('email',     'text')
                    ->add('username','text')
                    ->add('password', 'password')
                 
                     ->add('roles', 'choice', array(
                            'multiple'=>true,
                          'required'  => true,
                         'choices'   => 
                             array('ROLE_DIRECTEUR'=>'Directeur','ROLE_CHEFPROJET'=>'Chef de projet',
                         'ROLE_REPCLIENT'=>'Représentant Client',
                         'ROLE_INTERCLIENT'=>'Intervenant Client',
                                 'ROLE_INTERCAP'=>'Intervenant Capgemini')));
         
                    
       
       $form = $formBuilder->getForm();
       
            
        if ($request->getMethod() == 'POST') {
      // On fait le lien Requête <-> Formulaire
      // À partir de maintenant, la variable $article contient les valeurs entrées dans le formulaire par le visiteur
         $form->bind($request);
         $user->setSalt('');
         
      
      if ($form->isValid()) {
        // On l'enregistre notre objet $article dans la base de données
        $em = $this->getDoctrine()->getManager();
        $em->persist($user);
        $em->flush();

        // On redirige vers la page de visualisation de l'article nouvellement créé
        return $this->redirect($this->generateUrl('user_gestion'));
      }
    }
      
       
  
       
       return $this->render('userBundle:gestionUtilisateur:formAdd.html.twig', array('form' => $form->createView()
      ));  
       
   
    }
    // On fait le lien Requête <-> Formulaire
      // À partir de maintenant, la variable $article contient les valeurs entrées dans le formulaire par le visiteur
       


    public function deleteAction($param) {
        
    }
    public function listAction(){
        
        $manageur = $this->getDoctrine()->getManager();
        $listUser=$manageur->getRepository('userBundle:User')->findAll();
        
        return $this->render('userBundle:gestionUtilisateur:home.html.twig',array('listUser'=>$listUser,'Nbuser'=>  count($listUser)));
    }
    
    public function addTypeAction(){
        
        return $this->render('userBundle:gestionUtilisateur:formType.html.twig');
    }
}
