<?php

namespace App\Entity;

use App\Repository\SkillRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: SkillRepository::class)]
class Skill
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $name = null;

    #[ORM\Column]
    private ?bool $is_enemyOnly = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $description = null;

    #[ORM\ManyToOne]
    #[ORM\JoinColumn(nullable: false)]
    private ?scope $scope = null;

    #[ORM\ManyToOne]
    #[ORM\JoinColumn(nullable: false)]
    private ?occasion $occasion = null;

    #[ORM\ManyToOne]
    #[ORM\JoinColumn(nullable: false)]
    private ?element $element = null;

    #[ORM\ManyToOne]
    #[ORM\JoinColumn(nullable: false)]
    private ?damagetype $damage_type = null;

    #[ORM\ManyToOne]
    #[ORM\JoinColumn(nullable: false)]
    private ?hittype $hit_type = null;

    #[ORM\Column]
    private ?int $success_rate = null;

    #[ORM\Column]
    private ?int $repeat_action = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): static
    {
        $this->name = $name;

        return $this;
    }

    public function isEnemyOnly(): ?bool
    {
        return $this->is_enemyOnly;
    }

    public function setIsEnemyOnly(bool $is_enemyOnly): static
    {
        $this->is_enemyOnly = $is_enemyOnly;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): static
    {
        $this->description = $description;

        return $this;
    }

    public function getScope(): ?scope
    {
        return $this->scope;
    }

    public function setScope(?scope $scope): static
    {
        $this->scope = $scope;

        return $this;
    }

    public function getOccasion(): ?occasion
    {
        return $this->occasion;
    }

    public function setOccasion(?occasion $occasion): static
    {
        $this->occasion = $occasion;

        return $this;
    }

    public function getElement(): ?element
    {
        return $this->element;
    }

    public function setElement(?element $element): static
    {
        $this->element = $element;

        return $this;
    }

    public function getDamageType(): ?damagetype
    {
        return $this->damage_type;
    }

    public function setDamageType(?damagetype $damage_type): static
    {
        $this->damage_type = $damage_type;

        return $this;
    }

    public function getHitType(): ?hittype
    {
        return $this->hit_type;
    }

    public function setHitType(?hittype $hit_type): static
    {
        $this->hit_type = $hit_type;

        return $this;
    }

    public function getSuccessRate(): ?int
    {
        return $this->success_rate;
    }

    public function setSuccessRate(int $success_rate): static
    {
        $this->success_rate = $success_rate;

        return $this;
    }

    public function getRepeatAction(): ?int
    {
        return $this->repeat_action;
    }

    public function setRepeatAction(int $repeat_action): static
    {
        $this->repeat_action = $repeat_action;

        return $this;
    }

}
