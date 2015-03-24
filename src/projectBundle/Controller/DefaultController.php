<?php

namespace projectBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use projectBundle\Entity\Projet;
use userBundle\Entity\User;
use userBundle\Entity\Client;
use projectBundle\Entity\Besoin;
use projectBundle\Entity\VersionBesoin;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\ORM\EntityRepository;
use Symfony\Component\Security\Core\SecurityContext;
use projectBundle\Entity\Document;
use projectBundle\Entity\Exigence;
use projectBundle\Entity\VersionExigence;
use projectBundle\Entity\TypeExigence;
class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('projectBundle:Default:index.html.twig', array('name' => $name));
        
    }
    
    public function listProjectAction() {
        
       $user=$this->get('security.context')->getToken()->getUser()->getId();
        
   
        
                
                if ($this->get('security.context')->isGranted('ROLE_DIRECTEUR')===true){
                   
                $projet=$this->getDoctrine()->getRepository('projectBundle:Projet')->findAll(); 
               }          
                elseif ($this->get('security.context')->isGranted('ROLE_REPCLIENT')===true){
                   
                $projet=$this->getDoctrine()->getRepository('projectBundle:Projet')->findBy(array('rep'=>$user)); 
                }
                
                else {
                        $em = $this->getDoctrine()->getEntityManager();
                    
                    $projet=$em->createQuery('SELECT p FROM projectBundle:Projet p
              JOIN userBundle:User u
              WHERE
                u.id=:user')
    ->setParameter('user', $user)
    ->getResult();
                    
                }
               
              
        
       
          return $this->render('projectBundle:projet:list.html.twig',array('u'=>$projet));
    }
    
    function achiverProjetAction() {
        return $this->render('projectBundle:projet:archive.html.twig');
    }
    
    function ProjetinterAction($idprojet) {
     $projet=$p=$this->getDoctrine()->getRepository('projectBundle:Projet')->findOneBy(array('id'=>$idprojet));
     
     $user=$projet->getUser();
    
     
     
     
     
     
     
     
     return $this->render('projectBundle:projet:intervanant.html.twig',array('u'=>$projet));
         
        
    }
    
    public function addProjectAction(Request $request) {
        
        $projet=new Projet;
        $formBuilder = $this->createFormBuilder($projet);
        $formBuilder
                ->add('nom', 'text')
                ->add('description', 'textarea')
                ->add('client','entity', array(
                    'class' => 'userBundle:Client',
                    
                     'property'=>'rsocial',
                     'query_builder' => function(EntityRepository $er) {
        return $er->createQueryBuilder('u')
            ->orderBy('u.rsocial', 'ASC');
    }
                    
                ))
        
                 ->add('user', 'entity', array(
    'class' => 'userBundle:User', 
     'multiple'=>'true',                
     'property'=>'nom',
    'query_builder' => function(EntityRepository $er) {
        return $er->createQueryBuilder('u')
                  ->where('u.roles LIKE :role')
                ->setParameter('role', "%ROLE_CHEFPROJET%")
                ->orderBy('u.nom', 'ASC');
    }
    
           
               
               ));
       $form = $formBuilder->getForm();
       
            
        if ($request->getMethod() == 'POST') {
      // On fait le lien Requête <-> Formulaire
      // À partir de maintenant, la variable $article contient les valeurs entrées dans le formulaire par le visiteur
          
            $form->bind($request);
            
         
        
      // On vérifie que les valeurs entrées sont correctes
      // (Nous verrons la validation des objets en détail dans le prochain chapitre)
      if ($form->isValid()) {
       
        // On l'enregistre notre objet $article dans la base de données
         
         $client=$form->get('client')->getData();
         $rep=$client->getRep()->getId();
         $projet->setRep($rep);
         $projet->setDirecteur($this->get('security.context')->getToken()->getUser()->getId()); 
         $em = $this->getDoctrine()->getManager();
         $em->persist($projet);
         $em->flush();

        return $this->redirect($this->generateUrl('project_list'));
      }
    }
      
       return $this->render('projectBundle:projet:ajouterProjet.html.twig', array('form' => $form->createView()
      )); 
        
    }
    
     public function listBesoinAction($idprojet) {
        
         
         $besoin=$p=$this->getDoctrine()->getRepository('projectBundle:Besoin')->findby(array('projet'=>$idprojet));
         foreach ($besoin as $b){
         
         $v=$this->getDoctrine()->getRepository('projectBundle:VersionBesoin')->findby(array('besoin'=>$besoin));
         
          $version=array($v);
         }
         
           
        

         return $this->render('projectBundle:besoin:listBesoin.html.twig',array('verBesoin'=>$besoin));
         
    }
    
    
       
     public function addBesoinAction($idprojet,  Request $request) {
        
        $besoin=new Besoin;
        $p=$this->getDoctrine()->getRepository('projectBundle:Projet')->findOneBy(array('id'=>$idprojet)); 
        $besoin->setProjet($p);
        $besoin->getVersion();
        $version=new VersionBesoin;
        $version->setBesoin($besoin);
        $idRedact=$this->get('security.context')->getToken()->getUser()->getId();
        $Redact=$this->getDoctrine()->getRepository('userBundle:User')->findOneBy(array('id'=>$idRedact)); 
        $version->setRedact($Redact);
        $version->setNumVersion(1);
        $version->setCurent('true');
        $version->setDate();
        $formBuilder = $this->createFormBuilder($version);
        $formBuilder
                ->add('nom', 'text')
                ->add('descp', 'textarea')
                ;
        
        
        $form = $formBuilder->getForm();
     
        $besoin->setVersion($version);   
        
        
        if ($request->getMethod() == 'POST') {
   
            $form->bind($request);
            if ($form->isValid()) {
                $besoin->setNom($form->get('nom')->getData());
        // On l'enregistre notre objet $article dans la base de données
        $em = $this->getDoctrine()->getManager();
        $em->persist($version);
        $em->persist($besoin);
        $em->flush();

        return $this->redirect($this->generateURL('Besoin_list', array('idprojet'=>$idprojet)));
      }
    }
      
       
  
       
       return $this->render('projectBundle:besoin:ajouterBesoin.html.twig', array('form' => $form->createView()
      )); 
        
        ;
        
    }
    
    
    
     public function listExigenceAction($idprojet,$vBesoin) {
         
         $exigence=$this->getDoctrine()->getRepository('projectBundle:Exigence')->findBy(array('verBesoin'=>$vBesoin)); 

         return $this->render('projectBundle:exigence:listExigence.html.twig',array('exig'=>$exigence));
         
    }
    
    public function addVersionBesoinAction($idprojet,$idbesoin,  Request $request) {
        
        $versionBesoin=new VersionBesoin;
        $besoin=$this->getDoctrine()->getRepository('projectBundle:Besoin')->findOneBy(array('id'=>$idbesoin)); 
        $pversion=$this->getDoctrine()->getRepository('projectBundle:VersionBesoin')->findOneBy(array('besoin'=>$besoin,'curent'=>'true')); 
        $numVersion=$pversion->getNumVersion();
        $versionBesoin->setBesoin($besoin);
        $versionBesoin->setNom($pversion->getNom()); 
        $versionBesoin->setNumVersion($numVersion+1);
        $idRedact=$this->get('security.context')->getToken()->getUser()->getId();
        $Redact=$this->getDoctrine()->getRepository('userBundle:User')->findOneBy(array('id'=>$idRedact)); 
        $versionBesoin->setRedact($Redact);
        $versionBesoin->setCurent('true');
        $versionBesoin->setDate();
        $pversion->setCurent('false');
        $besoin->setVersion($versionBesoin);
        
        $formBuilder = $this->createFormBuilder($versionBesoin);
        $formBuilder
                ->add('nom', 'text', array(
                         'data' =>$pversion->getNom(),
                          'read_only' => true
                                ))
                ->add('descp', 'textarea')
                ;
        
       $form = $formBuilder->getForm();
            
        if ($request->getMethod() == 'POST') {
   
            $form->bind($request);

            if ($form->isValid()) {
        // On l'enregistre notre objet $article dans la base de données
        $em = $this->getDoctrine()->getManager();
        $em->persist($versionBesoin);
        $em->persist($besoin);
        $em->flush();

        return $this->redirect($this->generateURL('Besoin_list', array('idprojet'=>$idprojet)));
      }
    }
      
       
  
      
       return $this->render('projectBundle:besoin:ajouterVersion.html.twig', array('form' => $form->createView()
      )); 
        
        ;
        
    }
    
    
    public function uploadAction($vBesoin , Request $request,$idprojet) 
{
    $document = new Document();
    $vbesoin=$this->getDoctrine()->getRepository('projectBundle:VersionBesoin')->find($vBesoin); 
   
    $form = $this->createFormBuilder($document)
        ->add('name')
        ->add('file')
        ->getForm()
    ;

    if ($this->getRequest()->isMethod('POST')) {
        $form->handleRequest($this->getRequest());
        if ($form->isValid()) {
            ;
            $vbesoin->setDoc($document);
            $em = $this->getDoctrine()->getManager();
            $document->upload();
            $em->persist($document);
            $em->persist($vbesoin);
            
            $em->flush();

            $this->redirect($this->generateUrl('Besoin_list', array('idprojet'=>$idprojet)));
        }
    }

    return $this->render('projectBundle:besoin:ajouterFichier.html.twig', array('form' => $form->createView()
      )); 
  
}

    
          public function addExigenceAction($idprojet,$vBesoin,  Request $request) {
        
      $verBesoin=$this->getDoctrine()->getRepository('projectBundle:VersionBesoin')->findOneBy(array('id'=>$vBesoin)); 
      $exigence=new Exigence;
      $versionExg=new VersionExigence;
      $versionExg->setDate();
      $idRedact=$this->get('security.context')->getToken()->getUser()->getId();
      $Redact=$this->getDoctrine()->getRepository('userBundle:User')->findOneBy(array('id'=>$idRedact)); 
      $versionExg->setRedact($Redact);
      $versionExg->setCurent('true');
      $versionExg->setNumVersion(1);
    
      $formBuilder = $this->createFormBuilder($versionExg);
       
        
 
      
              
      $formBuilder
                ->add('nom', 'text')
                ->add('descp', 'textarea')
                 ->add('def', 'choice', array('choices'   => 
                                                    array(''=>'','bas'=>'Bas','moyen'=>'moyen','haut'=>'Haut'
                                                          
                         )))
                ->add('type', 'choice', array('choices'   => 
                                                    array(''=>'','fonctionnelle'=>'Exigences fonctionnelle','non fonctionnelle'=>'Exigences non fonctionnelle',
                                                          
                         )))
                ->add('perio', 'choice', array('choices'   => 
                                                    array('0'=>'Pas de priorité','1'=>'Moyenne',
                                                          '2'=>'Rapide',
                         )));
      $form = $formBuilder->getForm();
      
        if ($request->getMethod() == 'POST') {
   
            $form->bind($request);
        
        if ($form->isValid()) {
        
        $exigence->setNom($form->get('nom')->getData());
        $exigence->setType($form->get('type')->getData());
        $versionExg->setExigence($exigence);
        $exigence->setVerBesoin($verBesoin);    
        
        
        $em = $this->getDoctrine()->getManager();
        $em->persist($exigence);
        $em->persist($versionExg);
        $em->persist($verBesoin);
        $em->flush();

        return $this->redirect($this->generateURL('Exigence_list', array('idprojet'=>$idprojet,'vBesoin'=>$vBesoin)));
      }
    }

              
              
       return $this->render('projectBundle:exigence:ajouterExigence.html.twig',array('form' => $form->createView()
      ));
        
        ;
        
    }
    
    public function addVexigenceAction($idprojet,$idExig,$vBesoin , Request $request) {
        
        
        $version=new VersionExigence();
        $exigence=$this->getDoctrine()->getRepository('projectBundle:Exigence')->findOneBy(array('id'=>$idExig)); 
        $pversion=$this->getDoctrine()->getRepository('projectBundle:VersionExigence')->findOneBy(array('exigence'=>$exigence,'curent'=>'true')); 
        $numVersion=$pversion->getNumVersion();
        $version->setExigence($exigence);
        $version->setNom($pversion->getNom()); 
        $version->setNumVersion($numVersion+1);
        $idRedact=$this->get('security.context')->getToken()->getUser()->getId();
        $Redact=$this->getDoctrine()->getRepository('userBundle:User')->findOneBy(array('id'=>$idRedact)); 
        $version->setRedact($Redact);
        $version->setCurent('true');
        $version->setDate();
        $pversion->setCurent('false');
        
        
        $formBuilder = $this->createFormBuilder($version);
        $formBuilder
                ->add('nom', 'text', array(
                         'data' =>$pversion->getNom(),
                          'read_only' => true
                                ))
                ->add('descp', 'textarea')
                 ->add('def', 'choice', array('choices'   => 
                                                    array(''=>'','bas'=>'Bas','moyen'=>'moyen','haut'=>'Haut'
                                                          
                         )))
                ->add('type', 'choice', array('choices'   => 
                                                    array(''=>'','fonctionnelle'=>'Exigences fonctionnelle','non fonctionnelle'=>'Exigences non fonctionnelle',
                                                          
                         )))
                ->add('perio', 'choice', array('choices'   => 
                                                    array('0'=>'Pas de priorité','1'=>'Moyenne',
                                                          '2'=>'Rapide',
                         )));
                
        
       $form = $formBuilder->getForm();
            
        if ($request->getMethod() == 'POST') {
   
            $form->bind($request);

            if ($form->isValid()) {
        // On l'enregistre notre objet $article dans la base de données
        $em = $this->getDoctrine()->getManager();
        $em->persist($version);
        $em->persist($exigence);
        $em->flush();

        return $this->redirect($this->generateURL('Exigence_list', array('idprojet'=>$idprojet,'vBesoin'=>$vBesoin)));
     }
    }
      
       
        
        
         return $this->render('projectBundle:exigence:ajouterVersion.html.twig',array('form' => $form->createView()));
   
        
    }
    
    
    public function addClientAction(Request $request) {
        
        $client=new Client;
        $formBuilder = $this->createFormBuilder($client);
         
        $formBuilder
                ->add('rsocial', 'text')
                ->add('adr', 'text')
                ->add('tel', 'text')
                ->add('email', 'text')
                ->add('act', 'text')
                 ->add('rep', 'entity', array(
    'class' => 'userBundle:User',               
     'property'=>'nom',
    'query_builder' => function(EntityRepository $er) {
        return $er->createQueryBuilder('u')
                  ->where('u.roles LIKE :role')
                ->setParameter('role', "%ROLE_REPCLIENT%")
    ->orderBy('u.nom', 'ASC');
    }
    
           
               
               ));
     $form = $formBuilder->getForm();
      
        if ($request->getMethod() == 'POST') {
   
            $form->bind($request);
        
        if ($form->isValid()) {
     
        
        $em = $this->getDoctrine()->getManager();
        $em->persist($client);
    
        $em->flush();

        return $this->redirect($this->generateURL('Client_list'));
      }
    }

              
              
       return $this->render('userBundle:client:ajouterClient.html.twig',array('form' => $form->createView()
      ));
   
        
    }
    public function listClientAction() {
        
      $client=$this->getDoctrine()->getRepository('userBundle:Client')->findAll(); 

               
       return $this->render('userBundle:client:listClient.html.twig',array('client'=>$client));

    }
 
    public function ProjetinterClAction($idprojet,  Request $request) {
        
     $projet=$p=$this->getDoctrine()->getRepository('projectBundle:Projet')->find($idprojet);   
     $formBuilder = $this->createFormBuilder();
     $formBuilder->add('user', 'entity', array(
    'class' => 'userBundle:User',                
     'property'=>'nom',
     'attr'=>array('style'=>'width:300px', 'customattr'=>'customdata'),    
    'query_builder' => function(EntityRepository $er) {
        return $er->createQueryBuilder('u')
                  ->where('u.roles LIKE :cl')
                  ->setParameter('cl', "%ROLE_REPCLIENT%")
                 ->add('orderBy','u.nom ASC, u.prenom ASC');
                    
    }
    
           
              
                         
               ));
       $form = $formBuilder->getForm();
     
       
         
        if ($request->getMethod() == 'POST') {
  
          
            $form->bind($request);
      if ($form->isValid()) {
               
         $iduser=$form->get('user')->getData()->getId();
         $user=$p=$this->getDoctrine()->getRepository('userBundle:User')->find($iduser);   
         $projet->addUser($user);
         $em = $this->getDoctrine()->getManager();
         $em->persist($projet);
         $em->flush();

        return $this->redirect($this->generateUrl('Projet_inter', array('idprojet'=>$idprojet)));
      }
    }
      
       return $this->render('projectBundle:projet:ajouterInter.html.twig', array('form' => $form->createView()
      )); 
     
     
    }
       
   public function ProjetinterCapAction($idprojet,  Request $request) {
       
       
     $projet=$p=$this->getDoctrine()->getRepository('projectBundle:Projet')->find($idprojet);   
     $formBuilder = $this->createFormBuilder();
     $formBuilder->add('user', 'entity', array(
    'class' => 'userBundle:User', 
           
     'property'=>'nom',
     'attr'=>array('style'=>'width:300px', 'customattr'=>'customdata'),    
    'query_builder' => function(EntityRepository $er) {
        return $er->createQueryBuilder('u')
                  ->where('u.roles LIKE :cl')
                  
                  ->setParameter('cl', "%ROLE_INTERCAP%")
                  
                   ->orderBy('u.nom', 'ASC');
                    
    }
    
           
              
                         
               ));
       $form = $formBuilder->getForm();
     
       
         
        if ($request->getMethod() == 'POST') {
  
          
            $form->bind($request);
            
      if ($form->isValid()) {
          
             
         $iduser=$form->get('user')->getData()->getId();
         $user=$p=$this->getDoctrine()->getRepository('userBundle:User')->find($iduser);   
         $projet->addUser($user);
         $em = $this->getDoctrine()->getManager();
         $em->persist($projet);
         $em->flush();

        return $this->redirect($this->generateUrl('Projet_inter', array('idprojet'=>$idprojet)));
      }
    }
      
       return $this->render('projectBundle:projet:ajouterInter.html.twig', array('form' => $form->createView()
      )); 
     
     
    }
       
         public function listIntervenantAction($param) {
        
        
         }
}
