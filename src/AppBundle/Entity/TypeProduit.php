<?php
namespace AppBundle\Entity;

abstract class TypeProduit
{

    const TYPE_LEGUMES = "Legumes";

    const TYPE_FRUITS = "Fruits";

    const TYPE_ANIMAL = "Viandes, Poissons et Oeufs";

    const TYPE_BOISSONS = "Boissons et Alcools";

    const TYPE_LAITAGES = "Fromages et Laits";

    const TYPE_CONDIMENTS = "Condiments et Epices";

    const TYPE_CEREALES = "Cereales et Feculents";

    const TYPE_LIPIDES = "Huiles et Beurres";

    const TYPE_SUCRES = "Sucres, Friandises et Chocolats";

    /**
     *
     * @var array user friendly named type
     */
    protected static $typeName = [
        self::TYPE_LEGUMES => 'Legumes',
        self::TYPE_FRUITS => 'Fruits',
        self::TYPE_ANIMAL => 'Viandes, Poissons et Oeufs',
        self::TYPE_BOISSONS => 'Boissons et Alcools',
        self::TYPE_LAITAGES => 'Fromages et Laits',
        self::TYPE_CONDIMENTS => 'Condiments et Epices',
        self::TYPE_CEREALES => 'Cereales et Feculents',
        self::TYPE_LIPIDES => 'Huiles et Beurres',
        self::TYPE_SUCRES => 'Sucres, Friandises et Chocolats',
    ];

    /**
     * 
     * @param string $typeShortName
     * @return string
     */
    public static function getTypeProduit($typeShortName)
    {
        if (!isset(static::$typeName[$typeShortName])) {
            return "Type Inconnu ($typeShortName)";
        }
        
        return "$typeShortName";
    }

    /**
     *
     * @return array<string>
     */
    public static function getTousTypesProduits()
    {
        return [
            self::TYPE_LEGUMES,
            self::TYPE_FRUITS,
            self::TYPE_ANIMAL,
            self::TYPE_BOISSONS,
            self::TYPE_LAITAGES,
            self::TYPE_CONDIMENTS,
            self::TYPE_CEREALES,
            self::TYPE_LIPIDES,
            self::TYPE_SUCRES
        ];
    }
}