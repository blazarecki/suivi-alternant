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
class LoadUser extends AbstractFixture implements OrderedFixtureInterface
{
    /**
     * {@inheritdoc}
     */
    public function load(ObjectManager $manager)
    {
        $user = new User();
        $user
            ->setUsername('user')
            ->setEmail('user@user.com')
            ->setPlainPassword('user')
            ->setEnabled(true);

        $manager->persist($user);

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
