<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Core\Annotation\ApiResource;

/**
 * Evolutions
 *
 * @ORM\Table(name="evolutions", indexes={@ORM\Index(name="id_pok_evol", columns={"id_pok_evol"}), @ORM\Index(name="id_pok_base", columns={"id_pok_base"})})
 * @ORM\Entity
 * @ApiResource()
 */
class Evolutions
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
     * @var int
     *
     * @ORM\Column(name="lvl_evol_pok", type="integer", nullable=false)
     */
    private $lvlEvolPok;

    /**
     * @var \Pokedex
     *
     * @ORM\ManyToOne(targetEntity="Pokedex")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_pok_base", referencedColumnName="id_pok")
     * })
     */
    private $idPokBase;

    /**
     * @var \Pokedex
     *
     * @ORM\ManyToOne(targetEntity="Pokedex")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_pok_evol", referencedColumnName="id_pok")
     * })
     */
    private $idPokEvol;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getLvlEvolPok(): ?int
    {
        return $this->lvlEvolPok;
    }

    public function setLvlEvolPok(int $lvlEvolPok): self
    {
        $this->lvlEvolPok = $lvlEvolPok;

        return $this;
    }

    public function getIdPokBase(): ?Pokedex
    {
        return $this->idPokBase;
    }

    public function setIdPokBase(?Pokedex $idPokBase): self
    {
        $this->idPokBase = $idPokBase;

        return $this;
    }

    public function getIdPokEvol(): ?Pokedex
    {
        return $this->idPokEvol;
    }

    public function setIdPokEvol(?Pokedex $idPokEvol): self
    {
        $this->idPokEvol = $idPokEvol;

        return $this;
    }


}
