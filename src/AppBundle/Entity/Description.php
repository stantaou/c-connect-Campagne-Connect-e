<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Description
 *
 * @ORM\Table(name="description")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\DescriptionRepository")
 */
class Description
{
    /**
     * @var int
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\Column(name="idDescription", type="integer")
     */
    private $idDescription;

    /**
     * @var int
     *
     * @ORM\Column(name="idProduit", type="integer")
     */
    private $idProduit;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=255)
     */
    private $description;

    /**
     * @var float
     *
     * @ORM\Column(name="tauxMatiereGrasse", type="float")
     */
    private $tauxMatiereGrasse;

    /**
     * @var string
     *
     * @ORM\Column(name="valeursNutritionnelles", type="string", length=255)
     */
    private $valeursNutritionnelles;

    /**
     * @var string
     *
     * @ORM\Column(name="methodeConservation", type="string", length=255)
     */
    private $methodesConservation;

    /**
     * @var string
     *
     * @ORM\Column(name="conseilsCuisine", type="string", length=255)
     */
    private $conseilsCuisine;


    /**
     * Set idDescription
     *
     * @param integer $idDescription
     *
     * @return Description
     */
    public function setIdDescription($idDescription)
    {
        $this->idDescription = $idDescription;

        return $this;
    }

    /**
     * Get idDescription
     *
     * @return int
     */
    public function getIdDescription()
    {
        return $this->idDescription;
    }

    /**
     * Set idProduit
     *
     * @param integer $idProduit
     *
     * @return Description
     */
    public function setIdProduit($idProduit)
    {
        $this->idProduit = $idProduit;

        return $this;
    }

    /**
     * Get idProduit
     *
     * @return integer
     */
    public function getIdProduit()
    {
        return $this->idProduit;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Description
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set tauxMatiereGrasse
     *
     * @param float $tauxMatiereGrasse
     *
     * @return Description
     */
    public function setTauxMatiereGrasse($tauxMatiereGrasse)
    {
        $this->tauxMatiereGrasse = $tauxMatiereGrasse;

        return $this;
    }

    /**
     * Get tauxMatiereGrasse
     *
     * @return float
     */
    public function getTauxMatiereGrasse()
    {
        return $this->tauxMatiereGrasse;
    }

    /**
     * Set valeursNutritionnelles
     *
     * @param string $valeursNutritionnelles
     *
     * @return Description
     */
    public function setValeursNutritionnelles($valeursNutritionnelles)
    {
        $this->valeursNutritionnelles = $valeursNutritionnelles;

        return $this;
    }

    /**
     * Get valeursNutritionnelles
     *
     * @return string
     */
    public function getValeursNutritionnelles()
    {
        return $this->valeursNutritionnelles;
    }

    /**
     * Set methodesConservation
     *
     * @param string $methodesConservation
     *
     * @return Description
     */
    public function setMethodesConservation($methodesConservation)
    {
        $this->methodesConservation = $methodesConservation;

        return $this;
    }

    /**
     * Get methodesConservation
     *
     * @return string
     */
    public function getMethodesConservation()
    {
        return $this->methodesConservation;
    }

    /**
     * Set conseilsCuisine
     *
     * @param string $conseilsCuisine
     *
     * @return Description
     */
    public function setConseilsCuisine($conseilsCuisine)
    {
        $this->conseilsCuisine = $conseilsCuisine;

        return $this;
    }

    /**
     * Get conseilsCuisine
     *
     * @return string
     */
    public function getConseilsCuisine()
    {
        return $this->conseilsCuisine;
    }
}

