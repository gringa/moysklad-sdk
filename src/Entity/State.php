<?php

namespace MoySkladSDK\Entity;

use MoySkladSDK\Annotation\Readonly;

/**
 * Class State
 * Статусы докуметов
 * @author gringa <gringa@gringa.me>
 * @licence MIT
 * @link https://dev.moysklad.ru/doc/api/remap/1.2/dictionaries/#suschnosti-statusy-dokumentow
 */
class State extends MetaEntity
{
    public const STATE_TYPE = [
        'Regular' => 'Обычный (значение по умолчанию)',
        'Successful' => 'Финальный положительный',
        'Unsuccessful' => 'Финальный отрицательный',
    ];
    /**
     * Цвет Статуса
     * @var string
     */
    public string $color;
    /**
     * Тип сущности, к которой относится Статус (ключевое слово в рамках JSON API)
     * @Readonly
     * @var string
     */
    public string $entityType;
    /**
     * Наименование Статуса
     * @var string
     */
    public string $name;
    /**
     * Тип Статуса
     * @var string
     */
    public string $stateType;
}
