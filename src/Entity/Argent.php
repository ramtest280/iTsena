<?php

namespace App\Entity;

use App\Repository\ArgentRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ArgentRepository::class)]
class Argent
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?int $Poids = null;

    #[ORM\Column]
    private ?int $Prix_unitaire = null;

    #[ORM\Column]
    private ?int $Avance = null;

    #[ORM\Column(nullable: true)]
    private ?int $Reste = null;

    #[ORM\Column]
    private ?int $Total = null;

    #[ORM\Column]
    private ?\DateTimeImmutable $CreatedAt = null;

    #[ORM\Column(nullable: true)]
    private ?\DateTimeImmutable $UpdatedAt = null;

    #[ORM\ManyToOne]
    private ?Cleint $Client = null;

    #[ORM\ManyToOne]
    private ?Produit $Produit = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPoids(): ?int
    {
        return $this->Poids;
    }

    public function setPoids(int $Poids): static
    {
        $this->Poids = $Poids;

        return $this;
    }

    public function getPrixUnitaire(): ?int
    {
        return $this->Prix_unitaire;
    }

    public function setPrixUnitaire(int $Prix_unitaire): static
    {
        $this->Prix_unitaire = $Prix_unitaire;

        return $this;
    }

    public function getAvance(): ?int
    {
        return $this->Avance;
    }

    public function setAvance(int $Avance): static
    {
        $this->Avance = $Avance;

        return $this;
    }

    public function getReste(): ?int
    {
        return $this->Reste;
    }

    public function setReste(?int $Reste): static
    {
        $this->Reste = $Reste;

        return $this;
    }

    public function getTotal(): ?int
    {
        return $this->Total;
    }

    public function setTotal(int $Total): static
    {
        $this->Total = $Total;

        return $this;
    }

    public function getCreatedAt(): ?\DateTimeImmutable
    {
        return $this->CreatedAt;
    }

    public function setCreatedAt(\DateTimeImmutable $CreatedAt): static
    {
        $this->CreatedAt = $CreatedAt;

        return $this;
    }

    public function getUpdatedAt(): ?\DateTimeImmutable
    {
        return $this->UpdatedAt;
    }

    public function setUpdatedAt(?\DateTimeImmutable $UpdatedAt): static
    {
        $this->UpdatedAt = $UpdatedAt;

        return $this;
    }

    public function getClient(): ?Cleint
    {
        return $this->Client;
    }

    public function setClient(?Cleint $Client): static
    {
        $this->Client = $Client;

        return $this;
    }

    public function getProduit(): ?Produit
    {
        return $this->Produit;
    }

    public function setProduit(?Produit $Produit): static
    {
        $this->Produit = $Produit;

        return $this;
    }
}
