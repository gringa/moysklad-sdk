<?php

declare(strict_types=1);

namespace MoySkladSDK\Annotation;

/**
 * Class ArrayClass
 * Аннотация для массива объектов
 * @package MoySkladSDK\Annotation
 * @Annotation
 * @Target({"PROPERTY"})
 * @author gringa <gringa@gringa.me>
 * @licence MIT
 */
final class ArrayClass
{
    public string $type;
}
