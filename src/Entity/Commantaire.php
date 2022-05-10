<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Commantaire
 *
 * @ORM\Table(name="commantaire", indexes={@ORM\Index(name="id_publication", columns={"id_publication"}), @ORM\Index(name="id_employee", columns={"id_employee"}), @ORM\Index(name="id_citoyen", columns={"id_citoyen"})})
 * @ORM\Entity
 */
class Commantaire
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
     * @ORM\Column(name="content", type="string", length=255, nullable=false)
     */
    private $content;

    /**
     * @var \Employee
     *
     * @ORM\ManyToOne(targetEntity="Employee")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_employee", referencedColumnName="id")
     * })
     */
    private $idEmployee;

    /**
     * @var \Publication
     *
     * @ORM\ManyToOne(targetEntity="Publication")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_publication", referencedColumnName="id")
     * })
     */
    private $idPublication;

    /**
     * @var \Citoyen
     *
     * @ORM\ManyToOne(targetEntity="Citoyen")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_citoyen", referencedColumnName="id")
     * })
     */
    private $idCitoyen;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getContent(): ?string
    {
        return $this->content;
    }

    public function setContent(string $content): self
    {
        $this->content = $content;

        return $this;
    }

    public function getIdEmployee(): ?Employee
    {
        return $this->idEmployee;
    }

    public function setIdEmployee(?Employee $idEmployee): self
    {
        $this->idEmployee = $idEmployee;

        return $this;
    }

    public function getIdPublication(): ?Publication
    {
        return $this->idPublication;
    }

    public function setIdPublication(?Publication $idPublication): self
    {
        $this->idPublication = $idPublication;

        return $this;
    }

    public function getIdCitoyen(): ?Citoyen
    {
        return $this->idCitoyen;
    }

    public function setIdCitoyen(?Citoyen $idCitoyen): self
    {
        $this->idCitoyen = $idCitoyen;

        return $this;
    }


}
