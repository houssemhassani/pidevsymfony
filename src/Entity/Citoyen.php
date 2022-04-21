<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Citoyen
 *
 * @ORM\Table(name="citoyen", uniqueConstraints={@ORM\UniqueConstraint(name="cin", columns={"cin"})})
 * @ORM\Entity(repositoryClass="App\Repository\CitoyenRepository")
 *
 */
class Citoyen implements UserInterface
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
     * @Assert\Length(min=3,minMessage="Votre Prenom doit être supèrieur à 3 caractéres")
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
     */
    private $cin;

    /**
     * @var int
     *
     * @ORM\Column(name="num_tel", type="bigint", nullable=false)
     *  @Assert\NotBlank(message="Ce champs ne doit pas être vide")
     * @Assert\Length(min=8,max=8,minMessage="CIN doit être égale à 8 chiffres numériques")
     */
    private $numTel;

    /**
     * @var string
     *
     * @ORM\Column(name="ville", type="string", length=255, nullable=false)
     *  @Assert\NotBlank(message="Ce champs ne doit pas être vide")
     */
    private $ville;

    /**
     * @var string
     *
     * @ORM\Column(name="photo", type="string", length=255, nullable=false)
     */
    private $photo;
    /**
     * @var string The hashed password
     *
     * @ORM\Column(name="mot_de_passe", type="string", length=255, nullable=false)
     * @Assert\NotBlank(message="Ce champs est obligatoire")
     *  @Assert\Regex(
     *  pattern="/^(?=.{8,}$)(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9]).*$/",
     *  message="Votre mot de passe doit contenir au moins 1 chiffre, 1 majuscule, 1 minuscule et avoir une longueur d'au moins 8 caractères."
     * )
     */

    private $motDePasse;

    /**
     * @var bool
     *
     * @ORM\Column(name="email_confirmed", type="boolean", nullable=false)
     */
    private $emailConfirmed;

    private $confirmMotDePasse;
    private $roles;

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
    public function getUserName()
    {
        return $this->nom." ".$this->prenom;
    }
    public function getCin()
    {
        return $this->cin;
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


    /**
     * @see UserInterface
     */
    public function getRoles(): array
    {
        $roles = $this->roles;
        // guarantee every user at least has ROLE_USER
        $roles[] = 'ROLE_EMPLOYEE';

        return array_unique($roles);
    }

    /**
     * @return bool
     */
    public function isEmailConfirmed(): bool
    {
        return $this->emailConfirmed;
    }

    /**
     * @param bool $emailConfirmed
     */
    public function setEmailConfirmed(bool $emailConfirmed): void
    {
        $this->emailConfirmed = $emailConfirmed;
    }

    /**
     * @return int
     */
    public function getNumTel(): ?int
    {
        return $this->numTel;
    }

    /**
     * @param int $numTel
     */
    public function setNumTel(int $numTel): void
    {
        $this->numTel = $numTel;
    }

    /**
     * @return string
     */
    public function getVille(): string
    {
        return $this->ville;
    }

    /**
     * @param string $ville
     */
    public function setVille(string $ville): void
    {
        $this->ville = $ville;
    }




    public function getPassword() :string
    {
        return $this->motDePasse;
    }
    public function getMotDePasse()
    {
        return $this->motDePasse;
    }
    public function getPhoto()
    {
        return $this->photo;
    }
    public function getSalt()
    {
        // you *may* need a real salt depending on your encoder
        // see section on salt below
        return null;
    }
    public function setNom($nom)
    {
        $this->nom=$nom;
    }
    public function setPhoto($photo)
    {
        $this->photo=$photo;
    }
    public function setUsername($email)
    {
        $this->email=$email;
    }
    public function setCin($cin)
    {
        $this->cin=$cin;
    }
    public function setPrenom($prenom)
    {
        $this->prenom=$prenom;
    }


    public function setEmail($email)
    {
        $this->email=$email;
    }
    public function setPassword($motdepasse)
    {
        $this->motDePasse=$motdepasse;
    }
    public function setMotDePasse($motdepasse)
    {
        $this->motDePasse=$motdepasse;
    }
    public function eraseCredentials()
    {
    }
    /** @see \Serializable::serialize() */
    public function serialize()
    {
        return serialize(array(
            $this->id,
            $this->email,
            $this->motDePasse,
            // see section on salt below
            // $this->salt,
        ));
    }
    /** @see \Serializable::unserialize() */
    public function unserialize($serialized)
    {
        list(
            $this->id,
            $this->email,
            $this->motDePasse,
            // see section on salt below
            // $this->salt
            ) = unserialize($serialized, array('allowed_classes' => false));
    }
    /**
     * Constructor
     */
    public function __construct()
    {

    }
    public function getUserIdentifier(): string
    {
        return (string) $this->cin;
    }

    public function getEmailConfirmed(): ?bool
    {
        return $this->emailConfirmed;
    }
}
