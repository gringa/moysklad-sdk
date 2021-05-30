<?php

namespace MoySkladSDK\Entity;

use MoySkladSDK\Annotation\ArrayClass;
use MoySkladSDK\Annotation\Readonly;

/**
 * Class Product
 * Товар
 * @package MoySkladSDK\Entity
 * @author gringa <gringa@gringa.me>
 * @licence MIT
 * @link https://dev.moysklad.ru/doc/api/remap/1.2/dictionaries/#suschnosti-towar
 */
class Product extends MetaEntity
{
    use StockTrait;

    public const PRODUCT_PAYMENT_ITEM_TYPES = [
        'GOOD' => 'Товар',
        'EXCISABLE_GOOD' => 'Подакцизный товар',
        'COMPOUND_PAYMENT_ITEM' => 'Составной предмет расчета',
        'ANOTHER_PAYMENT_ITEM' => 'Иной предмет расчета',
    ];
    public const TAX_SYSTEMS = [
        'GENERAL_TAX_SYSTEM' => 'ОСН',
        'SIMPLIFIED_TAX_SYSTEM_INCOME' => 'УСН. Доход',
        'SIMPLIFIED_TAX_SYSTEM_INCOME_OUTCOME' => 'УСН. Доход-Расход',
        'UNIFIED_AGRICULTURAL_TAX' => 'ЕСХН',
        'PRESUMPTIVE_TAX_SYSTEM' => 'ЕНВД',
        'PATENT_BASED' => 'Патент',
    ];

    public const TRACKING_TYPES = [
        'NOT_TRACKED' => '',
        'TOBACCO' => 'Табак',
        'SHOES' => 'Обувь',
    ];

    /**
     * Объект, содержащий поля алкогольной продукции
     * @var Alcoholic
     */
    public Alcoholic $alcoholic;
    /**
     * Добавлен ли товар в архив
     * @var bool
     */
    public bool $archived;
    /**
     * Артикул
     * @var string
     */
    public string $article;
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
     * Метаданные Страны
     * @var Country
     */
    public Country $country;
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
     * Массив метаданных Изображений
     * @var ListEntity
     * @todo реализовать
     */
    public ListEntity $images;
    /**
     * Учет по серийным номерам. Не может быть указан вместе с alcoholic и weighed
     * @var bool
     */
    public bool $isSerialTrackable;
    /**
     * Неснижаемый остаток
     * @var int
     */
    public int $minimumBalance;
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
     * Упаковки Товара
     * @ArrayClass(type="MoyskladSDK\Entity\Pack")
     * @var array
     */
    public array $packs;
    /**
     * Управление состоянием частичного выбытия маркированного товара
     * @var bool
     */
    public bool $partialDisposal;
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
     * Код вида номенклатурной классификации медицинских средств индивидуальной защиты (EAN-13)
     * @var string
     */
    public string $ppeType;
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
     * Метаданные контрагента-поставщика
     * @var Counterparty
     */
    public Counterparty $supplier;
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
     * Серийные номера
     * @var array|string[]
     */
    public array $things;
    /**
     * Код ТН ВЭД
     * @var string
     */
    public string $tnved;
    /**
     * Тип маркируемой продукции
     * @var string
     */
    public string $trackingType;
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
     * Количество модификаций у данного товара
     * @Readonly
     * @var int
     */
    public int $variantsCount;
    /**
     * НДС %
     * @var int
     */
    public int $vat;
    /**
     * Объем
     * @var int
     */
    public int $volume;
    /**
     * Вес
     * @var int
     */
    public int $weight;

    protected static string $_path = '/entity/product/';
    protected static string $_type = 'product';
}
