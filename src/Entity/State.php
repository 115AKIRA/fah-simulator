<?php

namespace App\Entity;

use App\Repository\StateRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: StateRepository::class)]
class State
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $name = null;

    #[ORM\Column(length: 255)]
    private ?string $icon = null;

    #[ORM\Column(length: 255)]
    private ?string $description = null;

    #[ORM\Column(nullable: true)]
    private ?int $min_duration = null;

    #[ORM\Column(nullable: true)]
    private ?int $max_duration = null;

    /**
     * @var Collection<int, StateEffect>
     */
    #[ORM\OneToMany(targetEntity: StateEffect::class, mappedBy: 'id_state', orphanRemoval: true)]
    private Collection $stateEffects;

    public function __construct()
    {
        $this->stateEffects = new ArrayCollection();
    }

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

    public function getIcon(): ?string
    {
        return $this->icon;
    }

    public function setIcon(string $icon): static
    {
        $this->icon = $icon;

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

    public function getMinDuration(): ?int
    {
        return $this->min_duration;
    }

    public function setMinDuration(?int $min_duration): static
    {
        $this->min_duration = $min_duration;

        return $this;
    }

    public function getMaxDuration(): ?int
    {
        return $this->max_duration;
    }

    public function setMaxDuration(?int $max_duration): static
    {
        $this->max_duration = $max_duration;

        return $this;
    }

    /**
     * @return Collection<int, StateEffect>
     */
    public function getStateEffects(): Collection
    {
        return $this->stateEffects;
    }

    public function addStateEffect(StateEffect $stateEffect): static
    {
        if (!$this->stateEffects->contains($stateEffect)) {
            $this->stateEffects->add($stateEffect);
            $stateEffect->setIdState($this);
        }

        return $this;
    }

    public function removeStateEffect(StateEffect $stateEffect): static
    {
        if ($this->stateEffects->removeElement($stateEffect)) {
            // set the owning side to null (unless already changed)
            if ($stateEffect->getIdState() === $this) {
                $stateEffect->setIdState(null);
            }
        }

        return $this;
    }

}
