<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use AppBundle\Entity\EtatLivraison;

/**
 * CommandeParProducteur
 * 
 * @ORM\Table(name="commandeparproducteur")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\commandeParProducteurRepository")
 */
class CommandeParProducteur
{


    /**
     * @var int
     * 
     * @ORM\Column(name="idCommandeProducteur", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $idCommandeProducteur;

    /**
     * @var int
     * 
     * @ORM\Column(name="idProducteur", type="integer")
     */
    private $idProducteur;

    /**
     * @var int
     * 
     * @ORM\Column(name="idLivreur", type="integer")
     */
    private $idLivreur;

    /**
     * @var string
     * 
     * @ORM\Column(name="EtatLivraison", type="string", length=255)
     */
    private $etatLivraison;


    /**
     * Set idCommandeProducteur
     *
     * @param integer $idCommandeProducteur
     *
     * @return CommandeParProducteur
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
     * Set idProducteur
     *
     * @param integer $idProducteur
     *
     * @return CommandeParProducteur
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
     * Set idLivreur
     *
     * @param integer $idLivreur
     *
     * @return CommandeParProducteur
     */
    public function setIdLivreur($idLivreur)
    {
        $this->idLivreur = $idLivreur;

        return $this;
    }

    /**
     * Get idLivreur
     *
     * @return int
     */
    public function getIdLivreur()
    {
        return $this->idLivreur;
    }

    /**
     * Set etatLivraison
     *
     * @param string $etatLivraison
     *
     * @return CommandeParProducteur
     */
    public function setEtatLivraison($etatLivraison)
    {
        if (!in_array($etatLivraison, EtatLivraison::getTousEtatsLivraison())) {
            throw new \InvalidArgumentException("Type invalide");
        }
        
        $this->etatLivraison = $etatLivraison;

        return $this;
    }

    /**
     * Get etatLivraison
     *
     * @return string
     */
    public function getEtatLivraison()
    {
        return $this->etatLivraison;
    }
}

