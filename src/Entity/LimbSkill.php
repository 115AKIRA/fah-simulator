<?php

namespace App\Entity;

use App\Repository\LimbSkillRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: LimbSkillRepository::class)]
class LimbSkill
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\ManyToOne(inversedBy: 'limbSkills')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Limb $id_limb = null;

    #[ORM\ManyToOne(inversedBy: 'limbSkills')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Skill $id_skill = null;

    #[ORM\Column]
    private ?int $rating = null;

    #[ORM\Column(length: 255)]
    private ?string $skill_trigger = null;

    #[ORM\Column]
    private ?int $skill_occurence = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdLimb(): ?Limb
    {
        return $this->id_limb;
    }

    public function setIdLimb(?Limb $id_limb): static
    {
        $this->id_limb = $id_limb;

        return $this;
    }

    public function getIdSkill(): ?Skill
    {
        return $this->id_skill;
    }

    public function setIdSkill(?Skill $id_skill): static
    {
        $this->id_skill = $id_skill;

        return $this;
    }

    public function getRating(): ?int
    {
        return $this->rating;
    }

    public function setRating(int $rating): static
    {
        $this->rating = $rating;

        return $this;
    }

    public function getSkillTrigger(): ?string
    {
        return $this->skill_trigger;
    }

    public function setSkillTrigger(string $skill_trigger): static
    {
        $this->skill_trigger = $skill_trigger;

        return $this;
    }

    public function getSkillOccurence(): ?int
    {
        return $this->skill_occurence;
    }

    public function setSkillOccurence(int $skill_occurence): static
    {
        $this->skill_occurence = $skill_occurence;

        return $this;
    }
}
