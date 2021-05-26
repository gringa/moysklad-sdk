<?php

namespace MoySkladSDK\Entity;

/**
 * Class BonusProgram
 * Бонусная программа
 * @package MoySkladSDK\Entity
 * @author gringa <gringa@gringa.me>
 * @licence MIT
 * @link https://dev.moysklad.ru/doc/api/remap/1.2/dictionaries/#suschnosti-bonusnaq-programma
 */
class BonusProgram extends MetaEntity
{
    /**
     * Индикатор, является ли бонусная программа активной на данный момент
     * @var bool
     */
    public bool $active;
    /**
     * Тэги контрагентов, к которым применяется бонусная программа
     * @var array|string[]
     */
    public array $agentTags;
    /**
     * Индикатор, действует ли скидка на всех контрагентов
     * @var bool
     */
    public bool $allAgents;
    /**
     * Индикатор, действует ли бонусная программа на все товары
     * @var bool
     */
    public bool $allProducts;
    /**
     * Курс начисления
     * @var int
     */
    public int $earnRateRoublesToPoint;
    /**
     * Разрешить одновременное начисление и списание бонусов
     * @var bool
     */
    public bool $earnWhileRedeeming;
    /**
     * Максимальный процент оплаты баллами
     * @var int
     */
    public int $maxPaidRatePercents;
    /**
     * Наименование Бонусной программы
     * @var string
     */
    public string $name;
    /**
     * Баллы начисляются через [N] дней
     * @var int
     */
    public int $postponedBonusesDelayDays;
    /**
     * Курс списания
     * @var int
     */
    public int $spendRatePointsToRouble;

    protected static string $_path = '/entity/bonusprogram/';
    protected static string $_type = 'bonusprogram';
}
