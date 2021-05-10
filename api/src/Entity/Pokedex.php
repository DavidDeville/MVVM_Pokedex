<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Core\Annotation\ApiResource;

/**
 * Pokedex
 *
 * @ORM\Table(name="pokedex")
 * @ORM\Entity
 * @ApiResource()
 */
class Pokedex
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_pok", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idPok;

    /**
     * @var string
     *
     * @ORM\Column(name="nom_pok", type="string", length=10, nullable=false)
     */
    private $nomPok;

    public function getIdPok(): ?int
    {
        return $this->idPok;
    }

    public function getNomPok(): ?string
    {
        return $this->nomPok;
    }

    public function setNomPok(string $nomPok): self
    {
        $this->nomPok = $nomPok;

        return $this;
    }


}
