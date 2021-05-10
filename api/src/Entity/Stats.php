<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Core\Annotation\ApiResource;

/**
 * Stats
 *
 * @ORM\Table(name="stats")
 * @ORM\Entity
 * @ApiResource()
 */
class Stats
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var int|null
     *
     * @ORM\Column(name="pokemon_id", type="integer", nullable=true)
     */
    private $pokemonId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="hp", type="integer", nullable=true)
     */
    private $hp;

    /**
     * @var int|null
     *
     * @ORM\Column(name="attack", type="integer", nullable=true)
     */
    private $attack;

    /**
     * @var int|null
     *
     * @ORM\Column(name="defense", type="integer", nullable=true)
     */
    private $defense;

    /**
     * @var int|null
     *
     * @ORM\Column(name="sp_attack", type="integer", nullable=true)
     */
    private $spAttack;

    /**
     * @var int|null
     *
     * @ORM\Column(name="sp_defense", type="integer", nullable=true)
     */
    private $spDefense;

    /**
     * @var int|null
     *
     * @ORM\Column(name="speed", type="integer", nullable=true)
     */
    private $speed;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPokemonId(): ?int
    {
        return $this->pokemonId;
    }

    public function setPokemonId(?int $pokemonId): self
    {
        $this->pokemonId = $pokemonId;

        return $this;
    }

    public function getHp(): ?int
    {
        return $this->hp;
    }

    public function setHp(?int $hp): self
    {
        $this->hp = $hp;

        return $this;
    }

    public function getAttack(): ?int
    {
        return $this->attack;
    }

    public function setAttack(?int $attack): self
    {
        $this->attack = $attack;

        return $this;
    }

    public function getDefense(): ?int
    {
        return $this->defense;
    }

    public function setDefense(?int $defense): self
    {
        $this->defense = $defense;

        return $this;
    }

    public function getSpAttack(): ?int
    {
        return $this->spAttack;
    }

    public function setSpAttack(?int $spAttack): self
    {
        $this->spAttack = $spAttack;

        return $this;
    }

    public function getSpDefense(): ?int
    {
        return $this->spDefense;
    }

    public function setSpDefense(?int $spDefense): self
    {
        $this->spDefense = $spDefense;

        return $this;
    }

    public function getSpeed(): ?int
    {
        return $this->speed;
    }

    public function setSpeed(?int $speed): self
    {
        $this->speed = $speed;

        return $this;
    }


}
