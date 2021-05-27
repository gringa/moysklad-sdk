<?php

namespace MoySkladSDK\Entity;

/**
 * Class Assortment
 * Ассортимент
 * @package MoySkladSDK\Entity
 * @author gringa <gringa@gringa.me>
 * @licence MIT
 * @link https://dev.moysklad.ru/doc/api/remap/1.2/dictionaries/#suschnosti-assortiment
 */
class Assortment extends MetaEntity
{
    protected static string $_path = '/entity/assortment/';
    protected static string $_type = 'assortment';
}
