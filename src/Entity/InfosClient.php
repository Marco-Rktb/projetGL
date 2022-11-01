<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * InfosClient
 *
 * @ORM\Table(name="infos_client")
 * @ORM\Entity
 * @ORM\Entity(repositoryClass="App\Repository\InfosClientRepository")
 */
class InfosClient
{
    /**
     * @var int
     *
     * @ORM\Column(name="idClient", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idclient;

    /**
     * @var string
     *
     * @ORM\Column(name="NomClient", type="string", length=100, nullable=false)
     */
    private $nomclient;

    /**
     * @var string
     *
     * @ORM\Column(name="PrenomClient", type="string", length=200, nullable=false)
     */
    private $prenomclient;

    /**
     * @var string
     *
     * @ORM\Column(name="AdresseClient", type="string", length=100, nullable=false)
     */
    private $adresseclient;

    /**
     * @var string
     *
     * @ORM\Column(name="EmailClient", type="string", length=45, nullable=false)
     */
    private $emailclient;

    /**
     * @var string
     *
     * @ORM\Column(name="TelClient", type="string", length=45, nullable=false)
     */
    private $telclient;

    /**
     * @var string
     *
     * @ORM\Column(name="Genre", type="string", length=45, nullable=false)
     */
    private $genre;

    /**
     * @var string
     *
     * @ORM\Column(name="CIN", type="string", length=45, nullable=false)
     */
    private $cin;

    /**
     * @var string
     *
     * @ORM\Column(name="TypeClient", type="string", length=45, nullable=false)
     */
    private $typeclient;

    public function getIdclient(): ?int
    {
        return $this->idclient;
    }

    public function getNomclient(): ?string
    {
        return $this->nomclient;
    }

    public function setNomclient(string $nomclient): self
    {
        $this->nomclient = $nomclient;

        return $this;
    }

    public function getPrenomclient(): ?string
    {
        return $this->prenomclient;
    }

    public function setPrenomclient(string $prenomclient): self
    {
        $this->prenomclient = $prenomclient;

        return $this;
    }

    public function getAdresseclient(): ?string
    {
        return $this->adresseclient;
    }

    public function setAdresseclient(string $adresseclient): self
    {
        $this->adresseclient = $adresseclient;

        return $this;
    }

    public function getEmailclient(): ?string
    {
        return $this->emailclient;
    }

    public function setEmailclient(string $emailclient): self
    {
        $this->emailclient = $emailclient;

        return $this;
    }

    public function getTelclient(): ?string
    {
        return $this->telclient;
    }

    public function setTelclient(string $telclient): self
    {
        $this->telclient = $telclient;

        return $this;
    }

    public function getGenre(): ?string
    {
        return $this->genre;
    }

    public function setGenre(string $genre): self
    {
        $this->genre = $genre;

        return $this;
    }

    public function getCin(): ?string
    {
        return $this->cin;
    }

    public function setCin(string $cin): self
    {
        $this->cin = $cin;

        return $this;
    }

    public function getTypeclient(): ?string
    {
        return $this->typeclient;
    }

    public function setTypeclient(string $typeclient): self
    {
        $this->typeclient = $typeclient;

        return $this;
    }


}
