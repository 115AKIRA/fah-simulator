<?php

namespace App\Entity;

use App\Repository\ArmorRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ArmorRepository::class)]
class Armor
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

    #[ORM\ManyToOne]
    #[ORM\JoinColumn(nullable: false)]
    private ?armortype $armor_type = null;

    #[ORM\Column]
    private ?int $blunt_res = null;

    #[ORM\Column]
    private ?int $slashing_res = null;

    #[ORM\Column]
    private ?int $piercing_res = null;

    #[ORM\Column]
    private ?int $fire_res = null;

    #[ORM\Column]
    private ?int $otherworldly_res = null;

    #[ORM\ManyToOne(inversedBy: 'armors')]
    #[ORM\JoinColumn(nullable: false)]
    private ?equipmenttype $equipment_type = null;

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

    public function getArmorType(): ?armortype
    {
        return $this->armor_type;
    }

    public function setArmorType(?armortype $armor_type): static
    {
        $this->armor_type = $armor_type;

        return $this;
    }

    public function getBluntRes(): ?int
    {
        return $this->blunt_res;
    }

    public function setBluntRes(int $blunt_res): static
    {
        $this->blunt_res = $blunt_res;

        return $this;
    }

    public function getSlashingRes(): ?int
    {
        return $this->slashing_res;
    }

    public function setSlashingRes(int $slashing_res): static
    {
        $this->slashing_res = $slashing_res;

        return $this;
    }

    public function getPiercingRes(): ?int
    {
        return $this->piercing_res;
    }

    public function setPiercingRes(int $piercing_res): static
    {
        $this->piercing_res = $piercing_res;

        return $this;
    }

    public function getFireRes(): ?int
    {
        return $this->fire_res;
    }

    public function setFireRes(int $fire_res): static
    {
        $this->fire_res = $fire_res;

        return $this;
    }

    public function getOtherworldlyRes(): ?int
    {
        return $this->otherworldly_res;
    }

    public function setOtherworldlyRes(int $otherworldly_res): static
    {
        $this->otherworldly_res = $otherworldly_res;

        return $this;
    }

    public function getEquipmentType(): ?equipmenttype
    {
        return $this->equipment_type;
    }

    public function setEquipmentType(?equipmenttype $equipment_type): static
    {
        $this->equipment_type = $equipment_type;

        return $this;
    }
}
