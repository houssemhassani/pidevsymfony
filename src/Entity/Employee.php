<?php

namespace App\Entity;

use App\Entity\Service;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\PasswordAuthenticatedUserInterface;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Serializer\Annotation\Groups;

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
     * @Groups({"campaign_get", "user_logged"})
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
    private $roles = [];

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
     *  @Assert\Regex(
     *     pattern     = "/^[0-1]+[0-9]+[0-9]+[0-9]+[0-9]+[0-9]+[0-9]+[0-9]$/i",
     *     message="premier caractère soit 1 ou 0")
     *
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
     * @var \Equipe
     *
     * @ORM\ManyToOne(targetEntity="Equipe")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="equipe_id", referencedColumnName="id_equipe")
     * })
     * @Assert\NotBlank(message="Ce champs est obligatoire")
     */
    private $equipe;

    /**
     * @var \Service
     *
     * @ORM\ManyToOne(targetEntity="Service")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="service_id", referencedColumnName="id")
     * })
     * @Assert\NotBlank(message="Ce champs est obligatoire")
     */
    private $service;
    /**
     * @Assert\NotIdenticalTo('name'='password')
     */
    private $confirmMotDePasse;
    public function addService(\App\Entity\Service $service)
    {
        $this->service[] = $service;

        return $this;
    }
    /**
 * @return mixed
 */public function getConfirmMotDePasse()
{
    return $this->confirmMotDePasse;
}
public function setConfirmMotDePasse($confirmmotdepasse)
{
    $this->confirmMotDePasse=$confirmmotdepasse;
}

    public function removeService(\App\Entity\Service $service)
    {
        $this->service->removeElement($service);
    }
    public function addEquipe(\App\Entity\Equipe $equipe)
    {
        $this->equipe[] = $equipe;

        return $this;
    }


    public function removeEquipe(\App\Entity\Equipe $equipe)
    {
        $this->equipe->removeElement($equipe);
    }
    public function setService($service)
    {
        $this->service=$service;
    }
    public $nomService;
    public $nomEquipe;
    public function getEquipe()
    {
        return $this->equipe;
    }
    public function getService()
    {
        return $this->service;
    }
 
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

    public function getRole()
    {
        return $this->role;
    }
    /**
     * @see UserInterface
     */
    public function getRoles(): array
    {
        $roles = $this->roles;
        // guarantee every user at least has ROLE_USER
        $roles[] = 'ROLE_USER';

        return array_unique($roles);
    }

    public function setRoles(array $roles): self
    {
        $this->roles = $roles;

        return $this;
    }
    public function setEquipe($equipe)
    {
        $this->equipe=$equipe;
    }
    /**
     * @see PasswordAuthenticatedUserInterface
     */
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
    public function setRole($role)
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
    /**
 * Constructor
 */
    public function __construct()
    {
        $this->service = new ArrayCollection();
        $this->equipe=new ArrayCollection();
    }
    public function getUserIdentifier(): string
    {
        return (string) $this->cin;
    }
}
