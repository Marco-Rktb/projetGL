<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Themevoyage
 *
 * @ORM\Table(name="themevoyage", indexes={@ORM\Index(name="fk_ThemeVoyage_TypeVoyage1", columns={"TypeVoyage_id"})})
 * @ORM\Entity
 * @ORM\Entity(repositoryClass="App\Repository\ThemevoyageRepository")
 */
class Themevoyage
{
    /**
     * @var int
     *
     * @ORM\Column(name="idThemeVoyage", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idthemevoyage;

    /**
     * @var string
     *
     * @ORM\Column(name="NomThm", type="string", length=45, nullable=false)
     */
    private $nomthm;

    /**
     * @var string
     *
     * @ORM\Column(name="TitreThm", type="string", length=45, nullable=false)
     */
    private $titrethm;

    /**
     * @var string
     *
     * @ORM\Column(name="CaracteristiqueTheme", type="string", length=500, nullable=false)
     */
    private $caracteristiquetheme;

    /**
     * @var float
     *
     * @ORM\Column(name="PrixThm", type="float", precision=10, scale=0, nullable=false)
     */
    private $prixthm;

    /**
     * @var \Typevoyage
     *
     * @ORM\ManyToOne(targetEntity="Typevoyage")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="TypeVoyage_id", referencedColumnName="idTypeVoyage")
     * })
     */
    private $typevoyage;

    public function getIdthemevoyage(): ?int
    {
        return $this->idthemevoyage;
    }

    public function getNomthm(): ?string
    {
        return $this->nomthm;
    }

    public function setNomthm(string $nomthm): self
    {
        $this->nomthm = $nomthm;

        return $this;
    }

    public function getTitrethm(): ?string
    {
        return $this->titrethm;
    }

    public function setTitrethm(string $titrethm): self
    {
        $this->titrethm = $titrethm;

        return $this;
    }

    public function getCaracteristiquetheme(): ?string
    {
        return $this->caracteristiquetheme;
    }

    public function setCaracteristiquetheme(string $caracteristiquetheme): self
    {
        $this->caracteristiquetheme = $caracteristiquetheme;

        return $this;
    }

    public function getPrixthm(): ?float
    {
        return $this->prixthm;
    }

    public function setPrixthm(float $prixthm): self
    {
        $this->prixthm = $prixthm;

        return $this;
    }

    public function getTypevoyage(): ?Typevoyage
    {
        return $this->typevoyage;
    }

    public function setTypevoyage(?Typevoyage $typevoyage): self
    {
        $this->typevoyage = $typevoyage;

        return $this;
    }


}
