<?php

namespace projectBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use userBundle\Entity\User;

/**
 * Projet
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="projectBundle\Entity\ProjetRepository")
 

*  */
 
class Projet
{

 /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    
     
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=255)
     */
    private $nom;
       
    
    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=500)
     */
    private $description;


    /**
     * Get id
     *
     * @return integer 
     */
 
    
    /**
    * @ORM\OneToMany(targetEntity="projectBundle\Entity\Besoin",mappedBy="besoin" ,cascade={"persist"})
    */
    
    private $besoin;
    
      /**
     * @var string
     *
     * @ORM\Column(name="directeur", type="integer", length=255)
     */
    
    private $directeur;
    
    
    
        /**
     * @var string
     *
     * @ORM\Column(name="rep", type="integer", length=255)
     */
    
    private $rep;
  
     /**
     * @ORM\ManyToOne(targetEntity="userBundle\Entity\Client", cascade={"persist"})
     */   
    private $client;
    

    /**
     
     *
     * @ORM\ManyToMany(targetEntity="userBundle\Entity\User")
     */
   
    private $user;
    
    
      public function __construct() {
        
        $this->besoin=new ArrayCollection;
         $this->user=new ArrayCollection;
        
    }
    
    public function setUser(User $user) {
        
        $this->user[] = $user;
        
        
    
    return $this;
    }
       public function addUser(User $user) {
        
        $this->user->add($user);
        
        
    
    return $this;
    }
    
    public function getUser(){
         
        return $this->user;
    }
    
    public function getId()
    {
        return $this->id;
    }
     
    
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string 
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Projet
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }
    
   
    public function addBesoin(Besoin $besoin) {
        $this->besoin[] = $besoin;
        $besoin->getProjet($this);
    
    return $this;
    }
    
    public function getBesoin(){
         
        return $this->besoin;
    }
    
    
    public function removeUser($user) {
        
        $this->user->removeElement($user);
    } 
    
    public function setClient($client) {
        
        $this->client = $client;
       
    
    return $this;
    }
    
    public function getClient(){
         
        return $this->client;
    }
    
      public function setDirecteur($directeur) {
        
        $this->directeur = $directeur;
       
    
    return $this;
    }
    
    public function getDirecteur(){
         
        return $this->directeur;
    }
    
    public function setRep($rep) {
        
        $this->rep = $rep;
       
    
    return $this;
    }
    
    public function getRep(){
         
        return $this->rep;
    }
        
   
}
