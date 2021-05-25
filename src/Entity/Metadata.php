<?php

namespace MoySkladSDK\Entity;

use MoySkladSDK\Annotation\ArrayClass;

/**
 * Class Metadata
 * @package MoySkladSDK\Entity
 */
class Metadata extends MetaEntity
{
    public bool $createShared;
    /**
     * @ArrayClass(type="MoySkladSDK\Entity\State")
     */
    public array $states;
}
