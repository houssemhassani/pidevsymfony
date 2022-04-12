<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Citoyen
 *
 * @ORM\Table(name="citoyen", uniqueConstraints={@ORM\UniqueConstraint(name="cin", columns={"cin"})})
 * @ORM\Entity
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
     * @var string
     *
     * @ORM\Column(name="mot_de_passe", type="string", length=255, nullable=false)
     * @Assert\NotBlank(message="Ce champs ne doit pas être vide")
     * @Assert\Length(min=6,minMessage="Votre Mot De Passe doit être supèrieur à 6 caractéres")
     */
    private $motDePasse;

    /**
     * @var bool
     *
     * @ORM\Column(name="email_confirmed", type="boolean", nullable=false)
     */
    private $emailConfirmed;
    public function getRoles()
    {
        return null;
    }
    public function getPassword()
    {
        return $this->motDePasse;
    }
    public function getUserName()
    {
        return $this->cin;
    }
    public function getId()
    {
        return $this->id;
    }
    public function getNom()
    {
        return $this->nom;
    }
    public function setNom($nom)
    {
        $this->nom=$nom;
    }
    public function getPrenom()
    {
        return $this->prenom;
    }
    public function setPrenom($prenom)
    {
        return $this->prenom;
    }
    public function getEmail()
    {
        return $this->email;
    }
    public function setEmail($email)
    {
        $this->email=$email;
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
    public function setMotDePasse($mdp)
    {
        $this->motDePasse=$mdp;
    }
    public function getEmailConfirmed()
    {
        return $this->emailConfirmed;
    }
    public function setEmailConfirmed($em)
    {
        $this->emailConfirmed=$em;
    }
    public function getNumTel()
    {
        return $this->numTel;
    }
    public function setNumTel($num)
    {
        $this->numTel=$num;
    }
    public function getVille()
    {
        return $this->ville;
    }
    public function setVille($ville)
    {
        $this->ville=$ville;
    }
    public function getPhoto()
    {
        return $this->photo;
    }
    public function setPhoto($photo)
    {
        $this->photo=$photo;
    }
    public function getSalt()
    {
        // you *may* need a real salt depending on your encoder
        // see section on salt below
        return null;
    }
    public function setUsername($cin)
    {
        $this->cin=$cin;
    }
    public function setRoles($role)
    {
        $role=0;
    }
    public function setPassword($motdepasse)
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
             $this->cin,
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
            $this->cin,
            $this->motDePasse,
            // see section on salt below
            // $this->salt
        ) = unserialize($serialized, array('allowed_classes' => false));
    }
}
