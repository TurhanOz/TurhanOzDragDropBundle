<?php

namespace TurhanOz\DragDropBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use TurhanOz\DragDropBundle\Entity\MechanicalPart;

class LoadMechanicalPartData implements FixtureInterface
{
    /**
     * {@inheritDoc}
     */
    public function load(ObjectManager $manager)
    {
        $mp1 = new MechanicalPart();
        $mp1->setName('Jantes 15inch');
        $mp1->setImageName('jante');
        $manager->persist($mp1);

        $mp2 = new MechanicalPart();
        $mp2->setName('Jantes 20inch');
        $mp2->setImageName('jante');
        $manager->persist($mp2);

        $manager->flush();
    }
}

