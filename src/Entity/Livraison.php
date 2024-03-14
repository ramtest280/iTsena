<?php

namespace App\Entity;

use App\Repository\LivraisonRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: LivraisonRepository::class)]
class Livraison
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $Chauffeur = null;

    #[ORM\Column]
    private ?int $Nombre_colis = null;

    #[ORM\Column]
    private ?\DateTimeImmutable $createdAt = null;

    #[ORM\Column]
    private ?int $Frais = null;

    #[ORM\ManyToOne]
    private ?Fournisseur $Fournisseur = null;

    #[ORM\ManyToOne]
    private ?Produit $Produit = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getChauffeur(): ?string
    {
        return $this->Chauffeur;
    }

    public function setChauffeur(string $Chauffeur): static
    {
        $this->Chauffeur = $Chauffeur;

        return $this;
    }

    public function getNombreColis(): ?int
    {
        return $this->Nombre_colis;
    }

    public function setNombreColis(int $Nombre_colis): static
    {
        $this->Nombre_colis = $Nombre_colis;

        return $this;
    }

    public function getCreatedAt(): ?\DateTimeImmutable
    {
        return $this->createdAt;
    }

    public function setCreatedAt(\DateTimeImmutable $createdAt): static
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    public function getFrais(): ?int
    {
        return $this->Frais;
    }

    public function setFrais(int $Frais): static
    {
        $this->Frais = $Frais;

        return $this;
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
}
