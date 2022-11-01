<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Reservation
 *
 * @ORM\Table(name="reservation", indexes={@ORM\Index(name="fk_Reservation_Infos_client1", columns={"idClient"}), @ORM\Index(name="fk_Reservation_users1", columns={"idUsers"}), @ORM\Index(name="fk_Reservation_Voyage1", columns={"idVoyage"})})
 * @ORM\Entity
 * @ORM\Entity(repositoryClass="App\Repository\ReservationRepository")
 */
class Reservation
{
    /**
     * @var int
     *
     * @ORM\Column(name="idResrvation", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idresrvation;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DateDepart", type="date", nullable=false)
     */
    private $datedepart;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DateRetour", type="date", nullable=false)
     */
    private $dateretour;

    /**
     * @var float
     *
     * @ORM\Column(name="NbrPersonne", type="float", precision=10, scale=0, nullable=false)
     */
    private $nbrpersonne;

    /**
     * @var \InfosClient
     *
     * @ORM\ManyToOne(targetEntity="InfosClient")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idClient", referencedColumnName="idClient")
     * })
     */
    private $idclient;

    /**
     * @var \Users
     *
     * @ORM\ManyToOne(targetEntity="Users")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idUsers", referencedColumnName="idusers")
     * })
     */
    private $idusers;

    /**
     * @var \Voyage
     *
     * @ORM\ManyToOne(targetEntity="Voyage")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idVoyage", referencedColumnName="idVoyage")
     * })
     */
    private $idvoyage;

    public function getIdresrvation(): ?int
    {
        return $this->idresrvation;
    }

    public function getDatedepart(): ?\DateTimeInterface
    {
        return $this->datedepart;
    }

    public function setDatedepart(\DateTimeInterface $datedepart): self
    {
        $this->datedepart = $datedepart;

        return $this;
    }

    public function getDateretour(): ?\DateTimeInterface
    {
        return $this->dateretour;
    }

    public function setDateretour(\DateTimeInterface $dateretour): self
    {
        $this->dateretour = $dateretour;

        return $this;
    }

    public function getNbrpersonne(): ?float
    {
        return $this->nbrpersonne;
    }

    public function setNbrpersonne(float $nbrpersonne): self
    {
        $this->nbrpersonne = $nbrpersonne;

        return $this;
    }

    public function getIdclient(): ?InfosClient
    {
        return $this->idclient;
    }

    public function setIdclient(?InfosClient $idclient): self
    {
        $this->idclient = $idclient;

        return $this;
    }

    public function getIdusers(): ?Users
    {
        return $this->idusers;
    }

    public function setIdusers(?Users $idusers): self
    {
        $this->idusers = $idusers;

        return $this;
    }

    public function getIdvoyage(): ?Voyage
    {
        return $this->idvoyage;
    }

    public function setIdvoyage(?Voyage $idvoyage): self
    {
        $this->idvoyage = $idvoyage;

        return $this;
    }


}
