<?php

namespace MoySkladSDK\Entity;

use MoySkladSDK\Annotation\Readonly;

/**
 * Class Region
 * Единицы измерения
 * @package MoySkladSDK\Entity
 * @author gringa <gringa@gringa.me>
 * @licence MIT
 * @link https://dev.moysklad.ru/doc/api/remap/1.2/dictionaries/#suschnosti-edinica-izmereniq
 */
class Uom extends MetaEntity
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
     * Метаданные отдела сотрудника
     * @var Group
     */
    public Group $group;
    /**
     * Наименование
     * @var string
     */
    public string $name;
    /**
     * Метаданные владельца
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
