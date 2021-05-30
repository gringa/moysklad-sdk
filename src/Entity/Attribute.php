<?php

namespace MoySkladSDK\Entity;

use MoySkladSDK\Annotation\Readonly;
use MoySkladSDK\Annotation\MoveIfArray;

/**
 * Class Attribute
 * Дополнительные поля сущностей
 * @package MoySkladSDK\Entity
 * @author gringa <gringa@gringa.me>
 * @licence MIT
 */
class Attribute extends MetaEntity
{
    /**
     * Наименование
     * @var string
     */
    public string $name;
    /**
     * Обязательное поле
     * @var bool
     */
    public bool $required;
    /**
     * Тип
     * @var string
     */
    public string $type;
    /**
     * Значение
     * @MoveIfArray(property="valueCustom")
     * @var string
     */
    public string $value;
    /**
     * Значение если поле из доп.справончника
     * @Readonly
     * @var CustomEntity
     */
    public CustomEntity $valueCustom;
}
