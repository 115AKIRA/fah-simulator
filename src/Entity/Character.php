<?php

namespace App\Entity;

use App\Repository\CharacterRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CharacterRepository::class)]
#[ORM\Table(name: '`character`')]
class Character
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $image = null;

    #[ORM\Column(length: 255)]
    private ?string $back_image = null;

    #[ORM\Column]
    private ?int $attack = null;

    #[ORM\Column]
    private ?int $agility = null;

    #[ORM\ManyToOne(inversedBy: 'characters')]
    #[ORM\JoinColumn(nullable: false)]
    private ?ArmorRestrictType $armor_restrict_type = null;

    #[ORM\ManyToOne(inversedBy: 'characters')]
    #[ORM\JoinColumn(nullable: false)]
    private ?WeaponRestrictType $weapon_restrict_type = null;

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

    public function getImage(): ?string
    {
        return $this->image;
    }

    public function setImage(string $image): static
    {
        $this->image = $image;

        return $this;
    }

    public function getBackImage(): ?string
    {
        return $this->back_image;
    }

    public function setBackImage(string $back_image): static
    {
        $this->back_image = $back_image;

        return $this;
    }

    public function getAttack(): ?int
    {
        return $this->attack;
    }

    public function setAttack(int $attack): static
    {
        $this->attack = $attack;

        return $this;
    }

    public function getAgility(): ?int
    {
        return $this->agility;
    }

    public function setAgility(int $agility): static
    {
        $this->agility = $agility;

        return $this;
    }

    public function getArmorRestrictType(): ?ArmorRestrictType
    {
        return $this->armor_restrict_type;
    }

    public function setArmorRestrictType(?ArmorRestrictType $armor_restrict_type): static
    {
        $this->armor_restrict_type = $armor_restrict_type;

        return $this;
    }

    public function getWeaponRestrictType(): ?WeaponRestrictType
    {
        return $this->weapon_restrict_type;
    }

    public function setWeaponRestrictType(?WeaponRestrictType $weapon_restrict_type): static
    {
        $this->weapon_restrict_type = $weapon_restrict_type;

        return $this;
    }

}
