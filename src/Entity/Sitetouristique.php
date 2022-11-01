<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Sitetouristique
 *
 * @ORM\Table(name="sitetouristique", indexes={@ORM\Index(name="fk_SiteTouristique_district1", columns={"idDistrict"})})
 * @ORM\Entity
 * @ORM\Entity(repositoryClass="App\Repository\SitetouristiqueRepository")
 */
class Sitetouristique
{
    /**
     * @var int
     *
     * @ORM\Column(name="idSiteTouristique", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idsitetouristique;

    /**
     * @var string
     *
     * @ORM\Column(name="TypeSite", type="string", length=100, nullable=false)
     */
    private $typesite;

    /**
     * @var string
     *
     * @ORM\Column(name="NomSite", type="string", length=45, nullable=false)
     */
    private $nomsite;

    /**
     * @var float|null
     *
     * @ORM\Column(name="PrixSite", type="float", precision=10, scale=0, nullable=true)
     */
    private $prixsite;

    /**
     * @var \District
     *
     * @ORM\ManyToOne(targetEntity="District")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idDistrict", referencedColumnName="idDistrict")
     * })
     */
    private $iddistrict;

    public function getIdsitetouristique(): ?int
    {
        return $this->idsitetouristique;
    }

    public function getTypesite(): ?string
    {
        return $this->typesite;
    }

    public function setTypesite(string $typesite): self
    {
        $this->typesite = $typesite;

        return $this;
    }

    public function getNomsite(): ?string
    {
        return $this->nomsite;
    }

    public function setNomsite(string $nomsite): self
    {
        $this->nomsite = $nomsite;

        return $this;
    }

    public function getPrixsite(): ?float
    {
        return $this->prixsite;
    }

    public function setPrixsite(?float $prixsite): self
    {
        $this->prixsite = $prixsite;

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
