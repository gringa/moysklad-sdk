<?php

namespace MoySkladSDK\Entity;

/**
 * Class PriceType
 * Типы цен
 * @package MoySkladSDK\Entity
 * @author gringa <gringa@gringa.me>
 * @licence MIT
 * @link https://dev.moysklad.ru/doc/api/remap/1.2/dictionaries/#suschnosti-tipy-cen
 */
class PriceType extends MetaEntity
{
    /**
     * Внешний код
     * @var string
     */
    public string $externalCode;
    /**
     * Наименование
     * @var string
     */
    public string $name;

    protected static string $_path = '/entity/pricetype/';
    protected static string $_type = 'pricetype';
}
