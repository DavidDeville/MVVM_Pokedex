<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Core\Annotation\ApiResource;

/**
 * Weaknesses
 *
 * @ORM\Table(name="weaknesses", indexes={@ORM\Index(name="pokedex_id", columns={"pokedex_id"})})
 * @ORM\Entity
 * @ApiResource()
 */
class Weaknesses
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
     * @var float|null
     *
     * @ORM\Column(name="bug", type="float", precision=10, scale=0, nullable=true)
     */
    private $bug;

    /**
     * @var float|null
     *
     * @ORM\Column(name="dragon", type="float", precision=10, scale=0, nullable=true)
     */
    private $dragon;

    /**
     * @var float|null
     *
     * @ORM\Column(name="electric", type="float", precision=10, scale=0, nullable=true)
     */
    private $electric;

    /**
     * @var float|null
     *
     * @ORM\Column(name="fairy", type="float", precision=10, scale=0, nullable=true)
     */
    private $fairy;

    /**
     * @var float|null
     *
     * @ORM\Column(name="fight", type="float", precision=10, scale=0, nullable=true)
     */
    private $fight;

    /**
     * @var float|null
     *
     * @ORM\Column(name="fire", type="float", precision=10, scale=0, nullable=true)
     */
    private $fire;

    /**
     * @var float|null
     *
     * @ORM\Column(name="flying", type="float", precision=10, scale=0, nullable=true)
     */
    private $flying;

    /**
     * @var float|null
     *
     * @ORM\Column(name="ghost", type="float", precision=10, scale=0, nullable=true)
     */
    private $ghost;

    /**
     * @var float|null
     *
     * @ORM\Column(name="grass", type="float", precision=10, scale=0, nullable=true)
     */
    private $grass;

    /**
     * @var float|null
     *
     * @ORM\Column(name="ground", type="float", precision=10, scale=0, nullable=true)
     */
    private $ground;

    /**
     * @var float|null
     *
     * @ORM\Column(name="ice", type="float", precision=10, scale=0, nullable=true)
     */
    private $ice;

    /**
     * @var float|null
     *
     * @ORM\Column(name="normal", type="float", precision=10, scale=0, nullable=true)
     */
    private $normal;

    /**
     * @var float|null
     *
     * @ORM\Column(name="poison", type="float", precision=10, scale=0, nullable=true)
     */
    private $poison;

    /**
     * @var float|null
     *
     * @ORM\Column(name="psychic", type="float", precision=10, scale=0, nullable=true)
     */
    private $psychic;

    /**
     * @var float|null
     *
     * @ORM\Column(name="rock", type="float", precision=10, scale=0, nullable=true)
     */
    private $rock;

    /**
     * @var float|null
     *
     * @ORM\Column(name="steel", type="float", precision=10, scale=0, nullable=true)
     */
    private $steel;

    /**
     * @var float|null
     *
     * @ORM\Column(name="water", type="float", precision=10, scale=0, nullable=true)
     */
    private $water;

    /**
     * @var \Pokedex
     *
     * @ORM\ManyToOne(targetEntity="Pokedex")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="pokedex_id", referencedColumnName="id_pok")
     * })
     */
    private $pokedex;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getBug(): ?float
    {
        return $this->bug;
    }

    public function setBug(?float $bug): self
    {
        $this->bug = $bug;

        return $this;
    }

    public function getDragon(): ?float
    {
        return $this->dragon;
    }

    public function setDragon(?float $dragon): self
    {
        $this->dragon = $dragon;

        return $this;
    }

    public function getElectric(): ?float
    {
        return $this->electric;
    }

    public function setElectric(?float $electric): self
    {
        $this->electric = $electric;

        return $this;
    }

    public function getFairy(): ?float
    {
        return $this->fairy;
    }

    public function setFairy(?float $fairy): self
    {
        $this->fairy = $fairy;

        return $this;
    }

    public function getFight(): ?float
    {
        return $this->fight;
    }

    public function setFight(?float $fight): self
    {
        $this->fight = $fight;

        return $this;
    }

    public function getFire(): ?float
    {
        return $this->fire;
    }

    public function setFire(?float $fire): self
    {
        $this->fire = $fire;

        return $this;
    }

    public function getFlying(): ?float
    {
        return $this->flying;
    }

    public function setFlying(?float $flying): self
    {
        $this->flying = $flying;

        return $this;
    }

    public function getGhost(): ?float
    {
        return $this->ghost;
    }

    public function setGhost(?float $ghost): self
    {
        $this->ghost = $ghost;

        return $this;
    }

    public function getGrass(): ?float
    {
        return $this->grass;
    }

    public function setGrass(?float $grass): self
    {
        $this->grass = $grass;

        return $this;
    }

    public function getGround(): ?float
    {
        return $this->ground;
    }

    public function setGround(?float $ground): self
    {
        $this->ground = $ground;

        return $this;
    }

    public function getIce(): ?float
    {
        return $this->ice;
    }

    public function setIce(?float $ice): self
    {
        $this->ice = $ice;

        return $this;
    }

    public function getNormal(): ?float
    {
        return $this->normal;
    }

    public function setNormal(?float $normal): self
    {
        $this->normal = $normal;

        return $this;
    }

    public function getPoison(): ?float
    {
        return $this->poison;
    }

    public function setPoison(?float $poison): self
    {
        $this->poison = $poison;

        return $this;
    }

    public function getPsychic(): ?float
    {
        return $this->psychic;
    }

    public function setPsychic(?float $psychic): self
    {
        $this->psychic = $psychic;

        return $this;
    }

    public function getRock(): ?float
    {
        return $this->rock;
    }

    public function setRock(?float $rock): self
    {
        $this->rock = $rock;

        return $this;
    }

    public function getSteel(): ?float
    {
        return $this->steel;
    }

    public function setSteel(?float $steel): self
    {
        $this->steel = $steel;

        return $this;
    }

    public function getWater(): ?float
    {
        return $this->water;
    }

    public function setWater(?float $water): self
    {
        $this->water = $water;

        return $this;
    }

    public function getPokedex(): ?Pokedex
    {
        return $this->pokedex;
    }

    public function setPokedex(?Pokedex $pokedex): self
    {
        $this->pokedex = $pokedex;

        return $this;
    }


}
