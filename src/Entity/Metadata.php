<?php

namespace MoySkladSDK\Entity;

use MoySkladSDK\Annotation\ArrayClass;

/**
 * Class Metadata
 * Метаданные модели сущности
 * @package MoySkladSDK\Entity
 * @author gringa <gringa@gringa.me>
 * @licence MIT
 */
class Metadata extends MetaEntity
{
    /**
     * Создавать новые Сущности с меткой "Общий"
     * @var bool
     */
    public bool $createShared;
    /**
     * Список статусов сущности
     * @ArrayClass(type="MoySkladSDK\Entity\State")
     */
    public array $states;
}
