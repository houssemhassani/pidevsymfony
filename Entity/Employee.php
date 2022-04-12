<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Employee
 *
 * @ORM\Table(name="employee", uniqueConstraints={@ORM\UniqueConstraint(name="cin", columns={"cin"})}, indexes={@ORM\Index(name="equipe_id", columns={"equipe_id"}), @ORM\Index(name="service_id", columns={"service_id"})})
 * @ORM\Entity
 */
class Employee implements UserInterface
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
     *  @Assert\NotBlank(message="Ce champs ne doit pas être vide")
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
     * @var string|null
     *
     * @ORM\Column(name="photo", type="string", length=255, nullable=true, options={"default"="NULL"})
     */
    private $photo = 'NULL';

    /**
     * @var int
     *
     * @ORM\Column(name="role", type="integer", nullable=false)
     */
    private $role;

    /**
     * @var string
     *
     * @ORM\Column(name="mot_de_passe", type="string", length=255, nullable=false)
     * @Assert\NotBlank(message="Ce champs ne doit pas être vide")
     * @Assert\Length(min=6,minMessage="Votre Mot De Passe doit être supèrieur à 6 caractéres")
     */
    private $motDePasse;

    /**
     * @var \Equipe
     *
     * @ORM\ManyToOne(targetEntity="Equipe")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="equipe_id", referencedColumnName="id_equipe")
     * })
     */
    private $equipe;

    /**
     * @var \Service
     *
     * @ORM\ManyToOne(targetEntity="Service")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="service_id", referencedColumnName="id")
     * })
     */
    private $service;
    public $nomService;
    public $nomEquipe;
    public function getId()
    {
        return $this->id;
    }
    public function getUserName()
    {
        return $this->cin;
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
    public function getRoles()
    {
        return $this->role;
    }
    public function getPassword()
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
    
    public function getService()
    {
        return $this->service;
    }
    public function getEquipe()
    {
        return  $this->equipe;
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
    public function setUsername($cin)
    {
        $this->cin=$cin;
    }
    public function setCin($cin)
    {
        $this->cin=$cin;
    }
    public function setPrenom($prenom)
    {
        $this->prenom=$prenom;
    }
    public function setRoles($role)
    {
        $this->role=$role;
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
