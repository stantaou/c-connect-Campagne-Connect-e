<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * produitsPanier
 *
 * @ORM\Table(name="produits_panier")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\produitsPanierRepository")
 */
class produitsPanier
{

    /**
     * @var int
     * 
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     *
     * @ORM\Column(name="idPanier", type="integer")
     */
    private $idPanier;

    /**
     * @var int
     *
     * @ORM\Column(name="idProduit", type="integer")
     */
    private $idProduit;

    /**
     * @var float
     *
     * @ORM\Column(name="quantitePreCommandee", type="float")
     */
    private $quantitePreCommandee;

    /**
     * @var float
     *
     * @ORM\Column(name="prixTotal", type="float")
     */
    private $prixTotal;


    /**
     * Set idPanier
     *
     * @param integer $idPanier
     *
     * @return produitsPanier
     */
    public function setIdPanier($idPanier)
    {
        $this->idPanier = $idPanier;

        return $this;
    }

    /**
     * Get idPanier
     *
     * @return int
     */
    public function getIdPanier()
    {
        return $this->idPanier;
    }

    /**
     * Set idProduit
     *
     * @param integer $idProduit
     *
     * @return produitsPanier
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
     * Set quantitePreCommandee
     *
     * @param float $quantitePreCommandee
     *
     * @return produitsPanier
     */
    public function setQuantitePreCommandee($quantitePreCommandee)
    {
        $this->quantitePreCommandee = $quantitePreCommandee;

        return $this;
    }

    /**
     * Get quantitePreCommandee
     *
     * @return float
     */
    public function getQuantitePreCommandee()
    {
        return $this->quantitePreCommandee;
    }

    /**
     * Set prixTotal
     *
     * @param float $prixTotal
     *
     * @return produitsPanier
     */
    public function setPrixTotal($prixTotal)
    {
        $this->prixTotal = $prixTotal;

        return $this;
    }

    /**
     * Get prixTotal
     *
     * @return float
     */
    public function getPrixTotal()
    {
        return $this->prixTotal;
    }
}

