<?php

namespace Suivi\AdminBundle\DataFixtures\ORM\dev;

use Doctrine\Common\DataFixtures\AbstractFixture,
    Doctrine\Common\DataFixtures\OrderedFixtureInterface,
    Doctrine\Common\Persistence\ObjectManager;

use Suivi\UserBundle\Entity\Student;

/**
 * Load fake student.
 *
 * @author Benjamin Lazarecki <benjamin.lazarecki@gmail.com>
 */
class LoadStudent extends AbstractFixture implements OrderedFixtureInterface
{
    /**
     * {@inheritdoc}
     */
    public function load(ObjectManager $manager)
    {
        $faker = \Faker\Factory::create('fr_FR');

        for ($i = 0; $i < 10; $i++) {
            $student = new Student();
            $student
                ->setUsername('student_' . $i)
                ->setFirstname($faker->firstname)
                ->setLastname($faker->lastname)
                ->setEmail('student_' . $i .'@professor.com')
                ->setPlainPassword('student')
                ->setEnabled(true)
                ->addRole('ROLE_USER');

            if ($faker->boolean(50)) {
                $student->setContractType($manager->merge($this->getReference('contracttype_ca')));
            } else {
                $student->setContractType($manager->merge($this->getReference('contracttype_cp')));
            }

            if ($faker->boolean(50)) {
                $student->setProfessor($manager->merge($this->getReference('professor_1')));
            } else {
                $student->setProfessor($manager->merge($this->getReference('professor_0')));
            }

            $student->setTutor($manager->merge($this->getReference('tutor_' . $i)));

            $manager->persist($student);

            $this->setReference('student_' . $i, $student);
        }

        $manager->flush();
    }

    /**
     * {@inheritdoc}
     */
    public function getOrder()
    {
        return 50;
    }
}
