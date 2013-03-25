<?php

namespace TurhanOz\DragDropBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use TurhanOz\DragDropBundle\Entity\Car;

class LoadCarData implements FixtureInterface
{
    /**
     * {@inheritDoc}
     */
    public function load(ObjectManager $manager)
    {
        $car1 = new Car();
        $car1->setName('Ford Mustang');
        $manager->persist($car1);

        $car2 = new Car();
        $car2->setName('VW Passat');
        $manager->persist($car2);


        $manager->flush();
    }
}

