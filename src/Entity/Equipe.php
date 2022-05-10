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
    public function getIdEquipe()
    {
        return $this->idEquipe;
    }
    public function setNumEquipe($numequipe)
    {
        $this->numEquipe=$numequipe;
    }
    public function getNbreEmp()
    {
        return $this->nbreEmp;
    }
    public function setNbreEmp($nbreEmp)
    {
        $this->nbreEmp=$nbreEmp;
    }
    public function getnumEquipe()
    {
        return $this->numEquipe;
    }
    public function getServiceNom()
    {
        return $this->serviceNom;
    }
    public function setServiceNom($serviceNom)
    {
        $this->serviceNom=$serviceNom;
    }

    public function __toString()
    {
        return (string) $this->numEquipe;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
    }
}