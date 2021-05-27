<?php

namespace MoySkladSDK\Entity;

/**
 * Class Group
 * Отдел
 * @package MoySkladSDK\Entity
 * @author gringa <gringa@gringa.me>
 * @licence MIT
 * @link https://dev.moysklad.ru/doc/api/remap/1.2/dictionaries/#suschnosti-otdel
 */
class Group extends MetaEntity
{
    /**
     * Порядковый номер в списке отделов
     * @var int
     */
    public int $index;
    /**
     * Наименование Отдела
     * @var string
     */
    public string $name;

    protected static string $_path = '/entity/group/';
    protected static string $_type = 'group';
}
