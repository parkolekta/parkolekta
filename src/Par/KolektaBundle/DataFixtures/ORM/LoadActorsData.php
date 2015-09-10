<?php

// src/Par/KolektaBundle/DataFixtures/ORM/LoadActorsData.php

namespace Par\KolektaBundle\DataFixtures\ORM;

use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Par\KolektaBundle\Entity\Actors;


class LoadActorsData extends AbstractFixture implements OrderedFixtureInterface {

    /**
     * {@inheritDoc}
     */
    public function load(ObjectManager $em){

        $viewer = new Actors();
        $viewer->setTitle('Viewer');

        $admin = new Actors();
        $admin->setTitle('Admin');

        $manager = new Actors();
        $manager->setTitle('Manager');

        $em->persist($viewer);
        $em->persist($admin);
        $em->persist($manager);


        $em->flush();

//        $this->addReference('actors-viewer', $viewer);
//        $this->addReference('actors-admin', $admin);
//        $this->addReference('actors-manager', $manager);

    }

    public function getOrder()
    {
        return 1; // the order in which fixtures will be loaded
    }

} 