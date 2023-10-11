<?php

namespace App\Entity;

use App\Repository\JoueursRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: JoueursRepository::class)]
class Joueurs
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $nom_joueur = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $pseudonyme = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $date_naissance = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $email = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $password = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $avatar = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomJoueur(): ?string
    {
        return $this->nom_joueur;
    }

    public function setNomJoueur(?string $nom_joueur): static
    {
        $this->nom_joueur = $nom_joueur;

        return $this;
    }

    public function getPseudonyme(): ?string
    {
        return $this->pseudonyme;
    }

    public function setPseudonyme(?string $pseudonyme): static
    {
        $this->pseudonyme = $pseudonyme;

        return $this;
    }

    public function getDateNaissance(): ?\DateTimeInterface
    {
        return $this->date_naissance;
    }

    public function setDateNaissance(?\DateTimeInterface $date_naissance): static
    {
        $this->date_naissance = $date_naissance;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(?string $email): static
    {
        $this->email = $email;

        return $this;
    }

    public function getPassword(): ?string
    {
        return $this->password;
    }

    public function setPassword(?string $password): static
    {
        $this->password = $password;

        return $this;
    }

    public function getAvatar(): ?string
    {
        return $this->avatar;
    }

    public function setAvatar(?string $avatar): static
    {
        $this->avatar = $avatar;

        return $this;
    }
}
