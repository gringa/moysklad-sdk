<?php


namespace MoySkladSDK\Entity;


use MoySkladSDK\Annotation\ArrayClass;
use MoySkladSDK\Annotation\Readonly;

/**
 * Class Service
 * Услуга
 * @package MoySkladSDK\Entity
 * @author gringa <gringa@gringa.me>
 * @licence MIT
 * @link https://dev.moysklad.ru/doc/api/remap/1.2/dictionaries/#suschnosti-usluga
 */
class Service
{
    /**
     * Добавлен ли товар в архив
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
     * Штрихкоды Комплекта
     * @ArrayClass(type="MoySkladSDK\Entity\Barcode")
     * @var array
     */
    public array $barcodes;
    /**
     * Закупочная цена
     * @var Price
     */
    public Price $buyPrice;
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
     * Признак запрета скидок
     * @var bool
     */
    public bool $discountProhibited;
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
     * Метаданные массива Файлов (Максимальное количество файлов - 100)
     * @var ListEntity
     * @todo реализовать
     * @link https://dev.moysklad.ru/doc/api/remap/1.2/dictionaries/#suschnosti-fajly
     */
    public ListEntity $files;
    /**
     * Метаданные отдела сотрудника
     * @var Group
     */
    public Group $group;
    /**
     * Минимальная цена
     * @var Price
     */
    public Price $minPrice;
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
     * Наименование группы, в которую входит Товар
     * @Required
     * @var string
     */
    public string $pathName;
    /**
     * Признак предмета расчета
     * @var string
     */
    public string $paymentItemType;
    /**
     * Метаданные группы Товара
     * @var ProductFolder
     */
    public ProductFolder $productFolder;
    /**
     * Цены продажи
     * @ArrayClass(type="MoyskladSDK\Entity\Price")
     * @var array|Price[]
     */
    public array $salePrices;
    /**
     * Общий доступ
     * @var bool
     */
    public bool $shared;
    /**
     * ID синхронизации (UUID)
     * @Readonly
     * @var string
     */
    public string $syncId;
    /**
     * Код системы налогообложения
     * @var string
     */
    public string $taxSystem;
    /**
     * Еденицы измерения
     * @var Uom
     */
    public Uom $uom;
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
