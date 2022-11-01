<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Typevoyage
 *
 * @ORM\Table(name="typevoyage")
 * @ORM\Entity
 * @ORM\Entity(repositoryClass="App\Repository\TypevoyageRepository")
 */
class Typevoyage
{
    /**
     * @var int
     *
     * @ORM\Column(name="idTypeVoyage", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idtypevoyage;

    /**
     * @var string
     *
     * @ORM\Column(name="NomTyv", type="string", length=100, nullable=false)
     */
    private $nomtyv;

    /**
     * @var string
     *
     * @ORM\Column(name="TitreTyv", type="string", length=45, nullable=false)
     */
    private $titretyv;

    /**
     * @var string
     *
     * @ORM\Column(name="Caracteristique", type="string", length=500, nullable=false)
     */
    private $caracteristique;

    public function getIdtypevoyage(): ?int
    {
        return $this->idtypevoyage;
    }

    public function getNomtyv(): ?string
    {
        return $this->nomtyv;
    }

    public function setNomtyv(string $nomtyv): self
    {
        $this->nomtyv = $nomtyv;

        return $this;
    }

    public function getTitretyv(): ?string
    {
        return $this->titretyv;
    }

    public function setTitretyv(string $titretyv): self
    {
        $this->titretyv = $titretyv;

        return $this;
    }

    public function getCaracteristique(): ?string
    {
        return $this->caracteristique;
    }

    public function setCaracteristique(string $caracteristique): self
    {
        $this->caracteristique = $caracteristique;

        return $this;
    }


}
