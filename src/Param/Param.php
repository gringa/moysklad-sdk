<?php

namespace MoySkladSDK\Param;

use MoySkladSDK\Entity\MetaEntity;

/**
 * Class Param
 * Генератор парамтеров запроса
 * @package MoySkladSDK\Param
 * @author gringa <gringa@gringa.me>
 * @licence MIT
 */
class Param
{
    public const FILTER_EQUALLY = '=';
    public const FILTER_LESS = '<';
    public const FILTER_LESS_OR_EQUALLY = '<=';
    public const FILTER_LIKE = '~';
    public const FILTER_MORE = '>';
    public const FILTER_MORE_OR_EQUALLY = '>=';
    public const FILTER_NOT_EQUALLY = '!=';
    public const FILTER_POSTFIX = '=~';
    public const FILTER_PREFIX = '~=';

    public const ORDER_DIRECTION_ASC = 'asc';
    public const ORDER_DIRECTION_DESC = 'desc';

    /**
     * Развернуть мета-поля
     * @param string $field
     * @return QueryParam
     */
    public static function expand(string $field): QueryParam
    {
        return (new QueryParam())->expand($field);
    }

    /**
     * Фильтрация по обычному полю
     * @param string $field
     * @param string $condition
     * @param string $value
     * @return QueryParam
     * @throws \Exception
     */
    public static function filter(string $field, string $condition, string $value): QueryParam
    {
        return (new QueryParam())->filter($field, $condition, $value);
    }

    /**
     * Фильтрация по полю сущности
     * @param string $field
     * @param string $condition условие = или !=
     * @param MetaEntity $entity
     * @return QueryParam
     * @throws \Exception
     */
    public static function filterEntity(string $field, string $condition, MetaEntity $entity): QueryParam
    {
        return (new QueryParam())->filterEntity($field, $condition, $entity);
    }

    /**
     * Лимит строк ответа
     * @param int $limit
     * @return QueryParam
     */
    public static function limit(int $limit): QueryParam
    {
        return (new QueryParam())->limit($limit);
    }

    /**
     * Отступ ответа
     * @param int $offset
     * @return QueryParam
     */
    public static function offset(int $offset): QueryParam
    {
        return (new QueryParam())->offset($offset);
    }

    /**
     * Сортировка ответа
     * @param string $field
     * @param string|null $direction
     * @return QueryParam
     * @throws \Exception
     */
    public static function order(string $field, string $direction = null): QueryParam
    {
        return (new QueryParam())->order($field, $direction);
    }

    /**
     * Поиск
     * @param string $value
     * @return QueryParam
     */
    public static function search(string $value): QueryParam
    {
        return (new QueryParam())->search($value);
    }
}
