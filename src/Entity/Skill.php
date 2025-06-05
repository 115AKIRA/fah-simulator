<?php

namespace App\Entity;

use App\Repository\SkillRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: SkillRepository::class)]
class Skill
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $name = null;

    #[ORM\Column]
    private ?bool $is_enemyOnly = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $description = null;

    #[ORM\ManyToOne]
    #[ORM\JoinColumn(nullable: false)]
    private ?Scope $scope = null;

    #[ORM\ManyToOne]
    #[ORM\JoinColumn(nullable: false)]
    private ?Occasion $occasion = null;

    #[ORM\ManyToOne]
    #[ORM\JoinColumn(nullable: false)]
    private ?Element $element = null;

    #[ORM\ManyToOne]
    #[ORM\JoinColumn(nullable: false)]
    private ?DamageType $damage_type = null;

    #[ORM\ManyToOne]
    #[ORM\JoinColumn(nullable: false)]
    private ?HitType $hit_type = null;

    #[ORM\Column]
    private ?int $success_rate = null;

    #[ORM\Column]
    private ?int $repeat_action = null;

    #[ORM\Column(length: 255)]
    private ?string $formula = null;

    /**
     * @var Collection<int, LimbSkill>
     */
    #[ORM\OneToMany(targetEntity: LimbSkill::class, mappedBy: 'id_skill', orphanRemoval: true)]
    private Collection $limbSkills;

    public function __construct()
    {
        $this->limbSkills = new ArrayCollection();
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

    public function isEnemyOnly(): ?bool
    {
        return $this->is_enemyOnly;
    }

    public function setIsEnemyOnly(bool $is_enemyOnly): static
    {
        $this->is_enemyOnly = $is_enemyOnly;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): static
    {
        $this->description = $description;

        return $this;
    }

    public function getScope(): ?Scope
    {
        return $this->scope;
    }

    public function setScope(?Scope $scope): static
    {
        $this->scope = $scope;

        return $this;
    }

    public function getOccasion(): ?Occasion
    {
        return $this->occasion;
    }

    public function setOccasion(?Occasion $occasion): static
    {
        $this->occasion = $occasion;

        return $this;
    }

    public function getElement(): ?Element
    {
        return $this->element;
    }

    public function setElement(?Element $element): static
    {
        $this->element = $element;

        return $this;
    }

    public function getDamageType(): ?DamageType
    {
        return $this->damage_type;
    }

    public function setDamageType(?DamageType $damage_type): static
    {
        $this->damage_type = $damage_type;

        return $this;
    }

    public function getHitType(): ?HitType
    {
        return $this->hit_type;
    }

    public function setHitType(?HitType $hit_type): static
    {
        $this->hit_type = $hit_type;

        return $this;
    }

    public function getSuccessRate(): ?int
    {
        return $this->success_rate;
    }

    public function setSuccessRate(int $success_rate): static
    {
        $this->success_rate = $success_rate;

        return $this;
    }

    public function getRepeatAction(): ?int
    {
        return $this->repeat_action;
    }

    public function setRepeatAction(int $repeat_action): static
    {
        $this->repeat_action = $repeat_action;

        return $this;
    }

    public function getFormula(): ?string
    {
        return $this->formula;
    }

    public function setFormula(string $formula): static
    {
        $this->formula = $formula;

        return $this;
    }

    /**
     * @return Collection<int, LimbSkill>
     */
    public function getLimbSkills(): Collection
    {
        return $this->limbSkills;
    }

    public function addLimbSkill(LimbSkill $limbSkill): static
    {
        if (!$this->limbSkills->contains($limbSkill)) {
            $this->limbSkills->add($limbSkill);
            $limbSkill->setIdSkill($this);
        }

        return $this;
    }

    public function removeLimbSkill(LimbSkill $limbSkill): static
    {
        if ($this->limbSkills->removeElement($limbSkill)) {
            // set the owning side to null (unless already changed)
            if ($limbSkill->getIdSkill() === $this) {
                $limbSkill->setIdSkill(null);
            }
        }

        return $this;
    }

}
