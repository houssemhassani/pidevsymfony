<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Reservation
 *
 * @ORM\Table(name="reservation")
 *
 * @ORM\Entity(repositoryClass="App\Repository\ReservationRepository")
 */
class Reservation
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
     * @var \DateTime
     *
     * @ORM\Column(name="date_reservation", type="datetime", nullable=false)
     */
    private $dateReservation;

    /**
     * @var int|null
     *
     * @var \DateTime
     * @Assert\Range(
     *      min = "now",
     *      max = "+15 days",
     *      notInRangeMessage = "Entre {{ min }} et {{ max }}",
     * )
     * @ORM\Column(name="dateEntretien", type="datetime", nullable=false)
     */
    private $numReservation;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDateReservation(): ?\DateTimeInterface
    {
        return $this->dateReservation;
    }

    public function setDateReservation(\DateTimeInterface $dateReservation): self
    {
        $this->dateReservation = $dateReservation;

        return $this;
    }

    public function getNumReservation(): ?int
    {
        return $this->numReservation;
    }

    public function setNumReservation(int $numReservation): self
    {
        $this->numReservation = $numReservation++;

        return $this;
    }

    public function __toString()
    {
        return $this->getDateReservation()." ";
    }


}
