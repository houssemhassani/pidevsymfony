<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Demande
 *
 * @ORM\Table(name="demande", indexes={@ORM\Index(name="id_citoyen", columns={"id_citoyen"}), @ORM\Index(name="id_service", columns={"id_service"})})
 * @ORM\Entity(repositoryClass="App\Repository\DemandeRepository")
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
     * @var string
     *
     * @ORM\Column(name="date_demande", type="date", nullable=true)
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
    public function removeIdCitoyen(\App\Entity\Citoyen $citoyen)
    {
        $this->idCitoyen->removeElement($citoyen);
    }
    public function addIdCitoyen(\App\Entity\Citoyen $equipe)
    {
        $this->idCitoyen[] = $equipe;

        return $this;
    }
    public function removeIdService(\App\Entity\Service $service)
    {
        $this->idService->removeElement($service);
    }
    public function addIdService(\App\Entity\Service $equipe)
    {
        $this->idService[] = $equipe;

        return $this;
    }
    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNumDemande(): ?int
    {
        return $this->numDemande;
    }

    public function setNumDemande(int $numDemande): self
    {
        $this->numDemande = $numDemande;

        return $this;
    }

    public function getTypeDemande(): ?string
    {
        return $this->typeDemande;
    }

    public function setTypeDemande( $typeDemande): self
    {
        $this->typeDemande = $typeDemande;

        return $this;
    }



    public function getDateNaissance($format = 'Y-m-d H:i:s')
    {
        return $this->date_naissance->format($format);

    }





    public function getDateDemande()
    {
        return $this->dateDemande;
    }









    public function setDateDemande( $dateDemande)
    {
        $this->dateDemande = $dateDemande;

        return $this;
    }

    public function getEtat(): ?string
    {
        return $this->etat;
    }

    public function setEtat(?string $etat)
    {
        $this->etat = $etat;

        return $this;
    }

    public function getIdService(): ?Service
    {
        return $this->idService;
    }

    public function setIdService($idService)
    {
        $this->idService = $idService;

        return $this;
    }

    public function getIdCitoyen()
    {
        return $this->idCitoyen;
    }

    public function setIdCitoyen($idCitoyen)
    {
        $this->idCitoyen = $idCitoyen;

        return $this;
    }

    public function __toString():string
    {
        return $this->getId();
    }
   /* public function __construct()
    {
        $this->idCitoyen= new ArrayCollection();
        $this->idService=new ArrayCollection();
    }*/




}
