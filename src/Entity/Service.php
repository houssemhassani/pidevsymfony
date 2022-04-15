<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Service
 *
 * @ORM\Table(name="service")
 * @ORM\Entity(repositoryClass="App\Repository\ServiceRepository")
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

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomservice(): ?string
    {
        return $this->nomservice;
    }

    public function setNomservice(string $nomservice): self
    {
        $this->nomservice = $nomservice;

        return $this;
    }

public function __toString():string
{
    return (string)$this->getId();
}
    public function __construct()
    {
    }
}
