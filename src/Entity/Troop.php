<?php

namespace App\Entity;

use App\Repository\TroopRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: TroopRepository::class)]
class Troop
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $name = null;

    #[ORM\Column(length: 255)]
    private ?string $image = null;

    #[ORM\Column]
    private ?bool $is_dieAtEndOfTurn = null;

    #[ORM\Column]
    private ?int $torso_threshhold = null;

    /**
     * @var Collection<int, Limb>
     */
    #[ORM\ManyToMany(targetEntity: Limb::class, mappedBy: 'troop')]
    private Collection $limbs;

    public function __construct()
    {
        $this->limbs = new ArrayCollection();
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

    public function getImage(): ?string
    {
        return $this->image;
    }

    public function setImage(string $image): static
    {
        $this->image = $image;

        return $this;
    }

    public function isDieAtEndOfTurn(): ?bool
    {
        return $this->is_dieAtEndOfTurn;
    }

    public function setIsDieAtEndOfTurn(bool $is_dieAtEndOfTurn): static
    {
        $this->is_dieAtEndOfTurn = $is_dieAtEndOfTurn;

        return $this;
    }

    public function getTorsoThreshhold(): ?int
    {
        return $this->torso_threshhold;
    }

    public function setTorsoThreshhold(int $torso_threshhold): static
    {
        $this->torso_threshhold = $torso_threshhold;

        return $this;
    }

    /**
     * @return Collection<int, Limb>
     */
    public function getLimbs(): Collection
    {
        return $this->limbs;
    }

    public function addLimb(Limb $limb): static
    {
        if (!$this->limbs->contains($limb)) {
            $this->limbs->add($limb);
            $limb->addTroop($this);
        }

        return $this;
    }

    public function removeLimb(Limb $limb): static
    {
        if ($this->limbs->removeElement($limb)) {
            $limb->removeTroop($this);
        }

        return $this;
    }
}
