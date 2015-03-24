<?php

namespace userBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Client
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="userBundle\Entity\ClientRepository")
 */
class Client
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
     * @ORM\Column(name="Rsocial", type="string", length=255)
     */
    private $rsocial;

    /**
     * @var string
     *
     * @ORM\Column(name="adr", type="string", length=255)
     */
    private $adr;

    /**
     * @var string
     *
     * @ORM\Column(name="tel", type="string", length=255)
     */
    private $tel;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=255)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="act", type="string", length=255)
     */
    private $act;
    
      /**
     * @ORM\OneToOne(targetEntity="userBundle\Entity\User", cascade={"persist"})
     */ 
    private $rep;
    
   

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
     * Set rsocial
     *
     * @param string $rsocial
     * @return Client
     */
    public function setRsocial($rsocial)
    {
        $this->rsocial = $rsocial;

        return $this;
    }

    /**
     * Get rsocial
     *
     * @return string 
     */
    public function getRsocial()
    {
        return $this->rsocial;
    }

    /**
     * Set adr
     *
     * @param string $adr
     * @return Client
     */
    public function setAdr($adr)
    {
        $this->adr = $adr;

        return $this;
    }

    /**
     * Get adr
     *
     * @return string 
     */
    public function getAdr()
    {
        return $this->adr;
    }

    /**
     * Set tel
     *
     * @param string $tel
     * @return Client
     */
    public function setTel($tel)
    {
        $this->tel = $tel;

        return $this;
    }

    /**
     * Get tel
     *
     * @return string 
     */
    public function getTel()
    {
        return $this->tel;
    }

    /**
     * Set email
     *
     * @param string $email
     * @return Client
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set act
     *
     * @param string $act
     * @return Client
     */
    public function setAct($act)
    {
        $this->act = $act;

        return $this;
    }

    /**
     * Get act
     *
     * @return string 
     */
    public function getAct()
    {
        return $this->act;
    }
    
       public function setRep(User $rep)
    {
        $this->rep = $rep;

        return $this;
    }

    /**
     * Get act
     *
     * @return string 
     */
    public function getRep()
    {
        return $this->rep;
        
    }
}
