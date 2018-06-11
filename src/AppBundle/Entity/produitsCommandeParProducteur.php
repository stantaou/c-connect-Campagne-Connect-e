<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * produitsCommandeParProducteur
 *
 * @ORM\Table(name="produits_commande_par_producteur")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\produitsCommandeParProducteurRepository")
 */
class produitsCommandeParProducteur
{
  

    /**
     * @var int
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\Column(name="idCommandeProducteur", type="integer")
     */
    private $idCommandeProducteur;

    /**
     * @var int
     *
     * @ORM\Column(name="idProduit", type="integer")
     */
    private $idProduit;

    /**
     * @var float
     *
     * @ORM\Column(name="quantiteAchetee", type="float")
     */
    private $quantiteAchetee;

    /**
     * @var float
     *
     * @ORM\Column(name="prixCommande", type="float")
     */
    private $prixCommande;


    /**
     * Set idCommandeProducteur
     *
     * @param integer $idCommandeProducteur
     *
     * @return produitsCommandeParProducteur
     */
    public function setIdCommandeProducteur($idCommandeProducteur)
    {
        $this->idCommandeProducteur = $idCommandeProducteur;

        return $this;
    }

    /**
     * Get idCommandeProducteur
     *
     * @return int
     */
    public function getIdCommandeProducteur()
    {
        return $this->idCommandeProducteur;
    }

    /**
     * Set idProduit
     *
     * @param integer $idProduit
     *
     * @return produitsCommandeParProducteur
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
     * Set quantiteAchetee
     *
     * @param float $quantiteAchetee
     *
     * @return produitsCommandeParProducteur
     */
    public function setQuantiteAchetee($quantiteAchetee)
    {
        $this->quantiteAchetee = $quantiteAchetee;

        return $this;
    }

    /**
     * Get quantiteAchetee
     *
     * @return float
     */
    public function getQuantiteAchetee()
    {
        return $this->quantiteAchetee;
    }

    /**
     * Set prixCommande
     *
     * @param float $prixCommande
     *
     * @return produitsCommandeParProducteur
     */
    public function setPrixCommande($prixCommande)
    {
        $this->prixCommande = $prixCommande;

        return $this;
    }

    /**
     * Get prixCommande
     *
     * @return float
     */
    public function getPrixCommande()
    {
        return $this->prixCommande;
    }
}

