<?php

namespace MoySkladSDK\Entity;

use MoySkladSDK\Annotation\ArrayClass;

/**
 * Class ListEntity
 * Сущность списка
 * @package MoySkladSDK\Entity
 * @author gringa <gringa@gringa.me>
 * @licence MIT
 */
class ListEntity extends MetaEntity
{
    //public Context $context; - этого пока нету
    /**
     * Массив сущностей
     * @ArrayClass(type="MoySkladSDK\Entity\MetaEntity")
     * @var array|MetaEntity[]
     */
    public array $rows;
}
