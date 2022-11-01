<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Identitemada
 *
 * @ORM\Table(name="identitemada", indexes={@ORM\Index(name="fk_IdentiteMada_district1", columns={"iddistrict"})})
 * @ORM\Entity
 * @ORM\Entity(repositoryClass="App\Repository\IdentitemadaRepository")
 */
class Identitemada
{
    /**
     * @var int
     *
     * @ORM\Column(name="idIdentiteMada", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $ididentitemada;

    /**
     * @var string
     *
     * @ORM\Column(name="TypeIdent", type="string", length=100, nullable=false)
     */
    private $typeident;

    /**
     * @var string
     *
     * @ORM\Column(name="NomIdent", type="string", length=45, nullable=false)
     */
    private $nomident;

    /**
     * @var string
     *
     * @ORM\Column(name="CaracteristiqueIdent", type="string", length=500, nullable=false)
     */
    private $caracteristiqueident;

    /**
     * @var \District
     *
     * @ORM\ManyToOne(targetEntity="District")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="iddistrict", referencedColumnName="idDistrict")
     * })
     */
    private $iddistrict;

    public function getIdidentitemada(): ?int
    {
        return $this->ididentitemada;
    }

    public function getTypeident(): ?string
    {
        return $this->typeident;
    }

    public function setTypeident(string $typeident): self
    {
        $this->typeident = $typeident;

        return $this;
    }

    public function getNomident(): ?string
    {
        return $this->nomident;
    }

    public function setNomident(string $nomident): self
    {
        $this->nomident = $nomident;

        return $this;
    }

    public function getCaracteristiqueident(): ?string
    {
        return $this->caracteristiqueident;
    }

    public function setCaracteristiqueident(string $caracteristiqueident): self
    {
        $this->caracteristiqueident = $caracteristiqueident;

        return $this;
    }

    public function getIddistrict(): ?District
    {
        return $this->iddistrict;
    }

    public function setIddistrict(?District $iddistrict): self
    {
        $this->iddistrict = $iddistrict;

        return $this;
    }


}
