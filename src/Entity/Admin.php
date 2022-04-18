<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Validator\Constraints as Assert;


/**
 * Admin
 *
 * @ORM\Table(name="admin", uniqueConstraints={@ORM\UniqueConstraint(name="cin", columns={"cin"})})
 * @ORM\Entity
 */
class Admin implements UserInterface
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
     * @ORM\Column(name="nom", type="string", length=255, nullable=false)
     * @Assert\NotBlank(message="Ce champs ne doit pas être vide")
     * @Assert\Length(min=3,minMessage="Votre Nom doit être supèrieur à 3 caractéres")
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="prenom", type="string", length=255, nullable=false)
     * @Assert\NotBlank(message="Ce champs ne doit pas être vide")
     * @Assert\Length(min=3,minMessage="Votre Prénom doit être supèrieur à 3 caractéres")
     */
    private $prenom;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=255, nullable=false)
     * @Assert\NotBlank(message="Ce champs ne doit pas être vide")
     * @Assert\Email(
     *     message = "l'Email :  '{{ value }}' n'est pas valid."
     * )
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="cin", type="string", length=255, nullable=false)
     * @Assert\NotBlank(message="Ce champs ne doit pas être vide")
     * @Assert\Length(min=8,max=8,minMessage="CIN doit être égale à 8 chiffres numériques")
     * @Assert\Regex(
     *     pattern     = "/^[0-1]+[0-9]+[0-9]+[0-9]+[0-9]+[0-9]+[0-9]+[0-9]$/i",
     *     message="premier caractère soit 1 ou 0")
     */
    private $cin;

    /**
     * @var string
     *
     * @ORM\Column(name="mot_de_passe", type="string", length=255, nullable=false)
     * @Assert\NotBlank(message="Ce champs est obligatoire")
     *  @Assert\Regex(
     *  pattern="/^(?=.{8,}$)(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9]).*$/",
     *  message="Votre mot de passe doit contenir au moins 1 chiffre, 1 majuscule, 1 minuscule et avoir une longueur d'au moins 8 caractères."
     * )
     */
    private $motDePasse;

    private $confirmMotDePasse;

    /**
     * @return mixed
     */
    public function getConfirmMotDePasse()
    {
        return $this->confirmMotDePasse;
    }

    /**
     * @param mixed $confirmMotDePasse
     */
    public function setConfirmMotDePasse($confirmMotDePasse)
    {
        $this->confirmMotDePasse = $confirmMotDePasse;
    }

    public function getId()
    {
        return $this->id;
    }
    public function getNom()
    {
        return $this->nom;
    }
    public function getPrenom()
    {
        return $this->prenom;
    }
    public function getEmail()
    {
        return $this->email;
    }
    public function getCin()
    {
        return $this->cin;
    }
    public function setCin($cin)
    {
        $this->cin=$cin;
    }
    public function getMotDePasse()
    {
        return $this->motDePasse;
    }
    public function setNom($nom)
    {
        $this->nom=$nom;
    }
    public function setPrenom($prenom)
    {
        $this->prenom=$prenom;
    }
    public function setEmail($email)
    {
        $this->email=$email;
    }
    public function setMotDePasse($mdp)
    {
        $this->motDePasse=$mdp;
    }

    public function getRoles()
    {
        // TODO: Implement getRoles() method.
    }

    public function getPassword()
    {
        // TODO: Implement getPassword() method.
    }

    public function getSalt()
    {
        // TODO: Implement getSalt() method.
    }

    public function getUsername()
    {
        // TODO: Implement getUsername() method.
    }

    public function eraseCredentials()
    {
        // TODO: Implement eraseCredentials() method.
    }
}
