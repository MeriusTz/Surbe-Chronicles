<?php

namespace App\Entity;

use App\Repository\CharacterRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=CharacterRepository::class)
 * @ORM\Table(name="`character`")
 */
class Character
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=22)
     */
    private $NameCharacter;

    /**
     * @ORM\Column(type="integer")
     */
    private $LevelCharacter;

    /**
     * @ORM\Column(type="integer")
     */
    private $StrengthCharacter;

    /**
     * @ORM\Column(type="integer")
     */
    private $DexterityCharacter;

    /**
     * @ORM\Column(type="integer")
     */
    private $EnduranceCharacter;

    /**
     * @ORM\ManyToOne(targetEntity=User::class, inversedBy="idUser")
     * @ORM\JoinColumn(nullable=false)
     */
    private $IdUser;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNameCharacter(): ?string
    {
        return $this->NameCharacter;
    }

    public function setNameCharacter(string $NameCharacter): self
    {
        $this->NameCharacter = $NameCharacter;

        return $this;
    }

    public function getLevelCharacter(): ?int
    {
        return $this->LevelCharacter;
    }

    public function setLevelCharacter(int $LevelCharacter): self
    {
        $this->LevelCharacter = $LevelCharacter;

        return $this;
    }

    public function getStrengthCharacter(): ?int
    {
        return $this->StrengthCharacter;
    }

    public function setStrengthCharacter(int $StrengthCharacter): self
    {
        $this->StrengthCharacter = $StrengthCharacter;

        return $this;
    }

    public function getDexterityCharacter(): ?int
    {
        return $this->DexterityCharacter;
    }

    public function setDexterityCharacter(int $DexterityCharacter): self
    {
        $this->DexterityCharacter = $DexterityCharacter;

        return $this;
    }

    public function getEnduranceCharacter(): ?int
    {
        return $this->EnduranceCharacter;
    }

    public function setEnduranceCharacter(int $EnduranceCharacter): self
    {
        $this->EnduranceCharacter = $EnduranceCharacter;

        return $this;
    }

    public function getIdUser(): ?User
    {
        return $this->IdUser;
    }

    public function setIdUser(?User $IdUser): self
    {
        $this->IdUser = $IdUser;

        return $this;
    }
}
