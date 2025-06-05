<?php

namespace App\Entity;

use App\Repository\ItemRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ItemRepository::class)]
class Item
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $name = null;

    #[ORM\Column(length: 255)]
    private ?string $description = null;

    #[ORM\Column(length: 255)]
    private ?string $icon = null;

    #[ORM\Column]
    private ?bool $is_consumed = null;

    #[ORM\Column]
    private ?int $success_rate = null;

    #[ORM\ManyToOne(inversedBy: 'items')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Scope $scope_id = null;

    #[ORM\ManyToOne(inversedBy: 'items')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Element $element_id = null;

    #[ORM\ManyToOne(inversedBy: 'items')]
    #[ORM\JoinColumn(nullable: false)]
    private ?DamageType $damage_type_id = null;

    #[ORM\ManyToOne(inversedBy: 'items')]
    #[ORM\JoinColumn(nullable: false)]
    private ?HitType $hit_type_id = null;

    #[ORM\Column(length: 255)]
    private ?string $formula = null;

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

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): static
    {
        $this->description = $description;

        return $this;
    }

    public function getIcon(): ?string
    {
        return $this->icon;
    }

    public function setIcon(string $icon): static
    {
        $this->icon = $icon;

        return $this;
    }

    public function isConsumed(): ?bool
    {
        return $this->is_consumed;
    }

    public function setIsConsumed(bool $is_consumed): static
    {
        $this->is_consumed = $is_consumed;

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

    public function getScopeId(): ?Scope
    {
        return $this->scope_id;
    }

    public function setScopeId(?Scope $scope_id): static
    {
        $this->scope_id = $scope_id;

        return $this;
    }

    public function getElementId(): ?Element
    {
        return $this->element_id;
    }

    public function setElementId(?Element $element_id): static
    {
        $this->element_id = $element_id;

        return $this;
    }

    public function getDamageTypeId(): ?DamageType
    {
        return $this->damage_type_id;
    }

    public function setDamageTypeId(?DamageType $damage_type_id): static
    {
        $this->damage_type_id = $damage_type_id;

        return $this;
    }

    public function getHitTypeId(): ?HitType
    {
        return $this->hit_type_id;
    }

    public function setHitTypeId(?HitType $hit_type_id): static
    {
        $this->hit_type_id = $hit_type_id;

        return $this;
    }

    public function getFormula(): ?string
    {
        return $this->formula;
    }

    public function setFormula(string $formula): static
    {
        $this->formula = $formula;

        return $this;
    }
}
