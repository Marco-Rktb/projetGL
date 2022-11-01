<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Activite
 *
 * @ORM\Table(name="activite", indexes={@ORM\Index(name="fk_Activite_district1", columns={"idDistrict"})})
 * @ORM\Entity
 * @ORM\Entity(repositoryClass="App\Repository\ActiviteRepository")
 */
class Activite
{
    /**
     * @var int
     *
     * @ORM\Column(name="idActivite", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idactivite;

    /**
     * @var string|null
     *
     * @ORM\Column(name="NomAct", type="string", length=45, nullable=true)
     */
    private $nomact;

    /**
     * @var string
     *
     * @ORM\Column(name="TypeAct", type="string", length=100, nullable=false)
     */
    private $typeact;

    /**
     * @var string
     *
     * @ORM\Column(name="CaracteristiqueAct", type="string", length=500, nullable=false)
     */
    private $caracteristiqueact;

    /**
     * @var string
     *
     * @ORM\Column(name="PrixAct", type="string", length=45, nullable=false)
     */
    private $prixact;

    /**
     * @var \District
     *
     * @ORM\ManyToOne(targetEntity="District")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idDistrict", referencedColumnName="idDistrict")
     * })
     */
    private $iddistrict;

    public function getIdactivite(): ?int
    {
        return $this->idactivite;
    }

    public function getNomact(): ?string
    {
        return $this->nomact;
    }

    public function setNomact(?string $nomact): self
    {
        $this->nomact = $nomact;

        return $this;
    }

    public function getTypeact(): ?string
    {
        return $this->typeact;
    }

    public function setTypeact(string $typeact): self
    {
        $this->typeact = $typeact;

        return $this;
    }

    public function getCaracteristiqueact(): ?string
    {
        return $this->caracteristiqueact;
    }

    public function setCaracteristiqueact(string $caracteristiqueact): self
    {
        $this->caracteristiqueact = $caracteristiqueact;

        return $this;
    }

    public function getPrixact(): ?string
    {
        return $this->prixact;
    }

    public function setPrixact(string $prixact): self
    {
        $this->prixact = $prixact;

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
