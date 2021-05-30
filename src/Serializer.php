<?php

namespace MoySkladSDK;

use Doctrine\Common\Annotations\AnnotationReader;
use MoySkladSDK\Annotation\ArrayClass;
use MoySkladSDK\Annotation\MoveIfArray;
use MoySkladSDK\Annotation\Readonly;
use MoySkladSDK\Entity\AttachedEntityTrait;
use MoySkladSDK\Entity\Meta;
use MoySkladSDK\Entity\MetaEntity;

/**
 * Class Serializer
 * Серилизатор/Десерилизатор для объектов
 * @package MoySkladSDK
 * @author gringa <gringa@gringa.me>
 * @licence MIT
 */
class Serializer
{
    /**
     * Разворчивание массива в экземпляр объекта
     * @param array $values
     * @param $object
     * @throws \ReflectionException
     */
    public static function arrayToObject(array $values, &$object)
    {
        if (is_object($object) && is_array($values)) {
            $ref = new \ReflectionClass($object);
            foreach ($values as $key => $item) {
                if ($ref->hasProperty($key)) {
                    $property = $ref->getProperty($key);
                    if (!$property->isStatic()) {
                        $private = $property->isPrivate() || $property->isProtected();
                        if ($private) {
                            $property->setAccessible(true);
                        }
                        $property->setValue($object, self::parseItem($item, $property));
                        if ($private) {
                            $property->setAccessible(false);
                        }
                    }
                }
            }
        }
    }

    /**
     * Разворачивание JSON строки в объект заданного типа
     * @param string $data JSON строка
     * @param string $type тип объекта, может быть как штатный (string|array) так и класс
     * @return array|bool|float|int|mixed|string
     * @throws \ReflectionException|\JsonException
     */
    public static function deserialize(string $data, string $type)
    {
        $data = json_decode($data, true, 512, JSON_THROW_ON_ERROR);
        return self::parse($data, $type);
    }

    /**
     * Приведение данных к определнному формату (разворачивание массива в новый экземпляр объекта)
     * @param array|bool|float|int|string $data
     * @param string $type тип может быть как штатный (string|array) так и класс
     * @return array|bool|float|int|mixed|string
     * @throws \ReflectionException
     */
    public static function parse($data, string $type)
    {
        if (is_array($data)) {
            if ('array' === $type || '' === $type) {
                $ret = [];
                foreach ($data as $key => $item) {
                    if (is_array($item)) {
                        $classType = $item['meta']['type'] ?? null;
                        if (is_null($classType)) {
                            $ret[$key] = $item;
                        } else {
                            $type = Meta::getClassNameByType($classType);
                            if (is_null($type)) {
                                $ret[$key] = $item;
                            } else {
                                $ret[$key] = self::parse($item, $type);
                            }
                        }
                    } else {
                        $ret[$key] = $item;
                    }
                }
                return $ret;
            }
            if (class_exists($type)) {
                if (MetaEntity::class === $type) {
                    $classType = $data['meta']['type'] ?? '';
                    if (is_null(Meta::getClassNameByType($classType))) {
                        return $data;
                    }
                    $type = Meta::getClassNameByType($classType);
                }
                $class = new $type();
                $ref = new \ReflectionClass($class);
                foreach ($data as $key => $item) {
                    if ($ref->hasProperty($key)) {
                        $property = $ref->getProperty($key);
                        if (!$property->isStatic()) {
                            $reader = new AnnotationReader();
                            $MoveIfArray = $reader->getPropertyAnnotation($property, MoveIfArray::class);
                            if ($MoveIfArray && is_array($item)) {
                                $newKey = $MoveIfArray->property;
                                if ($ref->hasProperty($newKey)) {
                                    $property = $ref->getProperty($newKey);
                                }
                            }
                            $private = $property->isPrivate() || $property->isProtected();
                            if ($private) {
                                $property->setAccessible(true);
                            }
                            $property->setValue($class, self::parseItem($item, $property));
                            if ($private) {
                                $property->setAccessible(false);
                            }
                        }
                    } else {
                        //dd($key, $item);
                    }
                }
                return $class;
            }
            return $data;
        }
        switch ($type) {
            case 'int':
                return (int) $data;
            case 'float':
                return (float) $data;
            case 'bool':
                return (bool) $data;
            case 'string':
                return (string) $data;
            default:
                return $data;
        }
    }

    /**
     * Сворчивание объекта в массив
     * @param $object
     * @return array|mixed
     * @throws \ReflectionException
     */
    public static function serialize($object)
    {
        if (is_array($object)) {
            return self::parseArray($object);
        }
        if (is_object($object)) {
            return self::parseObject($object);
        }
        return $object;
    }

    /**
     * Обход массива для приведения всех его элементов к однородному виду
     * @param array $data
     * @return array
     * @throws \ReflectionException
     */
    private static function parseArray(array $data): array
    {
        $ret = [];
        foreach ($data as $key => $item) {
            if (is_array($item)) {
                $ret[$key] = self::parseArray($item);
            } elseif (is_object($item)) {
                $ret[$key] = self::parseObject($item);
            } else {
                $ret[$key] = $item;
            }
        }
        return $ret;
    }

    /**
     * Приведение значение к типу свойства
     * @param $value
     * @param \ReflectionProperty $property
     * @return array|bool|\DateTime|float|int|mixed|string
     * @throws \ReflectionException
     */
    private static function parseItem($value, \ReflectionProperty $property)
    {
        $propertyType = $property->getType();
        $propertyType = is_null($propertyType) ? '' : $propertyType->getName();
        if (('array' === $propertyType || '' === $propertyType) && is_array($value)) {
            $reader = new AnnotationReader();
            $arrayClass = $reader->getPropertyAnnotation($property, ArrayClass::class);
            if (null === $arrayClass) {
                return $value;
            }
            $arrayClassType = $arrayClass->type ?? '';
            if (!class_exists($arrayClassType)) {
                return $value;
            }
            $newData = [];
            foreach ($value as $key => $item) {
                $newData[$key] = self::parse($item, $arrayClassType);
            }
            return $newData;
        }
        if ('DateTime' === $propertyType) {
            return new \DateTime($value);
        }
        if ('self' === $propertyType) {
            $propertyType = $property->class;
        }
        return self::parse($value, $propertyType);
    }

    /**
     * Сворачивание объекта в массив
     * @param $object
     * @return array|mixed
     * @throws \ReflectionException
     */
    private static function parseObject($object)
    {
        if (is_object($object)) {
            $ret = [];
            $ref = new \ReflectionClass($object);
            $reader = new AnnotationReader();
            foreach ($ref->getProperties() as $property) {
                if (!$property->isStatic()) {
                    $readonly = $reader->getPropertyAnnotation($property, Readonly::class);
                    $private = $property->isPrivate() || $property->isProtected();
                    if ($private) {
                        $property->setAccessible(true);
                    }
                    if ($property->isInitialized($object) && is_null($readonly)) {
                        $value = $property->getValue($object);
                        if (is_array($value)) {
                            $ret[$property->getName()] = self::parseArray($value);
                        } elseif (is_object($value)) {
                            $ret[$property->getName()] = self::parseObject($value);
                        } else {
                            $ret[$property->getName()] = $value;
                        }
                    }
                    if ($private) {
                        $property->setAccessible(false);
                    }
                }
            }
            if (in_array(AttachedEntityTrait::class, class_uses($object), true)) {
                $values = $object->getAttached();
                foreach ($values as $key => $value) {
                    if (is_array($value)) {
                        $ret[$key] = self::parseArray($value);
                    } elseif (is_object($value)) {
                        $ret[$key] = self::parseObject($value);
                    } else {
                        $ret[$key] = $value;
                    }
                }
            }
            return $ret;
        }
        return $object;
    }
}
