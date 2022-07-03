<?php

namespace App\Entity;

use App\Repository\ContactRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ContactRepository::class)]
class Contact
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'string', length: 255)]
    private $infoKine;

    #[ORM\Column(type: 'text')]
    private $infoContact;

    #[ORM\Column(type: 'text')]
    private $aideAsso;

    #[ORM\Column(type: 'text')]
    private $don;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getInfoKine(): ?string
    {
        return $this->infoKine;
    }

    public function setInfoKine(string $infoKine): self
    {
        $this->infoKine = $infoKine;

        return $this;
    }

    public function getInfoContact(): ?string
    {
        return $this->infoContact;
    }

    public function setInfoContact(string $infoContact): self
    {
        $this->infoContact = $infoContact;

        return $this;
    }

    public function getAideAsso(): ?string
    {
        return $this->aideAsso;
    }

    public function setAideAsso(string $aideAsso): self
    {
        $this->aideAsso = $aideAsso;

        return $this;
    }

    public function getDon(): ?string
    {
        return $this->don;
    }

    public function setDon(string $don): self
    {
        $this->don = $don;

        return $this;
    }
}
