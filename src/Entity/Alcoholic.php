<?php

namespace MoySkladSDK\Entity;

/**
 * Class Alcoholic
 * Поля алкогольной продукции
 * @package MoySkladSDK\Entity
 * @author gringa <gringa@gringa.me>
 * @licence MIT
 * @link https://dev.moysklad.ru/doc/api/remap/1.2/dictionaries/#suschnosti-towar-towary-atributy-wlozhennyh-suschnostej-ob-ekt-soderzhaschij-polq-alkogol-noj-produkcii
 */
class Alcoholic
{
    public bool $excise;
    public float $strength;
    public int $type;
    public float $volume;
}
