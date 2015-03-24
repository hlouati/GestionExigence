<?php

namespace projectBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
/**
 * VersionBesoin
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="projectBundle\Entity\VersionBesoinRepository")
 */
class VersionBesoin
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
     * @ORM\Column(name="descp", type="text")
     */
    private $descp;

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
     * @var integer
     *
     * @ORM\Column(name="numVersion", type="integer")
     */
    private $numVersion;
    
       /**
    * @ORM\ManyToOne(targetEntity="projectBundle\Entity\Besoin",cascade={"persist"})
    */
    private $besoin;
    
    
           /**
    * @ORM\ManyToOne(targetEntity="userBundle\Entity\User")
    */
    private $redact;
    
        /**
    * @ORM\OneToMany(targetEntity="projectBundle\Entity\Exigence",mappedBy="vbesoin")
    */
    private $exigence;
    
    
    
          /**
     * @ORM\OneToOne(targetEntity="projectBundle\Entity\Document")
     */   
    
    private $doc;

    /**
     * Get id
     *
     * @return integer 
     */
      public function __construct() {
        
        $this->exigence=new ArrayCollection;
        
    }
    
    
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nom
     *
     * @param string $nom
     * @return VersionBesoin
     */
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
     * Set descp
     *
     * @param string $descp
     * @return VersionBesoin
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

    /**
     * Set date
     *
     * @param \DateTime $date
     * @return VersionBesoin
     */
    public function setDate()
    {
        $this->date = new \DateTime();

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime 
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set curent
     *
     * @param string $curent
     * @return VersionBesoin
     */
    public function setCurent($curent)
    {
        $this->curent = $curent;

        return $this;
    }

    /**
     * Get curent
     *
     * @return string 
     */
    public function getCurent()
    {
        return $this->curent;
    }

    /**
     * Set numVersion
     *
     * @param integer $numVersion
     * @return VersionBesoin
     */
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
    
    public function getBesoin()
    {
        return $this->besoin;
    }
    
       public function setBesoin($besoin)
    {
        $this->besoin = $besoin;

        return $this;
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

    /**
     * Get numVersion
     *
     * @return integer 
     */
       public function setExigence(Exigence $exigence) {
        
        $this->exigence[] = $exigence;
        $exigence->getVerBesoin($this);
    
            return $this;
    }
    
    public function getExigence(){
         
        return $this->exigence;
    }
    
     public function getDoc()
    {
        return $this->doc;
    }
    
    public function setDoc($doc)
    {
        $this->doc=$doc;
    }
  
}
