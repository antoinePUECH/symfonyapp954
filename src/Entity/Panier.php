<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;


/**
 * @ORM\Entity(repositoryClass="App\Repository\PanierRepository")
 */
class Panier
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     */
    private $quantite;

    /**
     * @ORM\Column(type="datetime")
     */
    private $date_ajout;

    /**
     * ORM\Column(type="boolean")
     */
    // private $etat;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Produit", inversedBy="paniers")
     * @ORM\JoinColumn(nullable=false)
     */
    private $produit_add;
    
    public function __construct(){
        $this->date_ajout = new \DateTime();
    }


    public function getId(): ?int
    {
        return $this->id;
    }

    public function getQuantite(): ?int
    {
        return $this->quantite;
    }

    public function setQuantite(int $quantite): self
    {
        $this->quantite = $quantite;

        return $this;
    }

    public function getDateAjout(): ?\DateTimeInterface
    {
        return $this->date_ajout;
    }

    public function setDateAjout(\DateTimeInterface $date_ajout): self
    {
        $this->date_ajout = $date_ajout;

        return $this;
    }

    // public function getEtat(): ?bool
    // {
    //     return $this->etat;
    // }

    // public function setEtat(bool $etat): self
    // {
    //     $this->etat = $etat;

    //     return $this;
    // }

    public function getProduitAdd(): ?produit
    {
        return $this->produit_add;
    }

    public function setProduitAdd(?produit $produit_add): self
    {
        $this->produit_add = $produit_add;

        return $this;
    }
}
