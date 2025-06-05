<?php

namespace App\Entity;

use App\Repository\LimbEffectRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: LimbEffectRepository::class)]
class LimbEffect
{   
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null; 

    #[ORM\ManyToOne(inversedBy: 'limbEffects')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Limb $id_limb = null;

    #[ORM\ManyToOne(inversedBy: 'limbEffects')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Effect $id_effect = null;

    #[ORM\Column]
    private ?int $value = null;

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
