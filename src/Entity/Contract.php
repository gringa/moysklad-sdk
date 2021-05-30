<?php

namespace MoySkladSDK\Entity;

use MoySkladSDK\Annotation\ArrayClass;
use MoySkladSDK\Annotation\Readonly;

/**
 * Class Contract
 * Договор
 * @package MoySkladSDK\Entity
 * @author gringa <gringa@gringa.me>
 * @licence MIT
 * @link https://dev.moysklad.ru/doc/api/remap/1.2/dictionaries/#suschnosti-dogowor
 */
class Contract extends MetaEntity
{
    /**
     * Метаданные Контрагента
     * @var Counterparty
     */
    public Counterparty $agent;
    /**
     * Метаданные счета контрагента
     * @var Account
     */
    public Account $agentAccount;
    /**
     * Добавлено ли в архив
     * @var bool
     */
    public bool $archived;
    /**
     * Коллекция доп. полей
     * @ArrayClass(type="MoySkladSDK\Entity\Attribute")
     * @var array|Attribute[]
     */
    public array $attributes;
    /**
     * Код
     * @var string
     */
    public string $code;
    /**
     * Тип Договора
     * @var string
     */
    public string $contractType;
    /**
     * Описание
     * @var string
     */
    public string $description;
    /**
     * Внешний код
     * @var string
     */
    public string $externalCode;
    /**
     * Метаданные отдела сотрудника
     * @var Group
     */
    public Group $group;
    /**
     * Дата Договора
     * @var \DateTime
     */
    public \DateTime $moment;
    /**
     * Наименование
     * @var string
     */
    public string $name;
    /**
     * Метаданные счета вашего юрлица
     * @var Account
     */
    public Account $organizationAccount;
    /**
     * Метаданные вашего юрлица
     * @var Organization
     */
    public Organization $ownAgent;
    /**
     * Метаданные владельца (Сотрудника)
     * @var Employee
     */
    public Employee $owner;
    /**
     * Метаданные валюты
     * @var Rate
     */
    public Rate $rate;
    /**
     * Вознаграждение в процентах (от 0 до 100)
     * @var int
     */
    public int $rewardPercent;
    /**
     * Тип Вознаграждения
     * @var string
     */
    public string $rewardType;
    /**
     * Общий доступ
     * @var bool
     */
    public bool $shared;
    /**
     * Метаданные статуса договора
     * @var State
     */
    public State $state;
    /**
     * Сумма Договора
     * @var int
     */
    public int $sum;
    /**
     * Время последнего обновления
     * @Readonly
     * @var \DateTime
     */
    public \DateTime $updated;
}
