<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use phpDocumentor\Reflection\Types\String_;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Commantaire
 *
 * @ORM\Table(name="commantaire", indexes={@ORM\Index(name="commantaire_ibfk_1", columns={"id_citoyen"}), @ORM\Index(name="commantaire_ibfk_3", columns={"id_publication"})})
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
     * @Assert\NotBlank(message="Content doit etre non vide")
     * @ORM\Column(name="content", type="string", length=255, nullable=false)
     */
    private $content;

    /**
     * @var int
     *
     * @ORM\Column(name="id_employee", type="integer", nullable=false)
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

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId(int $id): void
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getContent(): ?string
    {
        return $this->content;
    }

    /**
     * @param string $content
     */
    public function setContent(string $content): void
    {
        $this->content = $content;
    }

    /**
     * @return int
     */
    public function getIdEmployee(): ?int
    {
        return $this->idEmployee;
    }

    /**
     * @param int $idEmployee
     */
    public function setIdEmployee(int $idEmployee): void
    {
        $this->idEmployee = $idEmployee;
    }

    /**
     * @return int
     */
    public function __toString(){
        return (String)$this->getIdPublication();
    }
    public function getIdPublication(): ?int
    {
        return $this->idPublication;
    }

    /**
     * @param \Publication $idPublication
     */
    public function setIdPublication(\Publication $idPublication): void
    {
        $this->idPublication = $idPublication;
    }

    /**
     * @return int
     */
    public function getIdCitoyen(): ?int
    {
        return $this->idCitoyen;
    }

    /**
     * @param \Citoyen $idCitoyen
     */
    public function setIdCitoyen(\Citoyen $idCitoyen): void
    {
        $this->idCitoyen = $idCitoyen;
    }


}
