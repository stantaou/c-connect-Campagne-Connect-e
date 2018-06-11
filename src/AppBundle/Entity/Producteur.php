<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Producteur
 *
 * @ORM\Table(name="producteur")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ProducteurRepository")
 */
class Producteur
{

    /**
     * @var int
     *
     * @ORM\Column(name="idProducteur", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $idProducteur;

    /**
     * @var int
     *
     * @ORM\Column(name="idUtilisateur", type="integer")
     */
    private $idUtilisateur;

    /**
     * @var int
     *
     * @ORM\Column(name="numeroSIRET", type="integer")
     */
    private $numeroSIRET;

    /**
     * @var string
     *
     * @ORM\Column(name="descriptionProduction", type="string", length=255)
     */
    private $descriptionProduction;

    /**
     * @var string
     *
     * @ORM\Column(name="nomDomaine", type="string", length=255)
     */
    private $nomDomaine;

     /**
     * @var string
     *
     * @ORM\Column(name="slogan", type="string", length=255)
     */
    private $slogan;

    /**
     * @var string
     *
     * @ORM\Column(name="horairesDelivrance", type="string", length=255)
     */
    private $horairesDelivrance;


    /**
     * Set idProducteur
     *
     * @param integer $idProducteur
     *
     * @return Producteur
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
     * Set idUtilisateur
     *
     * @param integer $idUtilisateur
     *
     * @return Producteur
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
     * Set numeroSIRET
     *
     * @param integer $numeroSIRET
     *
     * @return Producteur
     */
    public function setNumeroSIRET($numeroSIRET)
    {
        $this->numeroSIRET = $numeroSIRET;

        return $this;
    }

    /**
     * Get numeroSIRET
     *
     * @return int
     */
    public function getNumeroSIRET()
    {
        return $this->numeroSIRET;
    }

    /**
     * Set descriptionProduction
     *
     * @param string $descriptionProduction
     *
     * @return Producteur
     */
    public function setDescriptionProduction($descriptionProduction)
    {
        $this->descriptionProduction = $descriptionProduction;

        return $this;
    }

    /**
     * Get descriptionProduction
     *
     * @return string
     */
    public function getDescriptionProduction()
    {
        return $this->descriptionProduction;
    }

    /**
     * Set nomDomaine
     *
     * @param string $nomDomaine
     *
     * @return Producteur
     */
    public function setNomDomaine($nomDomaine)
    {
        $this->nomDomaine = $nomDomaine;

        return $this;
    }

    /**
     * Get nomDomaine
     *
     * @return string
     */
    public function getNomDomaine()
    {
        return $this->nomDomaine;
    }

    /**
     * Set sl
     *
     * @param string $sl
     *
     * @return Producteur
     */
    public function setSl($sl)
    {
        $this->sl = $sl;

        return $this;
    }

     /**
     * Get slogan
     *
     * @return string
     */
    public function getSlogan()
    {
        return $this->slogan;
    }

    /**
     * Set horairesDelivrance
     *
     * @param string $horairesDelivrance
     *
     * @return Producteur
     */
    public function setHorairesDelivrance($horairesDelivrance)
    {
        $this->horairesDelivrance = $horairesDelivrance;

        return $this;
    }

    /**
     * Get horairesDelivrance
     *
     * @return string
     */
    public function getHorairesDelivrance()
    {
        return $this->horairesDelivrance;
    }
}

