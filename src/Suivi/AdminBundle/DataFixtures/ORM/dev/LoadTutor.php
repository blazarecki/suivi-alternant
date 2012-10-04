<?php

namespace Suivi\AdminBundle\DataFixtures\ORM\dev;

use Doctrine\Common\DataFixtures\AbstractFixture,
    Doctrine\Common\DataFixtures\OrderedFixtureInterface,
    Doctrine\Common\Persistence\ObjectManager;

use Suivi\UserBundle\Entity\Tutor;

/**
 * Load fake tutor.
 *
 * @author Benjamin Lazarecki <benjamin.lazarecki@gmail.com>
 */
class LoadTutor extends AbstractFixture implements OrderedFixtureInterface
{
    /**
     * {@inheritdoc}
     */
    public function load(ObjectManager $manager)
    {
        $faker = \Faker\Factory::create('fr_FR');

        for ($i = 0; $i < 10; $i++) {
            $tutor = new Tutor();
            $tutor
                ->setUsername('tutor_' . $i)
                ->setFirstname($faker->firstname)
                ->setLastname($faker->lastname)
                ->setCompagnie($faker->company)
                ->setAdresse($faker->address)
                ->setEmail('tutor_' . $i .'@tutor.com')
                ->setPlainPassword('tutor')
                ->setEnabled(true)
                ->addRole('ROLE_USER');

            $manager->persist($tutor);

            $this->setReference('tutor_' . $i, $tutor);
        }

        $manager->flush();
    }

    /**
     * {@inheritdoc}
     */
    public function getOrder()
    {
        return 30;
    }
}
