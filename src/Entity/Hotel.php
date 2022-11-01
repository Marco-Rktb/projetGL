<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Hotel
 *
 * @ORM\Table(name="hotel", indexes={@ORM\Index(name="fk_Hotel_district1", columns={"idDistrict"})})
 * @ORM\Entity
 * @ORM\Entity(repositoryClass="App\Repository\HotelRepository")
 */
class Hotel
{
    /**
     * @var int
     *
     * @ORM\Column(name="idHotel", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idhotel;

    /**
     * @var string
     *
     * @ORM\Column(name="TypeHotel", type="string", length=100, nullable=false)
     */
    private $typehotel;

    /**
     * @var string
     *
     * @ORM\Column(name="NomHotel", type="string", length=45, nullable=false)
     */
    private $nomhotel;

    /**
     * @var string
     *
     * @ORM\Column(name="AdresseHotel", type="string", length=45, nullable=false)
     */
    private $adressehotel;

    /**
     * @var string
     *
     * @ORM\Column(name="SupChambre", type="string", length=45, nullable=false)
     */
    private $supchambre;

    /**
     * @var string
     *
     * @ORM\Column(name="CaracteristiqueHotel", type="string", length=500, nullable=false)
     */
    private $caracteristiquehotel;

    /**
     * @var float|null
     *
     * @ORM\Column(name="PrixChambre", type="float", precision=10, scale=0, nullable=true)
     */
    private $prixchambre;

    /**
     * @var \District
     *
     * @ORM\ManyToOne(targetEntity="District")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idDistrict", referencedColumnName="idDistrict")
     * })
     */
    private $iddistrict;

    public function getIdhotel(): ?int
    {
        return $this->idhotel;
    }

    public function getTypehotel(): ?string
    {
        return $this->typehotel;
    }

    public function setTypehotel(string $typehotel): self
    {
        $this->typehotel = $typehotel;

        return $this;
    }

    public function getNomhotel(): ?string
    {
        return $this->nomhotel;
    }

    public function setNomhotel(string $nomhotel): self
    {
        $this->nomhotel = $nomhotel;

        return $this;
    }

    public function getAdressehotel(): ?string
    {
        return $this->adressehotel;
    }

    public function setAdressehotel(string $adressehotel): self
    {
        $this->adressehotel = $adressehotel;

        return $this;
    }

    public function getSupchambre(): ?string
    {
        return $this->supchambre;
    }

    public function setSupchambre(string $supchambre): self
    {
        $this->supchambre = $supchambre;

        return $this;
    }

    public function getCaracteristiquehotel(): ?string
    {
        return $this->caracteristiquehotel;
    }

    public function setCaracteristiquehotel(string $caracteristiquehotel): self
    {
        $this->caracteristiquehotel = $caracteristiquehotel;

        return $this;
    }

    public function getPrixchambre(): ?float
    {
        return $this->prixchambre;
    }

    public function setPrixchambre(?float $prixchambre): self
    {
        $this->prixchambre = $prixchambre;

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
