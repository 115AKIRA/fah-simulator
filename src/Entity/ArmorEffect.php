<?php

namespace App\Entity;

use App\Repository\ArmorEffectRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ArmorEffectRepository::class)]
class ArmorEffect
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\ManyToOne(inversedBy: 'armorEffects')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Armor $id_armor = null;

    #[ORM\ManyToOne(inversedBy: 'armorEffects')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Effect $id_effect = null;

    #[ORM\Column]
    private ?int $value = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdArmor(): ?Armor
    {
        return $this->id_armor;
    }

    public function setIdArmor(?Armor $id_armor): static
    {
        $this->id_armor = $id_armor;

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
