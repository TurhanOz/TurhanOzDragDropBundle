<?php

namespace TurhanOz\DragDropBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use TurhanOz\DragDropBundle\Entity\MechanicalPart;

/**
 * Car
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="TurhanOz\DragDropBundle\Entity\CarRepository")
 */
class Car
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
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @ORM\ManyToMany(targetEntity="MechanicalPart", inversedBy="cars")
     * @ORM\JoinTable(name="cars_mechanicalparts")
     **/
    private $mechanicalParts;


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
     * Set name
     *
     * @param string $name
     * @return Car
     */
    public function setName($name)
    {
        $this->name = $name;
    
        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }


    public function __construct() {
        $this->mechanicalParts = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add mechanicalParts
     *
     * @param \TurhanOz\DragDropBundle\Entity\MechanicalPart $mechanicalParts
     * @return Car
     */
    public function addMechanicalPart(\TurhanOz\DragDropBundle\Entity\MechanicalPart $mechanicalParts)
    {
        $this->mechanicalParts[] = $mechanicalParts;
    
        return $this;
    }

    /**
     * Remove mechanicalParts
     *
     * @param \TurhanOz\DragDropBundle\Entity\MechanicalPart $mechanicalParts
     */
    public function removeMechanicalPart(\TurhanOz\DragDropBundle\Entity\MechanicalPart $mechanicalParts)
    {
        $this->mechanicalParts->removeElement($mechanicalParts);
    }

    /**
     * Get mechanicalParts
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getMechanicalParts()
    {
        return $this->mechanicalParts;
    }

    public function __toString() {
        return $this->name;
    }
}
