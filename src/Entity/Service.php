<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Service
 *
 * @ORM\Table(name="service")
 * @ORM\Entity
 */
class Service
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nomService", type="string", length=255, nullable=false)
     */
    private $nomservice;
    public function setNomService($nomService)
    {
        $this->nomservice=$nomService;
    }
    public function getNomService()
    {
        return $this->nomservice;
    }
    public function getId()
    {
        return $this->id;
    }
    public function __toString()
    {
        return (string) $this->nomservice;
    }
 

    /**
 * Constructor
 */
    public function __construct()
    {
    }
}
