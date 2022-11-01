<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Voyage
 *
 * @ORM\Table(name="voyage", indexes={@ORM\Index(name="fk_Voyage_ThemeVoyage1", columns={"idThemeVoyage"}), @ORM\Index(name="fk_Voyage_Hotel1", columns={"idHotel"}), @ORM\Index(name="fk_Voyage_Voiture1", columns={"idVoiture"}), @ORM\Index(name="fk_Voyage_Activite1", columns={"idActivite"}), @ORM\Index(name="fk_Voyage_SiteTouristique1", columns={"idSiteTouristique"})})
 * @ORM\Entity
 * @ORM\Entity(repositoryClass="App\Repository\VoyageRepository")
 */
class Voyage
{
    /**
     * @var int
     *
     * @ORM\Column(name="idVoyage", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idvoyage;

    /**
     * @var \Themevoyage
     *
     * @ORM\ManyToOne(targetEntity="Themevoyage")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idThemeVoyage", referencedColumnName="idThemeVoyage")
     * })
     */
    private $idthemevoyage;

    /**
     * @var \Activite
     *
     * @ORM\ManyToOne(targetEntity="Activite")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idActivite", referencedColumnName="idActivite")
     * })
     */
    private $idactivite;

    /**
     * @var \Sitetouristique
     *
     * @ORM\ManyToOne(targetEntity="Sitetouristique")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idSiteTouristique", referencedColumnName="idSiteTouristique")
     * })
     */
    private $idsitetouristique;

    /**
     * @var \Voiture
     *
     * @ORM\ManyToOne(targetEntity="Voiture")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idVoiture", referencedColumnName="idVoiture")
     * })
     */
    private $idvoiture;

    /**
     * @var \Hotel
     *
     * @ORM\ManyToOne(targetEntity="Hotel")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idHotel", referencedColumnName="idHotel")
     * })
     */
    private $idhotel;

    public function getIdvoyage(): ?int
    {
        return $this->idvoyage;
    }

    public function getIdthemevoyage(): ?Themevoyage
    {
        return $this->idthemevoyage;
    }

    public function setIdthemevoyage(?Themevoyage $idthemevoyage): self
    {
        $this->idthemevoyage = $idthemevoyage;

        return $this;
    }

    public function getIdactivite(): ?Activite
    {
        return $this->idactivite;
    }

    public function setIdactivite(?Activite $idactivite): self
    {
        $this->idactivite = $idactivite;

        return $this;
    }

    public function getIdsitetouristique(): ?Sitetouristique
    {
        return $this->idsitetouristique;
    }

    public function setIdsitetouristique(?Sitetouristique $idsitetouristique): self
    {
        $this->idsitetouristique = $idsitetouristique;

        return $this;
    }

    public function getIdvoiture(): ?Voiture
    {
        return $this->idvoiture;
    }

    public function setIdvoiture(?Voiture $idvoiture): self
    {
        $this->idvoiture = $idvoiture;

        return $this;
    }

    public function getIdhotel(): ?Hotel
    {
        return $this->idhotel;
    }

    public function setIdhotel(?Hotel $idhotel): self
    {
        $this->idhotel = $idhotel;

        return $this;
    }


}
