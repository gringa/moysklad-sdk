<?php

namespace MoySkladSDK\Entity;

use MoySkladSDK\Annotation\Readonly;

/**
 * Class Currency
 * Валюта
 * @package MoySkladSDK\Entity
 * @author gringa <gringa@gringa.me>
 * @licence MIT
 * @link https://dev.moysklad.ru/doc/api/remap/1.2/dictionaries/#suschnosti-valuta
 */
class Currency extends MetaEntity
{
    /**
     * Добавлена ли Валюта в архив
     * @var bool
     */
    public bool $archived;
    /**
     * Цифровой код
     * @var string
     */
    public string $code;
    /**
     * Является ли валюта валютой учета
     * @var bool
     */
    public bool $default;
    /**
     * Полное наименование
     * @var string
     */
    public string $fullName;
    /**
     * Признак обратного курса
     * @var bool
     */
    public bool $indirect;
    /**
     * Буквенный код
     * @var string
     */
    public string $isoCode;
    /**
     * Формы единиц целой части
     * @var Unit
     */
    public Unit $majorUnit;
    /**
     * Формы единиц дробной части
     * @var Unit
     */
    public Unit $minorUnit;
    /**
     * Кратность курса
     * @var int
     */
    public int $multiplicity;
    /**
     * Краткое наименование
     * @var string
     */
    public string $name;
    /**
     * Курс
     * @var float
     */
    public float $rate;
    /**
     * Способ обновления курса
     * @Readonly
     * @var bool
     */
    public bool $rateUpdateType;
    /**
     * Основана ли валюта на валюте из системного справочника
     * @Readonly
     * @var bool
     */
    public bool $system;

    protected static string $_path = '/entity/currency/';
    protected static string $_type = 'currency';
}
