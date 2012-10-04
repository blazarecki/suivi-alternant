<?php

namespace Suivi\UserBundle\Entity;

use FOS\UserBundle\Entity\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="fos_user")
 *
 * @ORM\InheritanceType("SINGLE_TABLE")
 * @ORM\DiscriminatorColumn(
 *      name = "discr",
 *      type = "string"
 * )
 * @ORM\DiscriminatorMap({
 *      "user"      = "Suivi\UserBundle\Entity\User",
 *      "student"   = "Suivi\UserBundle\Entity\Student",
 *      "professor" = "Suivi\UserBundle\Entity\Professor",
 *      "tutor"     = "Suivi\UserBundle\Entity\Tutor"
 * })
 *
 * @author Benjamin Lazarecki <benjamin.lazarecki@gmail.com>
 */
class User extends BaseUser
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue
     */
    protected $id;

    /**
     * @ORM\Column(
     *      type   = "string",
     *      length = 255
     * )
     *
     * @var string
     */
    protected $firstname;

    /**
     * @ORM\Column(
     *      type   = "string",
     *      length = 255
     * )
     *
     * @var string
     */
    protected $lastname;


    /**
     * {@inheritdoc}
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Gets firstname.
     *
     * @return string
     */
    public function getFirstname()
    {
        return $this->firstname;
    }

    /**
     * Sets firstname.
     *
     * @param string $firstname
     *
     * @return \Suivi\UserBundle\Entity\User
     */
    public function setFirstname($firstname)
    {
        $this->firstname = $firstname;

        return $this;
    }

    /**
     * Gets lastname.
     *
     * @return string
     */
    public function getLastname()
    {
        return $this->lastname;
    }

    /**
     * Sets lastname.
     *
     * @param string $lastname
     *
     * @return \Suivi\UserBundle\Entity\User
     */
    public function setLastname($lastname)
    {
        $this->lastname = $lastname;

        return $this;
    }

    /**
     * Return the full name.
     *
     * @return string
     */
    public function getFullname()
    {
        return sprintf('%s %s',
            $this->getFirstname(),
            $this->getLastname()
        );
    }
}