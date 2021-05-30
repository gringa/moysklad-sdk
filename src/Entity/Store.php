<?php

namespace MoySkladSDK\Entity;

use MoySkladSDK\Annotation\ArrayClass;
use MoySkladSDK\Annotation\Readonly;

/**
 * Class Store
 * Склад
 * @package MoySkladSDK\Entity
 * @author gringa <gringa@gringa.me>
 * @licence MIT
 * @link https://dev.moysklad.ru/doc/api/remap/1.2/dictionaries/#suschnosti-sklad
 */
class Store extends MetaEntity
{
    /**
     * Адрес склада
     * @var string
     */
    public string $address;
    /**
     * Адрес с детализацией по отдельным полям
     * @var Address
     */
    public Address $addressFull;
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
     * Комментарий
     * @var string
     */
    public string $description;
    /**
     * Внешний код
     * @var string
     */
    public string $externalCode;
    /**
     * Отдел сотрудника
     * @var Group
     */
    public Group $group;
    /**
     * Наименование
     * @var string
     */
    public string $name;
    /**
     * Владелец (Сотрудник)
     * @var Employee
     */
    public Employee $owner;
    /**
     * Метаданные родительского склада
     * @var Store
     */
    public Store $parent;
    /**
     * Группа Склада
     * @Readonly
     * @var string
     */
    public string $pathName;
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
