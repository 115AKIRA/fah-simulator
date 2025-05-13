<?php

namespace App\Entity;

use App\Repository\EffectRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: EffectRepository::class)]
class Effect
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $name = null;

    #[ORM\Column(length: 255)]
    private ?string $description = null;

    #[ORM\Column]
    private ?bool $is_Dot = null;

    #[ORM\Column(nullable: true)]
    private ?int $value = null;

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

    public function isDot(): ?bool
    {
        return $this->is_Dot;
    }

    public function setIsDot(bool $is_Dot): static
    {
        $this->is_Dot = $is_Dot;

        return $this;
    }

    public function getValue(): ?int
    {
        return $this->value;
    }

    public function setValue(?int $value): static
    {
        $this->value = $value;

        return $this;
    }
}
