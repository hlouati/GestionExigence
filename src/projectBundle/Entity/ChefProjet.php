<?php

namespace projectBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ChefProjet
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class ChefProjet
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
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }
}
