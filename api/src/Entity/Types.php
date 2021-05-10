<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Core\Annotation\ApiResource;

/**
 * Types
 *
 * @ORM\Table(name="types", indexes={@ORM\Index(name="id_pok", columns={"id_pok"})})
 * @ORM\Entity
 * @ApiResource()
 */
class Types
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
     * @var string
     *
     * @ORM\Column(name="type1", type="string", length=25, nullable=false)
     */
    private $type1 = '';

    /**
     * @var string
     *
     * @ORM\Column(name="type2", type="string", length=25, nullable=false)
     */
    private $type2 = '';

    /**
     * @var \Pokedex
     *
     * @ORM\ManyToOne(targetEntity="Pokedex")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_pok", referencedColumnName="id_pok")
     * })
     */
    private $idPok;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getType1(): ?string
    {
        return $this->type1;
    }

    public function setType1(string $type1): self
    {
        $this->type1 = $type1;

        return $this;
    }

    public function getType2(): ?string
    {
        return $this->type2;
    }

    public function setType2(string $type2): self
    {
        $this->type2 = $type2;

        return $this;
    }

    public function getIdPok(): ?Pokedex
    {
        return $this->idPok;
    }

    public function setIdPok(?Pokedex $idPok): self
    {
        $this->idPok = $idPok;

        return $this;
    }


}
