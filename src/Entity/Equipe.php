<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Equipe
 *
 * @ORM\Table(name="equipe", uniqueConstraints={@ORM\UniqueConstraint(name="num_equipe", columns={"num_equipe"})})
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
     * @ORM\Column(name="Service_nom", type="string", length=255, nullable=false)
     */
    private $serviceNom;

    /**
     * @var int
     *
     * @ORM\Column(name="nbre_emp", type="integer", nullable=false)
     */
    private $nbreEmp;


}
