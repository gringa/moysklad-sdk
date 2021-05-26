<?php

namespace MoySkladSDK\Entity;

use MoySkladSDK\Annotation\Readonly;

/**
 * Class Country
 * Страна
 * @package MoySkladSDK\Entity
 * @author gringa <gringa@gringa.me>
 * @licence MIT
 * @link https://dev.moysklad.ru/doc/api/remap/1.2/dictionaries/#suschnosti-strana
 */
class Country extends MetaEntity
{
    /**
     * Код
     * @var string
     */
    public string $code;
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
     * Отдел-владелец
     * @var Group
     */
    public Group $group;
    /**
     * Наименование
     * @var string
     */
    public string $name;
    /**
     * Сотрудник-владелец
     * @var Employee
     */
    public Employee $owner;
    /**
     * Общий доступ
     * @var bool
     */
    public bool $shared;
    /**
     * Момент последнего обновления
     * @Readonly
     * @var \DateTime
     */
    public \DateTime $updated;
}
