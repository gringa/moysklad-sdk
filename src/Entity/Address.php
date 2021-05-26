<?php

namespace MoySkladSDK\Entity;

/**
 * Class Address
 * Адрес
 * @package MoySkladSDK\Entity
 * @author gringa <gringa@gringa.me>
 * @licence MIT
 * @link https://dev.moysklad.ru/doc/api/remap/1.2/dictionaries/#suschnosti-kontragent-kontragenty-attributy-suschnosti-adres
 */
class Address
{
    /**
     * Другое
     * @var string
     */
    public string $addInfo;
    /**
     * Квартриа
     * @var string
     */
    public string $apartment;
    /**
     * Город
     * @var string
     */
    public string $city;
    /**
     * Комментарий
     * @var string
     */
    public string $comment;
    /**
     * Метаданные страны
     * @var Country
     */
    public Country $country;
    /**
     * Дом
     * @var string
     */
    public string $house;
    /**
     * Почтовый индекс
     * @var string
     */
    public string $postalCode;
    /**
     * Метаданные региона
     * @var Region
     */
    public Region $region;
    /**
     * Улица
     * @var string
     */
    public string $street;
}
