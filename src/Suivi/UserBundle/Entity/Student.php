<?php

namespace Suivi\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

use Suivi\MainBundle\Entity\TypeContrat;

/**
 * @ORM\Entity
 *
 * @author Benjamin Lazarecki <benjamin.lazarecki@gmail.com>
 */
class Student extends User
{
    /**
     * @ORM\ManyToOne(targetEntity = "Suivi\MainBundle\Entity\TypeContrat")
     * @ORM\JoinColumn(name = "typecontrat_id")
     *
     * @var \Suivi\MainBundle\Entity\TypeContrat
     */
    protected $typeContrat;

    /**
     * @ORM\ManyToOne(
     *      targetEntity = "Suivi\UserBundle\Entity\Professor",
     *      inversedBy   = "students"
     * )
     * @ORM\JoinColumn(name = "professor_id")
     *
     * @var \Suivi\UserBundle\Entity\Professor
     */
    protected $professor;

    /**
     * @ORM\ManyToOne(
     *      targetEntity = "Suivi\UserBundle\Entity\Tutor",
     *      inversedBy   = "students"
     * )
     * @ORM\JoinColumn(name = "tutor_id")
     *
     * @var \Suivi\UserBundle\Entity\Tutor
     */
    protected $tutor;

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

    /**
     *
     * @return \Suivi\UserBundle\Entity\Professor
     */
    public function getProfessor()
    {
        return $this->professor;
    }

    /**
     *
     * @param \Suivi\UserBundle\Entity\Professor $professor
     *
     * @return \Suivi\UserBundle\Entity\Student
     */
    public function setProfessor(Professor $professor)
    {
        $this->professor = $professor;

        return $this;
    }

    /**
     *
     * @return \Suivi\UserBundle\Entity\Tutor
     */
    public function getTutor()
    {
        return $this->tutor;
    }

    /**
     *
     * @param \Suivi\UserBundle\Entity\Tutor $tutor
     * 
     * @return \Suivi\UserBundle\Entity\Student
     */
    public function setTutor(Tutor $tutor)
    {
        $this->tutor = $tutor;

        return $this;
    }
}
