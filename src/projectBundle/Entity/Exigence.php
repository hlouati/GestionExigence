<?php

namespace projectBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use \Doctrine\Common\Collections\ArrayCollection;
/**
 * Exigence
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Exigence
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
     * @ORM\ManyToOne(targetEntity="projectBundle\Entity\VersionBesoin")
     */
    
    private $verBesoin;
 
       /**
    * @ORM\OneToMany(targetEntity="projectBundle\Entity\VersionExigence",mappedBy="exigence",cascade={"persist"})
    */    
    private $version;
   
    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=255)
     */
    private $nom;
       
    /**
     * Get id
     *
     * @return integer 
     */
           /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=255)
     */
    private $type;

    
       
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nom
     *
     * @param string $nom
     * @return Exigence
     */
    
      public function setVerBesoin(VersionBesoin $verBesoin)
    {
        $this->verBesoin = $verBesoin;
    }
 
   
    public function getVerbesoin()
    {
        return $this->verBesoin;
    }
           
    public function setVersion(VersionBesoin $version) {
       
        $this->version[] = $version;
        $version->getExigence($this);
    
    return $this;
    }
    
    public function getVersion(){
         
        return $this->version;
    }
    
    
    public function setNom($nom) {
        
        $this->nom=$nom;
        
    }
    
    
    public function getNom() {
        
        return $this->nom;
        
    }
  
       public function __construct() {
        
        $this->version=new ArrayCollection;

        
    }
    
 
      public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    public function getType()
    {
        return $this->type;
    }
}
