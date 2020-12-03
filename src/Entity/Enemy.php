<?php

namespace App\Entity;

use App\Repository\EnemyRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=EnemyRepository::class)
 */
class Enemy
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=30)
     */
    private $NameEnemy;

    /**
     * @ORM\Column(type="integer")
     */
    private $LevelEnemy;

    /**
     * @ORM\Column(type="integer")
     */
    private $StrengthEnemy;

    /**
     * @ORM\Column(type="integer")
     */
    private $DexterityEnemy;

    /**
     * @ORM\Column(type="integer")
     */
    private $EnduranceEnemy;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNameEnemy(): ?string
    {
        return $this->NameEnemy;
    }

    public function setNameEnemy(string $NameEnemy): self
    {
        $this->NameEnemy = $NameEnemy;

        return $this;
    }

    public function getLevelEnemy(): ?int
    {
        return $this->LevelEnemy;
    }

    public function setLevelEnemy(int $LevelEnemy): self
    {
        $this->LevelEnemy = $LevelEnemy;

        return $this;
    }

    public function getStrengthEnemy(): ?int
    {
        return $this->StrengthEnemy;
    }

    public function setStrengthEnemy(int $StrengthEnemy): self
    {
        $this->StrengthEnemy = $StrengthEnemy;

        return $this;
    }

    public function getDexterityEnemy(): ?int
    {
        return $this->DexterityEnemy;
    }

    public function setDexterityEnemy(int $DexterityEnemy): self
    {
        $this->DexterityEnemy = $DexterityEnemy;

        return $this;
    }

    public function getEnduranceEnemy(): ?int
    {
        return $this->EnduranceEnemy;
    }

    public function setEnduranceEnemy(int $EnduranceEnemy): self
    {
        $this->EnduranceEnemy = $EnduranceEnemy;

        return $this;
    }
}
