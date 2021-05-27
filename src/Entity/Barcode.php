<?php

namespace MoySkladSDK\Entity;

/**
 * Class Barcode
 * Штрихкод
 * @package MoySkladSDK\Entity
 * @author gringa <gringa@gringa.me>
 * @licence MIT
 * @link https://dev.moysklad.ru/doc/api/remap/1.2/dictionaries/#suschnosti-towar-towary-atributy-wlozhennyh-suschnostej-shtrihkody
 */
class Barcode
{
    public string $code128;
    public string $ean13;
    public string $ean8;
    public string $gtin;
}
