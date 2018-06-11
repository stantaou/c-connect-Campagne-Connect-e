<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Commande
 * 
 * @ORM\Table(name="commande")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\CommandeRepository")
 */
class Commande
{
    /**
     * @var int
     * 
     * @ORM\Column(name="idCommande", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $idCommande;

    /**
     * @var int
     * 
     * @ORM\Column(name="idUtilisateur", type="integer")
     */
    private $idUtilisateur;

    /**
     * @var \DateTime
     * 
     * @ORM\Column(name="dateCommande", type="date")
     */
    private $dateCommande;

    /**
     * @var string
     * 
     * @ORM\Column(name="adresseArrivee", type="string", length=255)
     */
    private $adresseArrivee;

    /**
     * @var string
     * 
     * @ORM\Column(name="referenceCommande", type="string", length=255)
     */
    private $referenceCommande;

    /**
     * @var float
     * 
     * @ORM\Column(name="prixTotal", type="float")
     */
    private $prixTotal;
    
    /**
     * Set idCommande
     * 
     *@param $idCommande
     * @return int
     */
    public function setIdCommande($idCommande)
    {
        $this->idCommande =$idCommande;
        
        return $this;
    }
    

    /**
     * Get idCommande
     *
     * @return int
     */
    public function getIdCommande()
    {
        return $this->idCommande;
    }

    /**
     * Set idUtilisateur
     *
     * @param integer $idUtilisateur
     *
     * @return Commande
     */
    public function setIdUtilisateur($idUtilisateur)
    {
        $this->idUtilisateur = $idUtilisateur;

        return $this;
    }

    /**
     * Get idUtilisateur
     *
     * @return int
     */
    public function getIdUtilisateur()
    {
        return $this->idUtilisateur;
    }

    /**
     * Set dateCommande
     *
     * @param \DateTime $dateCommande
     *
     * @return Commande
     */
    public function setDateCommande($dateCommande)
    {
        $this->dateCommande = $dateCommande;

        return $this;
    }

    /**
     * Get dateCommande
     *
     * @return \DateTime
     */
    public function getDateCommande()
    {
        return $this->dateCommande;
    }

    /**
     * Set adresseArrivee
     *
     * @param string $adresseArrivee
     *
     * @return Commande
     */
    public function setAdresseArrivee($adresseArrivee)
    {
        $this->adresseArrivee = $adresseArrivee;

        return $this;
    }

    /**
     * Get adresseArrivee
     *
     * @return string
     */
    public function getAdresseArrivee()
    {
        return $this->adresseArrivee;
    }

    /**
     * Set referenceCommande
     *
     * @param string $referenceCommande
     *
     * @return Commande
     */
    public function setReferenceCommande($referenceCommande)
    {
        $this->referenceCommande = $referenceCommande;

        return $this;
    }

    /**
     * Get referenceCommande
     *
     * @return string
     */
    public function getReferenceCommande()
    {
        return $this->referenceCommande;
    }

    /**
     * Set prixTotal
     *
     * @param float $prixTotal
     *
     * @return Commande
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

