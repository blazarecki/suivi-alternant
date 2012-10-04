<?php

namespace Suivi\MainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name = "type_contrat")
 *
 * @author Benjamin Lazarecki <benjamin.lazarecki@gmail.com>
 */
class TypeContrat
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
    protected $name;

    /**
     * @ORM\Column(
     *      type   = "string",
     *      length = 10
     * )
     *
     * @var string
     */
    protected $code;

    /**
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     *
     * @return string
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     *
     * @param string $name
     *
     * @return \Suivi\MainBundle\Entity\TypeContrat
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }


    /**
     *
     * @param string $code
     *
     * @return \Suivi\MainBundle\Entity\TypeContrat
     */
    public function setCode($code)
    {
        $this->code = $code;

        return $this;
    }
}
