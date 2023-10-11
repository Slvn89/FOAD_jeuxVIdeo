<?php

namespace App\Entity;

use App\Repository\JeuxRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: JeuxRepository::class)]
class Jeux
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $nom_jeu = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $genre = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $date_sortie = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $description = null;

    #[ORM\Column(nullable: true)]
    private ?int $note_moyenne = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $image = null;

    #[ORM\Column(nullable: true)]
    private ?bool $type = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomJeu(): ?string
    {
        return $this->nom_jeu;
    }

    public function setNomJeu(?string $nom_jeu): static
    {
        $this->nom_jeu = $nom_jeu;

        return $this;
    }

    public function getGenre(): ?string
    {
        return $this->genre;
    }

    public function setGenre(?string $genre): static
    {
        $this->genre = $genre;

        return $this;
    }

    public function getDateSortie(): ?\DateTimeInterface
    {
        return $this->date_sortie;
    }

    public function setDateSortie(?\DateTimeInterface $date_sortie): static
    {
        $this->date_sortie = $date_sortie;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): static
    {
        $this->description = $description;

        return $this;
    }

    public function getNoteMoyenne(): ?int
    {
        return $this->note_moyenne;
    }

    public function setNoteMoyenne(?int $note_moyenne): static
    {
        $this->note_moyenne = $note_moyenne;

        return $this;
    }

    public function getImage(): ?string
    {
        return $this->image;
    }

    public function setImage(?string $image): static
    {
        $this->image = $image;

        return $this;
    }

    public function isType(): ?bool
    {
        return $this->type;
    }

    public function setType(?bool $type): static
    {
        $this->type = $type;

        return $this;
    }
}
