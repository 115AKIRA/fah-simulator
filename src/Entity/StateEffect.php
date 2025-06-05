<?php

namespace App\Entity;

use App\Repository\StateEffectRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: StateEffectRepository::class)]
class StateEffect
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\ManyToOne(inversedBy: 'stateEffects')]
    #[ORM\JoinColumn(nullable: false)]
    private ?State $id_state = null;

    #[ORM\ManyToOne(inversedBy: 'stateEffects')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Effect $id_effect = null;

    #[ORM\Column]
    private ?int $value = null;

    public function __construct()
    {
        $this->setValue(0);
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdState(): ?State
    {
        return $this->id_state;
    }

    public function setIdState(?State $id_state): static
    {
        $this->id_state = $id_state;

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
