<?php

namespace Suivi\AdminBundle\DataFixtures\ORM\dev;

use Doctrine\Common\DataFixtures\AbstractFixture,
    Doctrine\Common\DataFixtures\OrderedFixtureInterface,
    Doctrine\Common\Persistence\ObjectManager;

use Suivi\UserBundle\Entity\User;

/**
 * Load admin.
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
        $faker = \Faker\Factory::create('fr_FR');

        $admin = new User();
        $admin
            ->setUsername('admin')
            ->setFirstname($faker->firstname)
            ->setLastname($faker->lastname)
            ->setEmail('admin@admin.com')
            ->setPlainPassword('admin')
            ->setEnabled(true)
            ->addRole('ROLE_ADMIN');

        $manager->persist($admin);

        $manager->flush();
    }

    /**
     * {@inheritdoc}
     */
    public function getOrder()
    {
        return 20;
    }
}
