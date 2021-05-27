<?php

namespace MoySkladSDK\Entity;

use MoySkladSDK\Annotation\Readonly;

/**
 * Class ProductFolder
 * Группа товаров
 * @package MoySkladSDK\Entity
 * @author gringa <gringa@gringa.me>
 * @licence MIT
 * @link https://dev.moysklad.ru/doc/api/remap/1.2/dictionaries/#suschnosti-gruppa-towarow
 */
class ProductFolder extends MetaEntity
{
    /**
     * Добавлена ли в архив
     * @Readonly
     * @var bool
     */
    public bool $archived;
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
     * Реальный НДС %
     * @Readonly
     * @var int
     */
    public int $effectiveVat;
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
     * Наименование Группы товаров, в которую входит данная Группа товаро
     * @Readonly
     * @var string
     */
    public string $pathName;
    /**
     * Родительская группа
     * @var ProductFolder
     */
    public ProductFolder $productFolder;
    /**
     * Общий доступ
     * @var bool
     */
    public bool $shared;
    /**
     * Код системы налогообложения
     * @var string
     */
    public string $taxSystem;
    /**
     * Момент последнего обновления
     * @Readonly
     * @var \DateTime
     */
    public \DateTime $updated;
    /**
     * НДС %
     * @var int
     */
    public int $vat;
}
