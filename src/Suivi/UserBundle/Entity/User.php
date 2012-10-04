<?php

namespace Suivi\UserBundle\Entity;

use FOS\UserBundle\Entity\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="suivi_user")
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
     * {@inheritdoc}
     */
    public function __construct()
    {
        parent::__construct();
    }
}