<?php

namespace App\Entity;

use App\Repository\WeaponRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: WeaponRepository::class)]
class Weapon
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

    #[ORM\Column]
    private ?int $attack = null;

    /**
     * @var Collection<int, Element>
     */
    #[ORM\ManyToMany(targetEntity: Element::class, inversedBy: 'weapons', orphanRemoval: true)]
    private Collection $element_id;

    /**
     * @var Collection<int, WeaponEffect>
     */
    #[ORM\OneToMany(targetEntity: WeaponEffect::class, mappedBy: 'id_weapon', orphanRemoval: true)]
    private Collection $weaponEffects;

    public function __construct()
    {
        $this->element_id = new ArrayCollection();
        $this->weaponEffects = new ArrayCollection();
    }

    public function __toString(): string
    {
        return $this->getName();
    }

    public function setId(int $id): static
    {
        $this->id = $id;

        return $this;
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

    public function getAttack(): ?int
    {
        return $this->attack;
    }

    public function setAttack(int $attack): static
    {
        $this->attack = $attack;

        return $this;
    }

    /**
     * @return Collection<int, Element>
     */
    public function getElementId(): Collection
    {
        return $this->element_id;
    }

    public function addElementId(Element $elementId): static
    {
        if (!$this->element_id->contains($elementId)) {
            $this->element_id->add($elementId);
        }

        return $this;
    }

    public function removeElementId(Element $elementId): static
    {
        $this->element_id->removeElement($elementId);

        return $this;
    }

    /**
     * @return Collection<int, WeaponEffect>
     */
    public function getWeaponEffects(): Collection
    {
        return $this->weaponEffects;
    }

    public function addWeaponEffect(WeaponEffect $weaponEffect): static
    {
        if (!$this->weaponEffects->contains($weaponEffect)) {
            $this->weaponEffects->add($weaponEffect);
            $weaponEffect->setIdWeapon($this);
        }

        return $this;
    }

    public function removeWeaponEffect(WeaponEffect $weaponEffect): static
    {
        if ($this->weaponEffects->removeElement($weaponEffect)) {
            // set the owning side to null (unless already changed)
            if ($weaponEffect->getIdWeapon() === $this) {
                $weaponEffect->setIdWeapon(null);
            }
        }

        return $this;
    }

}
