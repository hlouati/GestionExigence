<?php

namespace projectBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * VersionExigence
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class VersionExigence
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
     * @var integer
     *
     * @ORM\Column(name="numVersion", type="integer")
     */
    private $numVersion;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=255)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="descp", type="text")
     */
   
    
    private $descp;

   
 /**   
     * @ORM\ManyToOne(targetEntity="projectBundle\Entity\Exigence")
     */
    
    private $exigence;
    
     
           /**
    * @ORM\ManyToOne(targetEntity="userBundle\Entity\User")
    */
    
    private $redact;
    
        /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="date")
     */
    private $date;

    /**
     * @var string
     *
     * @ORM\Column(name="curent", type="string", length=255)
     */
    private $curent;
    
    /**
     * @var string
     *
     * @ORM\Column(name="perio", type="string", length=255)
     */
    private $perio;
    
        /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=255)
     */
    private $type;
        
    /**
     * @var string
     *
     * @ORM\Column(name="def", type="string", length=255)
     */
    private $def;
    
    
    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set numVersion
     *
     * @param integer $numVersion
     * @return VersionExigence
     */
    public function setNom($nom) {
        
        $this->nom=$nom;
        
    }
    
    
    public function getNom() {
        
        return $this->nom;
        
    }
    
    public function setNumVersion($numVersion)
    {
        $this->numVersion = $numVersion;

        return $this;
    }

    /**
     * Get numVersion
     *
     * @return integer 
     */
    public function getNumVersion()
    {
        return $this->numVersion;
    }

    /**
     * Set descp
     *
     * @param string $descp
     * @return VersionExigence
     */
    public function setDescp($descp)
    {
        $this->descp = $descp;

        return $this;
    }

    /**
     * Get descp
     *
     * @return string 
     */
    public function getDescp()
    {
        return $this->descp;
    }

   public function setExigence($exigence)
    {
        $this->exigence = $exigence;
    }

    public function getExigence()
    {
        return $this->exigence;
    }
    
       public function getRedact()
    {
        return $this->redact;
    }
    
       public function setRedact($redact)
    {
        $this->redact = $redact;

        return $this;
    }
    
     public function setDate()
    {
        $this->date = new \DateTime();

        return $this;
    }
    
    public function getDate()
    {
        return $this->date;
    }

    public function setCurent($curent)
    {
        $this->curent = $curent;

        return $this;
    }

    public function getCurent()
    {
        return $this->curent;
    }
    
    
     public function setPerio($perio)
    {
        $this->perio = $perio;

        return $this;
    }

    public function getPerio()
    {
        return $this->perio;
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
    
         public function setDef($def)
    {
        $this->def= $def;

        return $this;
    }

    public function getDef()
    {
        return $this->def;
    }
  
}
