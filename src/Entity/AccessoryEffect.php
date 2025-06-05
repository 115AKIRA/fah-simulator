<?php

namespace App\Entity;

use App\Repository\AccessoryEffectRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: AccessoryEffectRepository::class)]
class AccessoryEffect
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\ManyToOne(inversedBy: 'accessoryEffects')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Accessory $id_accessory = null;

    #[ORM\ManyToOne(inversedBy: 'accessoryEffects')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Effect $id_effect = null;

    #[ORM\Column]
    private ?int $value = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdAccessory(): ?Accessory
    {
        return $this->id_accessory;
    }

    public function setIdAccessory(?Accessory $id_accessory): static
    {
        $this->id_accessory = $id_accessory;

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
