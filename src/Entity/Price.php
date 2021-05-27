<?php

namespace MoySkladSDK\Entity;

/**
 * Class Price
 * Цена
 * @package MoySkladSDK\Entity
 * @author gringa <gringa@gringa.me>
 * @licence MIT
 */
class Price
{
    /**
     * Валюта
     * @var Currency
     */
    public Currency $currency;
    /**
     * Тип цены
     * @var PriceType
     */
    public PriceType $priceType;
    /**
     * Цена
     * @var float
     */
    public float $value;
}
