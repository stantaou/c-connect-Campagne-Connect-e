<?php

namespace AppBundle\Entity;

abstract class TypePermis
{
    const TYPE_A1 = "Permis A1";
    const TYPE_APROGRESSIF = "Permis A Progressif";
    const TYPE_ADIRECT = "Permis A Direct";
    const TYPE_B = "Permis B";
    const TYPE_C = "Permis C";
    
    protected static $typePermis = [
        self::TYPE_A1 => "Permis A1",
        self::TYPE_APROGRESSIF => "Permis A Progressif",
        self::TYPE_ADIRECT => "Permis A Direct",
        self::TYPE_B => "Permis B",
        self::TYPE_C => "Permis C",
    ];
    
    public static function getTypePermis($typeShortName)
    {
        if (!isset(static::$typePermis[$typeShortName])) {
            return "Type Inconnu ($typeShortName)";
        }
        
        return static::$typePermis[$typeShortName];
    }
    
    public static function getTousTypesPermis()
    {
        return [
            self::TYPE_A1,
            self::TYPE_APROGRESSIF,
            self::TYPE_ADIRECT,
            self::TYPE_B,
            self::TYPE_C
        ];
    }
}