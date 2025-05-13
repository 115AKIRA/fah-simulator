<?php

namespace App\Entity;

use App\Repository\LimbRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: LimbRepository::class)]
class Limb
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $name = null;

    #[ORM\Column]
    private ?int $maxHP = null;

    #[ORM\Column]
    private ?int $blunt_res = null;

    #[ORM\Column]
    private ?int $slashing_res = null;

    #[ORM\Column]
    private ?int $piercing_res = null;

    #[ORM\Column]
    private ?int $fire_res = null;

    #[ORM\Column]
    private ?int $otherworldly_res = null;

    #[ORM\Column]
    private ?int $evasion = null;

    #[ORM\Column]
    private ?int $magical_evasion = null;

    #[ORM\Column]
    private ?int $hard_maxHP = null;

    #[ORM\Column]
    private ?int $accuracy = null;

    /**
     * @var Collection<int, Troop>
     */
    #[ORM\ManyToMany(targetEntity: Troop::class, inversedBy: 'limbs')]
    private Collection $troop;

    /**
     * @var Collection<int, Effect>
     */
    #[ORM\ManyToMany(targetEntity: Effect::class)]
    private Collection $effects;

    public function __construct()
    {
        $this->troop = new ArrayCollection();
        $this->effects = new ArrayCollection();
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

    public function getMaxHP(): ?int
    {
        return $this->maxHP;
    }

    public function setMaxHP(int $maxHP): static
    {
        $this->maxHP = $maxHP;

        return $this;
    }

    public function getBluntRes(): ?int
    {
        return $this->blunt_res;
    }

    public function setBluntRes(int $blunt_res): static
    {
        $this->blunt_res = $blunt_res;

        return $this;
    }

    public function getSlashingRes(): ?int
    {
        return $this->slashing_res;
    }

    public function setSlashingRes(int $slashing_res): static
    {
        $this->slashing_res = $slashing_res;

        return $this;
    }

    public function getPiercingRes(): ?int
    {
        return $this->piercing_res;
    }

    public function setPiercingRes(int $piercing_res): static
    {
        $this->piercing_res = $piercing_res;

        return $this;
    }

    public function getFireRes(): ?int
    {
        return $this->fire_res;
    }

    public function setFireRes(int $fire_res): static
    {
        $this->fire_res = $fire_res;

        return $this;
    }

    public function getOtherworldlyRes(): ?int
    {
        return $this->otherworldly_res;
    }

    public function setOtherworldlyRes(int $otherworldly_res): static
    {
        $this->otherworldly_res = $otherworldly_res;

        return $this;
    }

    public function getEvasion(): ?int
    {
        return $this->evasion;
    }

    public function setEvasion(int $evasion): static
    {
        $this->evasion = $evasion;

        return $this;
    }

    public function getMagicalEvasion(): ?int
    {
        return $this->magical_evasion;
    }

    public function setMagicalEvasion(int $magical_evasion): static
    {
        $this->magical_evasion = $magical_evasion;

        return $this;
    }

    public function getHardMaxHP(): ?int
    {
        return $this->hard_maxHP;
    }

    public function setHardMaxHP(int $hard_maxHP): static
    {
        $this->hard_maxHP = $hard_maxHP;

        return $this;
    }

    public function getAccuracy(): ?int
    {
        return $this->accuracy;
    }

    public function setAccuracy(int $accuracy): static
    {
        $this->accuracy = $accuracy;

        return $this;
    }

    /**
     * @return Collection<int, Troop>
     */
    public function getTroop(): Collection
    {
        return $this->troop;
    }

    public function addTroop(Troop $troop): static
    {
        if (!$this->troop->contains($troop)) {
            $this->troop->add($troop);
        }

        return $this;
    }

    public function removeTroop(Troop $troop): static
    {
        $this->troop->removeElement($troop);

        return $this;
    }

    /**
     * @return Collection<int, Effect>
     */
    public function getEffects(): Collection
    {
        return $this->effects;
    }

    public function addEffect(Effect $effect): static
    {
        if (!$this->effects->contains($effect)) {
            $this->effects->add($effect);
        }

        return $this;
    }

    public function removeEffect(Effect $effect): static
    {
        $this->effects->removeElement($effect);

        return $this;
    }
}
