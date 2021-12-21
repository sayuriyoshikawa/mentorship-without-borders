<?php

namespace App\Entity;

use App\Repository\UserRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Security\Core\User\PasswordAuthenticatedUserInterface;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass=UserRepository::class)
 * @UniqueEntity(fields={"email"}, message="There is already an account with this email")
 */
class User implements UserInterface, PasswordAuthenticatedUserInterface
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=180, unique=true)
     */
    private $email;

    /**
     * @ORM\Column(type="json")
     */
    private $roles = [];

    /**
     * @var string The hashed password
     * @ORM\Column(type="string")
     */
    private $password;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $first_name;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $last_name;

    /**
     * @ORM\Column(type="date")
     * @Assert\LessThanOrEqual("-18 years")
     */
    private $birthday;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $mentor_mantee;

   

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $approved;

    /**
     * @ORM\OneToOne(targetEntity=Mentee::class, mappedBy="fk_user", cascade={"persist", "remove"})
     */
    private $fk_mentee;

    /**
     * @ORM\OneToMany(targetEntity=Mentorship::class, mappedBy="fk_user")
     */
    private $mentorships;

    public function __construct()
    {
        $this->mentorships = new ArrayCollection();
    }

  

  
    
    public function getId(): ?int
    {
        return $this->id;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    /**
     * A visual identifier that represents this user.
     *
     * @see UserInterface
     */
    public function getUserIdentifier(): string
    {
        return (string) $this->email;
    }

    /**
     * @deprecated since Symfony 5.3, use getUserIdentifier instead
     */
    public function getUsername(): string
    {
        return (string) $this->email;
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

    /**
     * @see PasswordAuthenticatedUserInterface
     */
    public function getPassword(): string
    {
        return $this->password;
    }

    public function setPassword(string $password): self
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Returning a salt is only needed, if you are not using a modern
     * hashing algorithm (e.g. bcrypt or sodium) in your security.yaml.
     *
     * @see UserInterface
     */
    public function getSalt(): ?string
    {
        return null;
    }

    /**
     * @see UserInterface
     */
    public function eraseCredentials()
    {
        // If you store any temporary, sensitive data on the user, clear it here
        // $this->plainPassword = null;
    }

    public function getFirstName(): ?string
    {
        return $this->first_name;
    }

    public function setFirstName(string $first_name): self
    {
        $this->first_name = $first_name;

        return $this;
    }

    public function getLastName(): ?string
    {
        return $this->last_name;
    }

    public function setLastName(string $last_name): self
    {
        $this->last_name = $last_name;

        return $this;
    }

    public function getBirthday(): ?\DateTimeInterface
    {
        return $this->birthday;
    }

    public function setBirthday(\DateTimeInterface $birthday): self
    {
        $this->birthday = $birthday;

        return $this;
    }

    public function getMentorMantee(): ?string
    {
        return $this->mentor_mantee;
    }

    public function setMentorMantee(string $mentor_mantee): self
    {
        $this->mentor_mantee = $mentor_mantee;

        return $this;
    }

   

    public function getApproved(): ?string
    {
        return $this->approved;
    }

    public function setApproved(?string $approved): self
    {
        $this->approved = $approved;

        return $this;
    }

    public function getFkMentee(): ?Mentee
    {
        return $this->fk_mentee;
    }

    public function setFkMentee(?Mentee $fk_mentee): self
    {
        // unset the owning side of the relation if necessary
        if ($fk_mentee === null && $this->fk_mentee !== null) {
            $this->fk_mentee->setFkUser(null);
        }

        // set the owning side of the relation if necessary
        if ($fk_mentee !== null && $fk_mentee->getFkUser() !== $this) {
            $fk_mentee->setFkUser($this);
        }

        $this->fk_mentee = $fk_mentee;

        return $this;
    }

    /**
     * @return Collection|Mentorship[]
     */
    public function getMentorships(): Collection
    {
        return $this->mentorships;
    }

    public function addMentorship(Mentorship $mentorship): self
    {
        if (!$this->mentorships->contains($mentorship)) {
            $this->mentorships[] = $mentorship;
            $mentorship->setFkUser($this);
        }

        return $this;
    }

    public function removeMentorship(Mentorship $mentorship): self
    {
        if ($this->mentorships->removeElement($mentorship)) {
            // set the owning side to null (unless already changed)
            if ($mentorship->getFkUser() === $this) {
                $mentorship->setFkUser(null);
            }
        }

        return $this;
    }



    

  

}
