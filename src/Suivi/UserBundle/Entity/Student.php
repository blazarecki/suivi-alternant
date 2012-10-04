<?php

namespace Suivi\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

use Suivi\MainBundle\Entity\TypeContrat;

/**
 * @ORM\Entity
 * @ORM\Table(name = "student")
 *
 * @author Benjamin Lazarecki <benjamin.lazarecki@gmail.com>
 */
class Student extends User
{
    /** @var \Suivi\MainBundle\Entity\TypeContrat */
    protected $typeContrat;

    /**
     *
     * @return \Suivi\MainBundle\Entity\TypeContrat
     */
    public function getTypeContrat()
    {
        return $this->typeContrat;
    }

    /**
     * @param \Suivi\MainBundle\Entity\TypeContrat $typeContrat
     *
     * @return \Suivi\UserBundle\Entity\Student
     */
    public function setTypeContrat(TypeContrat $typeContrat)
    {
        $this->typeContrat = $typeContrat;

        return $this;
    }
}
