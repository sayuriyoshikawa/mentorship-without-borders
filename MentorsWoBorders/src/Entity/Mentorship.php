<?php

namespace App\Entity;

use App\Repository\MentorshipRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=MentorshipRepository::class)
 */
class Mentorship
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=2000, nullable=true)
     */
    public $goal;

    
    /**
     
    * @ORM\OneToOne(targetEntity=Mentee::class)
    */
    public $fk_mentee;

    /**
     * @ORM\ManyToOne(targetEntity=User::class)
     */
    public $fk_user;

    /**
     * @ORM\Column(type="string", length=2000, nullable=true )
     */
    public $achievements;

    /**
     * @ORM\Column(type="string", length=2000, nullable=true)
     */
    private $steps;

  

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getGoal(): ?string
    {
        return $this->goal;
    }

    public function setGoal(string $goal): self
    {
        $this->goal = $goal;

        return $this;
    }

    public function getFkMentor(): ?Mentor
    {
        return $this->fk_mentor;
    }

    public function setFkMentor(?Mentor $fk_mentor): self
    {
        $this->fk_mentor = $fk_mentor;

        return $this;
    }

    public function getFkMentee(): ?Mentee
    {
        return $this->fk_mentee;
    }

    public function setFkMentee(?Mentee $fk_mentee): self
    {
        $this->fk_mentee = $fk_mentee;

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

    public function getAchievements(): ?string
    {
        return $this->achievements;
    }

    public function setAchievements(?string $achievements): self
    {
        $this->achievements = $achievements;

        return $this;
    }

    public function getSteps(): ?string
    {
        return $this->steps;
    }

    public function setSteps(?string $steps): self
    {
        $this->steps = $steps;

        return $this;
    }

 
}
