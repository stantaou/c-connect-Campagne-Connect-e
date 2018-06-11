<?php

namespace AppBundle\Entity;

abstract class EtatLivraison
{
    const TYPE_ENCOURS = "En cours";
    const TYPE_LIVRE = "Livrée";
    const TYPE_ATTENTE = "En attente";
    const TYPE_ANNULEE = "Annulée";
    
    protected static $etatLivraison = [
        self::TYPE_ENCOURS => "En cours",
        self::TYPE_LIVRE => "Livrée",
        self::TYPE_ATTENTE => "En attente",
        self::TYPE_ANNULEE => "Annulée",
    ];
    
    public static function getEtatLivraison($typeShortName)
    {
        if (!isset(static::$etatLivraison[$typeShortName])) {
            return "Type Inconnu ($typeShortName)";
        }
        
        return static::$etatLivraison[$typeShortName];
    }
    
    public static function getTousEtatsLivraison()
    {
        return [
          self::TYPE_ENCOURS,
          self::TYPE_LIVRE,
          self::TYPE_ATTENTE,
          self::TYPE_ANNULEE,  
        ];
    }
}