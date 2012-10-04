<?php

namespace Suivi\UserBundle\Entity;

use FOS\UserBundle\Entity\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="suivi_user")
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