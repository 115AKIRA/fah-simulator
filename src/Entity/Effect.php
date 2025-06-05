<?php

namespace App\Entity;

use App\Repository\EffectRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
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

    /**
     * @var Collection<int, StateEffect>
     */
    #[ORM\OneToMany(targetEntity: StateEffect::class, mappedBy: 'id_effect', orphanRemoval: true)]
    private Collection $stateEffects;

    /**
     * @var Collection<int, WeaponEffect>
     */
    #[ORM\OneToMany(targetEntity: WeaponEffect::class, mappedBy: 'id_effect', orphanRemoval: true)]
    private Collection $weaponEffects;

    /**
     * @var Collection<int, LimbEffect>
     */
    #[ORM\OneToMany(targetEntity: LimbEffect::class, mappedBy: 'id_effect', orphanRemoval: true)]
    private Collection $limbEffects;

    /**
     * @var Collection<int, AccessoryEffect>
     */
    #[ORM\OneToMany(targetEntity: AccessoryEffect::class, mappedBy: 'id_effect', orphanRemoval: true)]
    private Collection $accessoryEffects;

    /**
     * @var Collection<int, ArmorEffect>
     */
    #[ORM\OneToMany(targetEntity: ArmorEffect::class, mappedBy: 'id_effect', orphanRemoval: true)]
    private Collection $armorEffects;

    public function __construct()
    {
        $this->stateEffects = new ArrayCollection();
        $this->weaponEffects = new ArrayCollection();
        $this->limbEffects = new ArrayCollection();
        $this->accessoryEffects = new ArrayCollection();
        $this->armorEffects = new ArrayCollection();
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
            $stateEffect->setIdEffect($this);
        }

        return $this;
    }

    public function removeStateEffect(StateEffect $stateEffect): static
    {
        if ($this->stateEffects->removeElement($stateEffect)) {
            // set the owning side to null (unless already changed)
            if ($stateEffect->getIdEffect() === $this) {
                $stateEffect->setIdEffect(null);
            }
        }

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
            $weaponEffect->setIdEffect($this);
        }

        return $this;
    }

    public function removeWeaponEffect(WeaponEffect $weaponEffect): static
    {
        if ($this->weaponEffects->removeElement($weaponEffect)) {
            // set the owning side to null (unless already changed)
            if ($weaponEffect->getIdEffect() === $this) {
                $weaponEffect->setIdEffect(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, LimbEffect>
     */
    public function getLimbEffects(): Collection
    {
        return $this->limbEffects;
    }

    public function addLimbEffect(LimbEffect $limbEffect): static
    {
        if (!$this->limbEffects->contains($limbEffect)) {
            $this->limbEffects->add($limbEffect);
            $limbEffect->setIdEffect($this);
        }

        return $this;
    }

    public function removeLimbEffect(LimbEffect $limbEffect): static
    {
        if ($this->limbEffects->removeElement($limbEffect)) {
            // set the owning side to null (unless already changed)
            if ($limbEffect->getIdEffect() === $this) {
                $limbEffect->setIdEffect(null);
            }
        }

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
            $accessoryEffect->setIdEffect($this);
        }

        return $this;
    }

    public function removeAccessoryEffect(AccessoryEffect $accessoryEffect): static
    {
        if ($this->accessoryEffects->removeElement($accessoryEffect)) {
            // set the owning side to null (unless already changed)
            if ($accessoryEffect->getIdEffect() === $this) {
                $accessoryEffect->setIdEffect(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, ArmorEffect>
     */
    public function getArmorEffects(): Collection
    {
        return $this->armorEffects;
    }

    public function addArmorEffect(ArmorEffect $armorEffect): static
    {
        if (!$this->armorEffects->contains($armorEffect)) {
            $this->armorEffects->add($armorEffect);
            $armorEffect->setIdEffect($this);
        }

        return $this;
    }

    public function removeArmorEffect(ArmorEffect $armorEffect): static
    {
        if ($this->armorEffects->removeElement($armorEffect)) {
            // set the owning side to null (unless already changed)
            if ($armorEffect->getIdEffect() === $this) {
                $armorEffect->setIdEffect(null);
            }
        }

        return $this;
    }
    
}
