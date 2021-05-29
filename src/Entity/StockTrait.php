<?php

namespace MoySkladSDK\Entity;

use MoySkladSDK\Annotation\Readonly;

/**
 * Trait StockTrait
 * Состояние склада для Товаров/Комплектов/Серий/Модификаций
 * @package MoySkladSDK\Entity
 * @author gringa <gringa@gringa.me>
 * @licence MIT
 * @link https://dev.moysklad.ru/doc/api/remap/1.2/dictionaries/#suschnosti-assortiment
 */
trait StockTrait
{
    /**
     * Ожидается
     * @Readonly
     * @var float
     */
    public float $inTransit;
    /**
     * Доступно
     * @Readonly
     * @var float
     */
    public float $quantity;
    /**
     * В резерве
     * @Readonly
     * @var float
     */
    public float $reserve;
    /**
     * Остаток на складе
     * @Readonly
     * @var float
     */
    public float $stock;
}
