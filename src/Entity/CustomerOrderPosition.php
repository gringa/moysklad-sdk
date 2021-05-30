<?php

namespace MoySkladSDK\Entity;

/**
 * Class CustomerOrderPosition
 * Позиция заказа покупателя
 * @package MoySkladSDK\Entity
 * @author gringa <gringa@gringa.me>
 * @licence MIT
 * @link https://dev.moysklad.ru/doc/api/remap/1.2/documents/#dokumenty-zakaz-pokupatelq
 */
class CustomerOrderPosition extends MetaEntity
{
    /**
     * Метаданные товара/услуги/серии/модификации, которую представляет собой позиция
     * @var MetaEntity
     */
    public MetaEntity $assortment;
    /**
     * Процент скидки или наценки. Наценка указывается отрицательным числом, т.е. -10 создаст наценку в 10%
     * @var int
     */
    public int $discount;
    /**
     * Упаковка товара
     * @var string
     */
    public string $pack;
    /**
     * Цена товара/услуги в копейках
     * @var float
     */
    public float $price;
    /**
     * Количество товаров/услуг данного вида в позиции.
     * Если позиция - товар, у которого включен учет по серийным номерам, то значение в этом поле всегда будет равно количеству серийных номеров для данной позиции в документе.
     * @var int
     */
    public int $quantity;
    /**
     * Резерв данной позиции
     * @var int
     */
    public int $reserve;
    /**
     * Доставлено
     * @var int
     */
    public int $shipped;
    /**
     * Код системы налогообложения
     * @var string
     */
    public string $taxSystem;
    /**
     * НДС, которым облагается текущая позиция
     * @var int
     */
    public int $vat;
}
