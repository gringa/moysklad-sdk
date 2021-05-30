<?php

namespace MoySkladSDK\Entity;

use MoySkladSDK\Annotation\ArrayClass;
use MoySkladSDK\Annotation\Readonly;

/**
 * Class Project
 * @package MoySkladSDK\Entity
 * @author gringa <gringa@gringa.me>
 * @licence MIT
 * @link https://dev.moysklad.ru/doc/api/remap/1.2/dictionaries/#suschnosti-proekt
 */
class Project extends MetaEntity
{
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
     * Метаданные владельца (Сотрудника)
     * @var Employee
     */
    public Employee $owner;
    /**
     * Общий доступ
     * @var bool
     */
    public bool $shared;
    /**
     * Время последнего обновления
     * @Readonly
     * @var \DateTime
     */
    public \DateTime $updated;
}
