<?php

namespace App\Entity;

use App\Repository\StockRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: StockRepository::class)]
class Stock
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\ManyToOne]
    private ?Fournisseur $Fournisseur = null;

    #[ORM\ManyToOne]
    private ?Produit $Produit = null;

    #[ORM\Column]
    private ?int $Total = null;

    #[ORM\Column]
    private ?int $Gain = null;

    #[ORM\Column]
    private ?int $Prix_unitaire = null;

    #[ORM\Column]
    private ?int $Prix_vente = null;

    #[ORM\Column]
    private ?\DateTimeImmutable $CreatedAt = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getFournisseur(): ?Fournisseur
    {
        return $this->Fournisseur;
    }

    public function setFournisseur(?Fournisseur $Fournisseur): static
    {
        $this->Fournisseur = $Fournisseur;

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

    public function getTotal(): ?int
    {
        return $this->Total;
    }

    public function setTotal(int $Total): static
    {
        $this->Total = $Total;

        return $this;
    }

    public function getGain(): ?int
    {
        return $this->Gain;
    }

    public function setGain(int $Gain): static
    {
        $this->Gain = $Gain;

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

    public function getPrixVente(): ?int
    {
        return $this->Prix_vente;
    }

    public function setPrixVente(int $Prix_vente): static
    {
        $this->Prix_vente = $Prix_vente;

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
}
