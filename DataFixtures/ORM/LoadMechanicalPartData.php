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

        $mp3 = new MechanicalPart();
        $mp3->setName('2.2 Diesel');
        $mp3->setImageName('engine');
        $manager->persist($mp3);

        $mp4 = new MechanicalPart();
        $mp4->setName('Volant Cuir');
        $mp4->setImageName('volant');
        $manager->persist($mp4);

        $mp5 = new MechanicalPart();
        $mp5->setName('Volant multifonction');
        $mp5->setImageName('volant');
        $manager->persist($mp5);




        $manager->flush();
    }
}

