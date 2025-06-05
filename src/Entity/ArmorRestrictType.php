<?php

namespace App\Entity;

use App\Repository\ArmorRestrictTypeRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ArmorRestrictTypeRepository::class)]
class ArmorRestrictType
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $armor_restrict = null;

    /**
     * @var Collection<int, Character>
     */
    #[ORM\OneToMany(targetEntity: Character::class, mappedBy: 'armor_restrict_type')]
    private Collection $characters;

    public function __construct()
    {
        $this->characters = new ArrayCollection();
    }

    public function __toString(): string
    {
        return $this->getArmorRestrict();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getArmorRestrict(): ?string
    {
        return $this->armor_restrict;
    }

    public function setArmorRestrict(string $armor_restrict): static
    {
        $this->armor_restrict = $armor_restrict;

        return $this;
    }

    /**
     * @return Collection<int, Character>
     */
    public function getCharacters(): Collection
    {
        return $this->characters;
    }

    public function addCharacter(Character $character): static
    {
        if (!$this->characters->contains($character)) {
            $this->characters->add($character);
            $character->setArmorRestrictType($this);
        }

        return $this;
    }

    public function removeCharacter(Character $character): static
    {
        if ($this->characters->removeElement($character)) {
            // set the owning side to null (unless already changed)
            if ($character->getArmorRestrictType() === $this) {
                $character->setArmorRestrictType(null);
            }
        }

        return $this;
    }
}
