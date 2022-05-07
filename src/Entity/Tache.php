<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tache
 *
 * @ORM\Table(name="tache")
 * @ORM\Entity
 */
class Tache
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_tache", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idTache;

    /**
     * @var int
     *
     * @ORM\Column(name="num_tache", type="integer", nullable=false)
     */
    private $numTache;

    /**
     * @var string
     *
     * @ORM\Column(name="nom_tache", type="string", length=255, nullable=false)
     */
    private $nomTache;

    /**
     * @var int
     *
     * @ORM\Column(name="emp_id", type="integer", nullable=false)
     */
    private $empId;

    /**
     * @var int
     *
     * @ORM\Column(name="needed_time", type="integer", nullable=false)
     */
    private $neededTime;

    /**
     * @var string
     *
     * @ORM\Column(name="etat_tache", type="string", length=255, nullable=false, options={"default"="NOT DONE"})
     */
    private $etatTache = 'NOT DONE';

    /**
     * @var string
     *
     * @ORM\Column(name="importance", type="string", length=255, nullable=false, options={"default"="Normal"})
     */
    private $importance = 'Normal';

    public function getIdTache(): ?int
    {
        return $this->idTache;
    }

    public function getNumTache(): ?int
    {
        return $this->numTache;
    }

    public function setNumTache(int $numTache): self
    {
        $this->numTache = $numTache;

        return $this;
    }

    public function getNomTache(): ?string
    {
        return $this->nomTache;
    }

    public function setNomTache(string $nomTache): self
    {
        $this->nomTache = $nomTache;

        return $this;
    }

    public function getEmpId(): ?int
    {
        return $this->empId;
    }

    public function setEmpId(int $empId): self
    {
        $this->empId = $empId;

        return $this;
    }

    public function getNeededTime(): ?int
    {
        return $this->neededTime;
    }

    public function setNeededTime(int $neededTime): self
    {
        $this->neededTime = $neededTime;

        return $this;
    }

    public function getEtatTache(): ?string
    {
        return $this->etatTache;
    }

    public function setEtatTache(string $etatTache): self
    {
        $this->etatTache = $etatTache;

        return $this;
    }

    public function getImportance(): ?string
    {
        return $this->importance;
    }

    public function setImportance(string $importance): self
    {
        $this->importance = $importance;

        return $this;
    }


}
