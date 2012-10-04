<?php

namespace Suivi\MainBundle\DataFixtures\ORM\shared;

use Doctrine\Common\DataFixtures\AbstractFixture,
    Doctrine\Common\DataFixtures\OrderedFixtureInterface,
    Doctrine\Common\Persistence\ObjectManager;

use Suivi\MainBundle\Entity\ContractType;

/**
 * Load typeContrat
 *
 * @author Benjamin Lazarecki <benjamin@widop.com>
 */
class LoadContractType extends AbstractFixture implements OrderedFixtureInterface
{
    /**
     * {@inheritdoc}
     */
    public function load(ObjectManager $manager)
    {
        $ca = new ContractType();
        $ca
            ->setName('Contrat apprentissage')
            ->setCode('ca');

        $cp = new ContractType();
        $cp
            ->setName('Contrat professionnalisation')
            ->setCode('cp');

        $manager->persist($ca);
        $manager->persist($cp);

        $this->setReference('contracttype_ca', $ca);
        $this->setReference('contracttype_cp', $cp);

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
