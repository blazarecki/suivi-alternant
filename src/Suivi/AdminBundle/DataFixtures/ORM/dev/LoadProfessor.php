<?php

namespace Suivi\AdminBundle\DataFixtures\ORM\dev;

use Doctrine\Common\DataFixtures\AbstractFixture,
    Doctrine\Common\DataFixtures\OrderedFixtureInterface,
    Doctrine\Common\Persistence\ObjectManager;

use Suivi\UserBundle\Entity\Professor;

/**
 * Load fake professor.
 *
 * @author Benjamin Lazarecki <benjamin.lazarecki@gmail.com>
 */
class LoadProfessor extends AbstractFixture implements OrderedFixtureInterface
{
    /**
     * {@inheritdoc}
     */
    public function load(ObjectManager $manager)
    {
        $faker = \Faker\Factory::create('fr_FR');

        for ($i = 0; $i < 2; $i++) {
            $professor = new Professor();
            $professor
                ->setUsername('professor_' . $i)
                ->setFirstname($faker->firstname)
                ->setLastname($faker->lastname)
                ->setEmail('professor_' . $i .'@professor.com')
                ->setPlainPassword('professor')
                ->setEnabled(true)
                ->addRole('ROLE_USER');

            if (0 === $i) {
                $professor->addRole('ROLE_ADMIN');
            }

            $manager->persist($professor);

            $this->setReference('professor_' . $i, $professor);
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
