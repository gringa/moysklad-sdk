<?php

namespace MoySkladSDK\Entity;

/**
 * Class Region
 * Регион
 * @package MoySkladSDK\Entity
 * @author gringa <gringa@gringa.me>
 * @licence MIT
 * @link https://dev.moysklad.ru/doc/api/remap/1.2/dictionaries/#suschnosti-region
 */
class Region extends MetaEntity
{
    /**
     * Код
     * @var string
     */
    public string $code;
    /**
     * Внешний код
     * @var string
     */
    public string $externalCode;
    /**
     * Наименование
     * @var string
     */
    public string $name;
    /**
     * Момент последнего обновления
     * @var \DateTime
     */
    public \DateTime $updated;
    /**
     * Версия
     * @var int
     */
    public int $version;
}
