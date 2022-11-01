<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Topvoyage
 *
 * @ORM\Table(name="topvoyage", indexes={@ORM\Index(name="fk_TopVoyage_district1", columns={"iddistrict"})})
 * @ORM\Entity
 * @ORM\Entity(repositoryClass="App\Repository\TopvoyageRepository")
 */
class Topvoyage
{
    /**
     * @var int
     *
     * @ORM\Column(name="idTopVoyage", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idtopvoyage;

    /**
     * @var string
     *
     * @ORM\Column(name="TypeTopv", type="string", length=100, nullable=false)
     */
    private $typetopv;

    /**
     * @var string
     *
     * @ORM\Column(name="NomTopv", type="string", length=45, nullable=false)
     */
    private $nomtopv;

    /**
     * @var string
     *
     * @ORM\Column(name="CaracteristiqueTopv", type="string", length=500, nullable=false)
     */
    private $caracteristiquetopv;

    /**
     * @var \District
     *
     * @ORM\ManyToOne(targetEntity="District")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="iddistrict", referencedColumnName="idDistrict")
     * })
     */
    private $iddistrict;

    public function getIdtopvoyage(): ?int
    {
        return $this->idtopvoyage;
    }

    public function getTypetopv(): ?string
    {
        return $this->typetopv;
    }

    public function setTypetopv(string $typetopv): self
    {
        $this->typetopv = $typetopv;

        return $this;
    }

    public function getNomtopv(): ?string
    {
        return $this->nomtopv;
    }

    public function setNomtopv(string $nomtopv): self
    {
        $this->nomtopv = $nomtopv;

        return $this;
    }

    public function getCaracteristiquetopv(): ?string
    {
        return $this->caracteristiquetopv;
    }

    public function setCaracteristiquetopv(string $caracteristiquetopv): self
    {
        $this->caracteristiquetopv = $caracteristiquetopv;

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
