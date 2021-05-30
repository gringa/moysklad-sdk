<?php

namespace MoySkladSDK\Entity;

use MoySkladSDK\Annotation\Readonly;

/**
 * Class CustomEntity
 * Пользовательский справочник
 * @package MoySkladSDK\Entity
 * @author gringa <gringa@gringa.me>
 * @licence MIT
 * @link https://dev.moysklad.ru/doc/api/remap/1.2/dictionaries/#suschnosti-otdel
 */
class CustomEntity extends MetaEntity
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
     * Наименование
     * @var string
     */
    public string $name;
    /**
     * Время последнего обновления элемента
     * @Readonly
     * @var \DateTime
     */
    public \DateTime $updated;
}
