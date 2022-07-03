<?php

namespace App\Entity;

use App\Repository\KineRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: KineRepository::class)]
class Kine extends User
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    public function getId(): ?int
    {
        return $this->id;
    }
}
