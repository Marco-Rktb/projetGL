<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Voiture
 *
 * @ORM\Table(name="voiture")
 * @ORM\Entity
 * @ORM\Entity(repositoryClass="App\Repository\VoitureRepository")
 */
class Voiture
{
    /**
     * @var int
     *
     * @ORM\Column(name="idVoiture", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idvoiture;

    /**
     * @var string
     *
     * @ORM\Column(name="TypeVoi", type="string", length=45, nullable=false)
     */
    private $typevoi;

    /**
     * @var string
     *
     * @ORM\Column(name="CapaciteVoi", type="string", length=100, nullable=false)
     */
    private $capacitevoi;

    /**
     * @var float
     *
     * @ORM\Column(name="PrixLocation", type="float", precision=10, scale=0, nullable=false)
     */
    private $prixlocation;

    public function getIdvoiture(): ?int
    {
        return $this->idvoiture;
    }

    public function getTypevoi(): ?string
    {
        return $this->typevoi;
    }

    public function setTypevoi(string $typevoi): self
    {
        $this->typevoi = $typevoi;

        return $this;
    }

    public function getCapacitevoi(): ?string
    {
        return $this->capacitevoi;
    }

    public function setCapacitevoi(string $capacitevoi): self
    {
        $this->capacitevoi = $capacitevoi;

        return $this;
    }

    public function getPrixlocation(): ?float
    {
        return $this->prixlocation;
    }

    public function setPrixlocation(float $prixlocation): self
    {
        $this->prixlocation = $prixlocation;

        return $this;
    }


}
