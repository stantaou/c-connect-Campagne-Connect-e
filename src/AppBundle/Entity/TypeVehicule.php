<?php

namespace AppBundle\Entity;

abstract class TypeVehicule
{
    const TYPE_MOTO = "Deux roues motorisé";
    const TYPE_VELO = "Deux roues non motorisé";
    const TYPE_VOITURE= "Voiture";
    const TYPE_CAMIONNETTE = "Grosse Voiture ou Camionnette";
    
    protected static $typeVehicule = [
        self::TYPE_MOTO => "Deux roues motorisé",
        self::TYPE_VELO => "Deux roues non motorisé",
        self::TYPE_VOITURE => "Voiture",
        self::TYPE_CAMIONNETTE => "Camion",
    ];
    
    public static function getTypeVehicule($typeShortName)
    {
        if (!isset(static::$typeVehicule[$typeShortName])) {
            return "Type Inconnu ($typeShortName)";
        }
        
        return static::$typeVehicule[$typeShortName];
    }
    
    public static function getTousTypesVehicules()
    {
        return [
            self::TYPE_MOTO,
            self::TYPE_VELO,
            self::TYPE_VOITURE,
            self::TYPE_CAMIONNETTE,
        ];
    }
}