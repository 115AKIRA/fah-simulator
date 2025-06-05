<?php

namespace App\Entity;

use App\Repository\WeaponRestrictTypeRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: WeaponRestrictTypeRepository::class)]
class WeaponRestrictType
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $weapon_restrict = null;

    /**
     * @var Collection<int, Character>
     */
    #[ORM\OneToMany(targetEntity: Character::class, mappedBy: 'weapon_restrict_type')]
    private Collection $characters;

    public function __construct()
    {
        $this->characters = new ArrayCollection();
    }

    public function __toString(): string
    {
        return $this->getWeaponRestrict();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getWeaponRestrict(): ?string
    {
        return $this->weapon_restrict;
    }

    public function setWeaponRestrict(string $weapon_restrict): static
    {
        $this->weapon_restrict = $weapon_restrict;

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
            $character->setWeaponRestrictType($this);
        }

        return $this;
    }

    public function removeCharacter(Character $character): static
    {
        if ($this->characters->removeElement($character)) {
            // set the owning side to null (unless already changed)
            if ($character->getWeaponRestrictType() === $this) {
                $character->setWeaponRestrictType(null);
            }
        }

        return $this;
    }
}
