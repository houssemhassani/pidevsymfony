<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Equipe
 *
 * @ORM\Table(name="equipe")
 * @ORM\Entity
 */
class Equipe
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_equipe", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idEquipe;

    /**
     * @var int
     *
     * @ORM\Column(name="num_equipe", type="integer", nullable=false)
     */
    private $numEquipe;

    /**
     * @var string
     *
     * @ORM\Column(name="service_nom", type="string", length=255, nullable=false)
     */
    private $serviceNom;

    /**
     * @var int
     *
     * @ORM\Column(name="nbre-emp", type="integer", nullable=false)
     */
    private $nbreEmp = '0';

    public function getIdEquipe(): ?int
    {
        return $this->idEquipe;
    }

    public function getNumEquipe(): ?int
    {
        return $this->numEquipe;
    }

    public function setNumEquipe(int $numEquipe): self
    {
        $this->numEquipe = $numEquipe;

        return $this;
    }

    public function getServiceNom(): ?string
    {
        return $this->serviceNom;
    }

    public function setServiceNom(string $serviceNom): self
    {
        $this->serviceNom = $serviceNom;

        return $this;
    }

    public function getNbreEmp(): ?int
    {
        return $this->nbreEmp;
    }

    public function setNbreEmp(int $nbreEmp): self
    {
        $this->nbreEmp = $nbreEmp;

        return $this;
    }


}
