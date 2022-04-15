<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Commantaire
 *
 * @ORM\Table(name="commantaire", indexes={@ORM\Index(name="id_employee", columns={"id_employee"}), @ORM\Index(name="id_citoyen", columns={"id_citoyen"}), @ORM\Index(name="id_publication", columns={"id_publication"})})
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
     * @var \Employee
     *
     * @ORM\ManyToOne(targetEntity="Employee")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_employee", referencedColumnName="id")
     * })
     */
    private $idEmployee;


}
