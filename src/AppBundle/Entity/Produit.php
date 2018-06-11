<?php

namespace AppBundle\Entity;

use AppBundle\Entity\TypeProduit;
use Doctrine\ORM\Mapping as ORM;

/**
 * Produit
 *
 * @ORM\Table(name="produit")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ProduitRepository")
 */
class Produit
{
      /**
     * @var int
     *
     * @ORM\Column(name="idProduit", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")

     */
    private $idProduit;

    /**
     * @var int
     *
     * @ORM\Column(name="idProducteur", type="integer")
     */
    private $idProducteur;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=255)
     */
    private $nom;

    /**
     * @var float
     *
     * @ORM\Column(name="quantiteMinimaleAchat", type="float")
     */
    private $quantiteMinimaleAchat;

    /**
     * @var float
     *
     * @ORM\Column(name="stock", type="float")
     */
    private $stock;

    /**
     * @var float
     *
     * @ORM\Column(name="prixAuKg", type="float")
     */
    private $prixAuKg;

    /**
     * @var string
     *
     * @ORM\Column(name="typeProduit", type="string", length=255)
     */
    private $typeProduit;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateMiseEnLigne", type="date")
     */
    private $dateMiseEnLigne;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="datePeremption", type="date")
     */
    private $datePeremption;

    /**
     * @var string
     *
     * @ORM\Column(name="slug", type="string", length=255)
     */
    private $slug;
    
    /**
     * Set idProduit
     * 
     * @param integer $idProduit
     * @return int
     */
    public function setIdProduit($idProduit)
    {
    $this->idProduit = $idProduit;
    
    
        return $this;
    }

    /**
     * Get idProduit
     *
     * @return int
     */
    public function getIdProduit()
    {
        return $this->idProduit;
    }

    /**
     * Set idProducteur
     *
     * @param integer $idProducteur
     *
     * @return Produit
     */
    public function setIdProducteur($idProducteur)
    {
        $this->idProducteur = $idProducteur;

        return $this;
    }

    /**
     * Get idProducteur
     *
     * @return int
     */
    public function getIdProducteur()
    {
        return $this->idProducteur;
    }

    /**
     * Set nom
     *
     * @param string $nom
     *
     * @return Produit
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set quantiteMinimaleAchat
     *
     * @param float $quantiteMinimaleAchat
     *
     * @return Produit
     */
    public function setQuantiteMinimaleAchat($quantiteMinimaleAchat)
    {
        $this->quantiteMinimaleAchat = $quantiteMinimaleAchat;

        return $this;
    }

    /**
     * Get quantiteMinimaleAchat
     *
     * @return float
     */
    public function getQuantiteMinimaleAchat()
    {
        return $this->quantiteMinimaleAchat;
    }

    /**
     * Set stock
     *
     * @param float $stock
     *
     * @return Produit
     */
    public function setStock($stock)
    {
        $this->stock = $stock;

        return $this;
    }

    /**
     * Get stock
     *
     * @return float
     */
    public function getStock()
    {
        return $this->stock;
    }

    /**
     * Set prixAuKg
     *
     * @param float $prixAuKg
     *
     * @return Produit
     */
    public function setPrixAuKg($prixAuKg)
    {
        $this->prixAuKg = $prixAuKg;

        return $this;
    }

    /**
     * Get prixAuKg
     *
     * @return float
     */
    public function getPrixAuKg()
    {
        return $this->prixAuKg;
    }

    /**
     * Set typeProduit
     *
     * @param string $typeProduit
     *
     * @return Produit
     */
    public function setTypeProduit($typeProduit)
    {
        if (!in_array($typeProduit, TypeProduit::getTousTypesProduits())) {
            throw new \InvalidArgumentException("Type invalide");
        }
        
        $this->typeProduit = $typeProduit;
        
        return $this;
    }

    /**
     * Get typeProduit
     *
     * @return string
     */
    public function getTypeProduit()
    {
        return $this->typeProduit;
    }

    /**
     * Set dateMiseEnLigne
     *
     * @param \DateTime $dateMiseEnLigne
     *
     * @return Produit
     */
    public function setDateMiseEnLigne($dateMiseEnLigne)
    {
        $this->dateMiseEnLigne = $dateMiseEnLigne;

        return $this;
    }

    /**
     * Get dateMiseEnLigne
     *
     * @return \DateTime
     */
    public function getDateMiseEnLigne()
    {
        return $this->dateMiseEnLigne;
    }

    /**
     * Set datePeremption
     *
     * @param \DateTime $datePeremption
     *
     * @return Produit
     */
    public function setDatePeremption($datePeremption)
    {
        $this->datePeremption = $datePeremption;

        return $this;
    }

    /**
     * Get datePeremption
     *
     * @return \DateTime
     */
    public function getDatePeremption()
    {
        return $this->datePeremption;
    }

    /**
     * Set slug
     *
     * @param string $slug
     *
     * @return Produit
     */
    public function setSlug($slug)
    {
        $this->slug = $slug;

        return $this;
    }

    /**
     * Get slug
     *
     * @return string
     */
    public function getSlug()
    {
        return $this->slug;
    }
}

