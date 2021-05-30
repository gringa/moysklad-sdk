<?php

namespace MoySkladSDK\Entity;

/**
 * Class Rate
 * Валюта в документах
 * @package MoySkladSDK\Entity
 * @author gringa <gringa@gringa.me>
 * @licence MIT
 * @link https://dev.moysklad.ru/doc/api/remap/1.2/documents/#dokumenty-obschie-swedeniq-valuta-w-dokumentah
 */
class Rate
{
    /**
     * Метаданные валюты
     * @var Currency
     */
    public Currency $currency;
    /**
     * Курс валюты в этом документе (содержится в ответе, если значение курса отлично от 1)
     * @var float
     */
    public float $value;
}
