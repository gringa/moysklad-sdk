<?php

namespace MoySkladSDK\Param;

/**
 * Class Param
 * Генератор парамтеров запроса
 * @package MoySkladSDK\Param
 * @author gringa <gringa@gringa.me>
 * @licence MIT
 */
class Param
{
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
     * Лимит строк ответа
     * @param int $limit
     * @return QueryParam
     */
    public static function limit(int $limit): QueryParam
    {
        return (new QueryParam())->limit($limit);
    }

    /**
     * Отступ ответ
     * @param int $offset
     * @return QueryParam
     */
    public static function offset(int $offset): QueryParam
    {
        return (new QueryParam())->offset($offset);
    }
}
