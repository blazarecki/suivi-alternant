<?php

namespace Suivi\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM,
    Doctrine\Common\Collections\ArrayCollection;

/**
 * @ORM\Entity
 *
 * @author Benjamin Lazarecki <benjamin.lazarecki@gmail.com>
 */
class Professor extends User
{
    /**
     * @ORM\OneToMany(
     *      targetEntity = "Suivi\UserBundle\Entity\Student",
     *      mappedBy     = "professor"
     * )
     *
     * @var \Doctrine\Common\Collections\ArrayCollection
     */
    protected $students;

    /**
     * Constructor.
     */
    public function __construct()
    {
        parent::__construct();

        $this->students = new ArrayCollection();
    }

    /**
     *
     * @return \Suivi\UserBundle\Entity\Student
     */
    public function getStudents()
    {
        return $this->students;
    }

    /**
     *
     * @param \Suivi\UserBundle\Entity\Student $student
     *
     * @return \Suivi\UserBundle\Entity\Professor
     */
    public function addStudent(Student $student)
    {
        $this->students[] = $student;

        return $this;
    }

    /**
     *
     * @param array|\Doctrine\Common\Collections\ArrayCollection $students
     *
     * @return \Suivi\UserBundle\Entity\Professor
     */
    public function setStudents($students)
    {
        $this->students = new ArrayCollection();

        foreach ($students as $student) {
            $this->addStudent($student);
        }

        return $this;
    }
}
