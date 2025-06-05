<?php

namespace App\Entity;

use App\Repository\AccessoryRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: AccessoryRepository::class)]
class Accessory
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $name = null;

    #[ORM\Column(length: 255)]
    private ?string $description = null;

    #[ORM\Column(length: 255)]
    private ?string $icon = null;

    /**
     * @var Collection<int, AccessoryEffect>
     */
    #[ORM\OneToMany(targetEntity: AccessoryEffect::class, mappedBy: 'id_accessory', orphanRemoval: true)]
    private Collection $accessoryEffects;

    public function __construct()
    {
        $this->accessoryEffects = new ArrayCollection();
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

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): static
    {
        $this->description = $description;

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

    /**
     * @return Collection<int, AccessoryEffect>
     */
    public function getAccessoryEffects(): Collection
    {
        return $this->accessoryEffects;
    }

    public function addAccessoryEffect(AccessoryEffect $accessoryEffect): static
    {
        if (!$this->accessoryEffects->contains($accessoryEffect)) {
            $this->accessoryEffects->add($accessoryEffect);
            $accessoryEffect->setIdAccessory($this);
        }

        return $this;
    }

    public function removeAccessoryEffect(AccessoryEffect $accessoryEffect): static
    {
        if ($this->accessoryEffects->removeElement($accessoryEffect)) {
            // set the owning side to null (unless already changed)
            if ($accessoryEffect->getIdAccessory() === $this) {
                $accessoryEffect->setIdAccessory(null);
            }
        }

        return $this;
    }
}
