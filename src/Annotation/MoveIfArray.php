<?php

namespace MoySkladSDK\Annotation;

/**
 * Class TypeToField
 * Аннатоция для разверетывания массива в другое свойство
 * @package MoySkladSDK\Annotation
 * @Annotation
 * @Target({"PROPERTY"})
 * @author gringa <gringa@gringa.me>
 * @licence MIT
 */
final class MoveIfArray
{
    public string $property;
}
