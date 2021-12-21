<?php

namespace App\Entity;

use App\Repository\MentorRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=MentorRepository::class)
 */
class Mentor
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     */
    private $capacity;


    /**
     * @ORM\Column(type="string", length=255)
     */
    private $country;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $skills;

    /**
     * @ORM\Column(type="string", length=500)
     */
    public $preofession_description;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $contact;

    /**
     * @ORM\Column(type="string", length=500)
     */
    public $mentors_descripton;

    /**
     * @ORM\OneToOne(targetEntity=User::class, cascade={"persist", "remove"})
     */
    public $fk_user;
    

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $profession;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $picture;

    /**
     * @ORM\OneToMany(targetEntity=Mentorship::class, mappedBy="fk_mentor")
     */
    private $fk_mentorship;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $username;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $languageone;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $languagetwo;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $languagethree;

    public function __construct()
    {
        $this->fk_mentorship = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCapacity(): ?int
    {
        return $this->capacity;
    }

    public function setCapacity(int $capacity): self
    {
        $this->capacity = $capacity;

        return $this;
    }





    public function getCountry(): ?string
    {
        return $this->country;
    }

    public function setCountry(string $country): self
    {
        $this->country = $country;

        return $this;
    }

    public function getSkills(): ?string
    {
        return $this->skills;
    }

    public function setSkills(string $skills): self
    {
        $this->skills = $skills;

        return $this;
    }

    public function getPreofessionDescription(): ?string
    {
        return $this->preofession_description;
    }

    public function setPreofessionDescription(string $preofession_description): self
    {
        $this->preofession_description = $preofession_description;

        return $this;
    }

    public function getContact(): ?string
    {
        return $this->contact;
    }

    public function setContact(string $contact): self
    {
        $this->contact = $contact;

        return $this;
    }

    public function getMentorsDescripton(): ?string
    {
        return $this->mentors_descripton;
    }

    public function setMentorsDescripton(string $mentors_descripton): self
    {
        $this->mentors_descripton = $mentors_descripton;

        return $this;
    }

    public function getFkUser(): ?User
    {
        return $this->fk_user;
    }

    public function setFkUser(?User $fk_user): self
    {
        $this->fk_user = $fk_user;

        return $this;
    }

    public function getProfession(): ?string
    {
        return $this->profession;
    }

    public function setProfession(string $profession): self
    {
        $this->profession = $profession;

        return $this;
    }

    public function getPicture(): ?string
    {
        return $this->picture;
    }

    public function setPicture(?string $picture): self
    {
        $this->picture = $picture;

        return $this;
    }

    /**
     * @return Collection|Mentorship[]
     */
    public function getFkMentorship(): Collection
    {
        return $this->fk_mentorship;
    }

    public function addFkMentorship(Mentorship $fkMentorship): self
    {
        if (!$this->fk_mentorship->contains($fkMentorship)) {
            $this->fk_mentorship[] = $fkMentorship;
            $fkMentorship->setFkMentor($this);
        }

        return $this;
    }

    public function removeFkMentorship(Mentorship $fkMentorship): self
    {
        if ($this->fk_mentorship->removeElement($fkMentorship)) {
            // set the owning side to null (unless already changed)
            if ($fkMentorship->getFkMentor() === $this) {
                $fkMentorship->setFkMentor(null);
            }
        }

        return $this;
    }

    public function getUsername(): ?string
    {
        return $this->username;
    }

    public function setUsername(string $username): self
    {
        $this->username = $username;

        return $this;
    }

    public function getLanguageone(): ?string
    {
        return $this->languageone;
    }

    public function setLanguageone(string $languageone): self
    {
        $this->languageone = $languageone;

        return $this;
    }

    public function getLanguagetwo(): ?string
    {
        return $this->languagetwo;
    }

    public function setLanguagetwo(?string $languagetwo): self
    {
        $this->languagetwo = $languagetwo;

        return $this;
    }

    public function getLanguagethree(): ?string
    {
        return $this->languagethree;
    }

    public function setLanguagethree(?string $languagethree): self
    {
        $this->languagethree = $languagethree;

        return $this;
    }
}
