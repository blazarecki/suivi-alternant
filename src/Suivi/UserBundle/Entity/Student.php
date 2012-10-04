<?php

namespace Suivi\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

use Suivi\MainBundle\Entity\ContractType;

/**
 * @ORM\Entity
 *
 * @author Benjamin Lazarecki <benjamin.lazarecki@gmail.com>
 */
class Student extends User
{
    /**
     * @ORM\ManyToOne(targetEntity = "Suivi\MainBundle\Entity\ContractType")
     * @ORM\JoinColumn(name = "typecontrat_id")
     *
     * @var \Suivi\MainBundle\Entity\ContractType
     */
    protected $contractType;

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
     * @return \Suivi\MainBundle\Entity\ContractType
     */
    public function getContractType()
    {
        return $this->contractType;
    }

    /**
     * @param \Suivi\MainBundle\Entity\ContractType $typeContrat
     *
     * @return \Suivi\UserBundle\Entity\Student
     */
    public function setContractType(ContractType $contractType)
    {
        $this->contractType = $contractType;

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
        if (null === $this->professor) {
            $this->professor = $professor;
        }

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
        if (null === $this->tutor) {
            $this->tutor = $tutor;
        }

        return $this;
    }
}
