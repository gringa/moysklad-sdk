<?php

namespace MoySkladSDK\Entity;

use MoySkladSDK\Annotation\ArrayClass;
use MoySkladSDK\Annotation\Readonly;

/**
 * Class Barcode
 * Упаковка
 * @package MoySkladSDK\Entity
 * @author gringa <gringa@gringa.me>
 * @licence MIT
 * @link https://dev.moysklad.ru/doc/api/remap/1.2/dictionaries/#suschnosti-towar-towary-atributy-wlozhennyh-suschnostej-upakowki-towara
 */
class Pack
{
    /**
     * Массив штрихкодов упаковок товаров
     * @ArrayClass(Moysklad\Entity\Barcode)
     * @var array
     */
    public array $barcodes;
    /**
     * ID упаковки товара
     * @Readonly
     * @var string
     */
    public string $id;
    /**
     * Количество Товаров в упаковке данного вида
     * @var int
     */
    public int $quantity;
    /**
     * Метаданные единиц измерения
     * @var Uom
     */
    public Uom $uom;
}
