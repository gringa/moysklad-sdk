<?php

namespace MoySkladSDK\Entity;

use MoySkladSDK\Annotation\Readonly;

/**
 * Class Meta
 * Метаданные сущности
 * @package MoySkladSDK\Entity
 * @author gringa <gringa@gringa.me>
 * @licence MIT
 */
class Meta
{
    /**
     * Соотношение внутренних типов в к классам сущностей
     */
    private const TYPES = [
        'account' => Account::class,
        'contactperson' => ContactPerson::class,
        'counterparty' => Counterparty::class,
        'currency' => Currency::class,
        'customerorder' => CustomerOrder::class,
        'customerorderposition' => CustomerOrderPosition::class,
        'file' => File::class,
        'image' => Image::class,
        'note' => Note::class,
        'pricetype' => PriceType::class,
        'product' => Product::class
    ];

    /**
     * Ссылка на скачивание Изображения.
     * @Readonly
     * @var string
     */
    public string $downloadHref;
    /**
     * Ссылка на объект
     * @var string
     */
    public string $href;
    /**
     * Максимальное количество элементов в выданном списке. Максимальное количество элементов в списке равно 1000.
     * @Readonly
     */
    public int $limit;
    /**
     * Тип данных, которые приходят в ответ от сервиса, либо отправляются в теле запроса. В рамках данного API всегда равен application/json
     * @var string
     */
    public string $mediaType = "application/json";
    /**
     * Ссылка на метаданные сущности (Другой вид метаданных)
     * @var string
     */
    public string $metadataHref;
    public string $nextHref;
    /**
     * Отступ в выданном списке
     * @Readonly
     * @var int
     */
    public int $offset;
    /**
     * Размер выданного списка
     * @Readonly
     * @var int
     */
    public int $size;
    /**
     * Тип объекта
     * @var string
     */
    public string $type;
    /**
     * Ссылка на объект на UI
     * @Readonly
     * @var string
     */
    public string $uuidHref;

    /**
     * Возвращает имя класса сущности по её типу
     * @param string $type
     * @return string|null
     */
    public static function getClassNameByType(string $type): ?string
    {
        return self::TYPES[$type] ?? null;
    }
}
