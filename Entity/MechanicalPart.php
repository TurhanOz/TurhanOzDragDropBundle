<?php

namespace TurhanOz\DragDropBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use TurhanOz\DragDropBundle\Entity\Car;

/**
 * MechanicalPart
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="TurhanOz\DragDropBundle\Entity\MechanicalPartRepository")
 */
class MechanicalPart
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
     * @var string
     *
     * @ORM\Column(name="imageName", type="string", length=255)
     */
    private $imageName;

    /**
     * @ORM\ManyToMany(targetEntity="Car", mappedBy="mechanicalParts")
     **/
    private $cars;


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
     * @return MechanicalPart
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

    /**
     * Set imageName
     *
     * @param string $imageName
     * @return MechanicalPart
     */
    public function setImageName($imageName)
    {
        $this->imageName = $imageName;
    
        return $this;
    }

    /**
     * Get imageName
     *
     * @return string 
     */
    public function getImageName()
    {
        return $this->imageName;
    }

    public function __construct() {
        $this->cars = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add cars
     *
     * @param \TurhanOz\DragDropBundle\Entity\Car $cars
     * @return MechanicalPart
     */
    public function addCar(\TurhanOz\DragDropBundle\Entity\Car $cars)
    {
        $this->cars[] = $cars;
    
        return $this;
    }

    /**
     * Remove cars
     *
     * @param \TurhanOz\DragDropBundle\Entity\Car $cars
     */
    public function removeCar(\TurhanOz\DragDropBundle\Entity\Car $cars)
    {
        $this->cars->removeElement($cars);
    }

    /**
     * Get cars
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getCars()
    {
        return $this->cars;
    }
}