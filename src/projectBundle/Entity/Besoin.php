<?php

namespace projectBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
/**
 * Besoin
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="projectBundle\Entity\BesoinRepository")
 */
class Besoin
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
    * @ORM\ManyToOne(targetEntity="projectBundle\Entity\Projet")
    */
    
    private $projet;
    
     /**
    * @ORM\OneToMany(targetEntity="projectBundle\Entity\VersionBesoin",mappedBy="besoin" ,cascade={"persist"})
    */
    
    private $version;
    /**
     * Get id
     *
     * @return integer 
     */
    
      /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=255)
     */
    private $nom;
    
  
    
      public function __construct() {
        
        $this->version=new ArrayCollection;

        
    }
    
    
    
    
    public function getId()
    {
        return $this->id;
    }
    
    
     public function setVersion(VersionBesoin $version) {
        
        $this->version[] = $version;
        $version->getBesoin($this);
    
    return $this;
    }
    
    public function getVersion(){
         
        return $this->version;
    }
    
      public function setProjet($projet) {
        
        $this->projet = $projet;
       
    
    return $this;
    }
    
    public function getProjet(){
         
        return $this->projet;
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
    
   
    
    
    
    
    }
