<?php

namespace Suivi\MainBundle\DataFixtures\ORM\shared;

use Doctrine\Common\DataFixtures\AbstractFixture,
    Doctrine\Common\DataFixtures\OrderedFixtureInterface,
    Doctrine\Common\Persistence\ObjectManager;

use Suivi\MainBundle\Entity\TypeContrat;

/**
 * Load typeContrat
 *
 * @author Benjamin Lazarecki <benjamin@widop.com>
 */
class LoadTypeContrat extends AbstractFixture implements OrderedFixtureInterface
{
    /**
     * {@inheritdoc}
     */
    public function load(ObjectManager $manager)
    {
        $ca = new TypeContrat();
        $ca
            ->setName('Contrat apprentissage')
            ->setCode('ca');

        $cp = new TypeContrat();
        $cp
            ->setName('Contrat professionnalisation')
            ->setCode('cp');

        $manager->persist($ca);
        $manager->persist($cp);

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
