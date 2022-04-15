<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Demande
 *
 * @ORM\Table(name="demande", indexes={@ORM\Index(name="id_citoyen", columns={"id_citoyen"}), @ORM\Index(name="id_service", columns={"id_service"})})
 * @ORM\Entity
 */
class Demande
{
    /**
     * @var int
     *
     * @ORM\Column(name="ID", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var int
     *
     * @ORM\Column(name="num_demande", type="integer", nullable=false)
     */
    private $numDemande;

    /**
     * @var string|null
     *
     * @ORM\Column(name="type_demande", type="string", length=255, nullable=true)
     */
    private $typeDemande;

    /**
     * @var string|null
     *
     * @ORM\Column(name="date_demande", type="string", length=255, nullable=true)
     */
    private $dateDemande;

    /**
     * @var string|null
     *
     * @ORM\Column(name="etat", type="string", length=255, nullable=true)
     */
    private $etat;

    /**
     * @var \Service
     *
     * @ORM\ManyToOne(targetEntity="Service")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_service", referencedColumnName="id")
     * })
     */
    private $idService;

    /**
     * @var \Citoyen
     *
     * @ORM\ManyToOne(targetEntity="Citoyen")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_citoyen", referencedColumnName="id")
     * })
     */
    private $idCitoyen;


}
