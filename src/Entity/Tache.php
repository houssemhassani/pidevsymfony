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


}
