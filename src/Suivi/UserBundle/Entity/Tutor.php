<?php

namespace Suivi\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 *
 * @author Benjamin Lazarecki <benjamin.lazarecki@gmail.com>
 */
class Tutor extends User
{
    /**
     * @ORM\Column(
     *      type   = "string",
     *      length = 255
     * )
     *
     * @var string
     */
    protected $compagnie;

    /**
     * @ORM\Column(
     *      type   = "string",
     *      length = 255
     * )
     *
     * @var string
     */
    protected $adresse;

    /**
     * @ORM\OneToMany(
     *      targetEntity = "Suivi\UserBundle\Entity\Student",
     *      mappedBy     = "tutor"
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
     * @return type
     */
    public function getCompagnie()
    {
        return $this->compagnie;
    }

    /**
     *
     * @param string $compagnie
     *
     * @return \Suivi\UserBundle\Entity\Tutor
     */
    public function setCompagnie($compagnie)
    {
        $this->compagnie = $compagnie;

        return $this;
    }

    /**
     *
     * @return type
     */
    public function getAdresse()
    {
        return $this->adresse;
    }

    /**
     *
     * @param string $adresse
     *
     * @return \Suivi\UserBundle\Entity\Tutor
     */
    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;

        return $this;
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
