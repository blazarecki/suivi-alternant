<?php

namespace Suivi\UserBundle\DataFixtures\ORM\dev;

use Doctrine\Common\DataFixtures\AbstractFixture,
    Doctrine\Common\DataFixtures\OrderedFixtureInterface,
    Doctrine\Common\Persistence\ObjectManager;

use Suivi\UserBundle\Entity\User;

/**
 * Load users.
 *
 * @author Benjamin Lazarecki <benjamin@widop.com>
 */
class LoadAdmin extends AbstractFixture implements OrderedFixtureInterface
{
    /**
     * {@inheritdoc}
     */
    public function load(ObjectManager $manager)
    {
        $admin = new User();
        $admin
            ->setUsername('admin')
            ->setEmail('admin@admin.com')
            ->setPlainPassword('admin')
            ->setEnabled(true);

        $manager->persist($admin);

        $manager->flush();
    }

    /**
     * {@inheritdoc}
     */
    public function getOrder()
    {
        return 10;
    }
}
