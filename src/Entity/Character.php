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

    #[ORM\Column]
    private ?bool $is_armorRestrict = null;

    #[ORM\Column]
    private ?bool $is_weaponRestrict = null;

    #[ORM\Column(length: 255)]
    private ?string $image = null;

    #[ORM\Column(length: 255)]
    private ?string $back_image = null;

    #[ORM\Column]
    private ?int $attack = null;

    #[ORM\Column]
    private ?int $agility = null;

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

    public function isArmorRestrict(): ?bool
    {
        return $this->is_armorRestrict;
    }

    public function setIsArmorRestrict(bool $is_armorRestrict): static
    {
        $this->is_armorRestrict = $is_armorRestrict;

        return $this;
    }

    public function isWeaponRestrict(): ?bool
    {
        return $this->is_weaponRestrict;
    }

    public function setIsWeaponRestrict(bool $is_weaponRestrict): static
    {
        $this->is_weaponRestrict = $is_weaponRestrict;

        return $this;
    }
}
