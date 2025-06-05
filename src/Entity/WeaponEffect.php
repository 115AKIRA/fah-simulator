<?php

namespace App\Entity;

use App\Repository\WeaponEffectRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: WeaponEffectRepository::class)]
class WeaponEffect
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\ManyToOne(inversedBy: 'weaponEffects')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Weapon $id_weapon = null;

    #[ORM\ManyToOne(inversedBy: 'weaponEffects')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Effect $id_effect = null;

    #[ORM\Column]
    private ?int $value = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdWeapon(): ?Weapon
    {
        return $this->id_weapon;
    }

    public function setIdWeapon(?Weapon $id_weapon): static
    {
        $this->id_weapon = $id_weapon;

        return $this;
    }

    public function getIdEffect(): ?Effect
    {
        return $this->id_effect;
    }

    public function setIdEffect(?Effect $id_effect): static
    {
        $this->id_effect = $id_effect;

        return $this;
    }

    public function getValue(): ?int
    {
        return $this->value;
    }

    public function setValue(int $value): static
    {
        $this->value = $value;

        return $this;
    }
}
