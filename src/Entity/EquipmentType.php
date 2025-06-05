<?php

namespace App\Entity;

use App\Repository\EquipmentTypeRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: EquipmentTypeRepository::class)]
class EquipmentType
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $name = null;

    /**
     * @var Collection<int, Armor>
     */
    #[ORM\OneToMany(targetEntity: Armor::class, mappedBy: 'equipment_type', orphanRemoval: true)]
    private Collection $armors;

    public function __construct()
    {
        $this->armors = new ArrayCollection();
    }

    public function __toString(): string
    {
        return $this->getName();
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

    /**
     * @return Collection<int, Armor>
     */
    public function getArmors(): Collection
    {
        return $this->armors;
    }

    public function addArmor(Armor $armor): static
    {
        if (!$this->armors->contains($armor)) {
            $this->armors->add($armor);
            $armor->setEquipmentType($this);
        }

        return $this;
    }

    public function removeArmor(Armor $armor): static
    {
        if ($this->armors->removeElement($armor)) {
            // set the owning side to null (unless already changed)
            if ($armor->getEquipmentType() === $this) {
                $armor->setEquipmentType(null);
            }
        }

        return $this;
    }
}
