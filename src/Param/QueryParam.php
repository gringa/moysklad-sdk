<?php

namespace MoySkladSDK\Param;

use MoySkladSDK\Entity\MetaEntity;
use phpDocumentor\Reflection\Types\Self_;

/**
 * Class QueryParam
 * Класс параметров запроса
 * @package MoySkladSDK\Param
 * @package MoySkladSDK\Param
 * @author gringa <gringa@gringa.me>
 * @licence MIT
 */
class QueryParam
{
    private const FILTER = [
        Param::FILTER_EQUALLY,
        Param::FILTER_MORE,
        Param::FILTER_LESS,
        Param::FILTER_MORE_OR_EQUALLY,
        Param::FILTER_LESS_OR_EQUALLY,
        Param::FILTER_NOT_EQUALLY,
        Param::FILTER_LIKE,
        Param::FILTER_PREFIX,
        Param::FILTER_POSTFIX
    ];

    private const FILTER_ENTITY = [
        Param::FILTER_EQUALLY,
        Param::FILTER_NOT_EQUALLY
    ];

    private const ORDER_DIRECTION = [
        Param::ORDER_DIRECTION_ASC,
        Param::ORDER_DIRECTION_DESC,
    ];

    private array $expand = [];
    private array $filters = [];
    private int $limit;
    private int $offset;
    private array $orders = [];
    private string $search;

    /**
     * Развернуть мета-поля
     * Для запросов-списков работает только когда явно задан лимит меньший или равный 100 записям
     * @param string $field
     * @return QueryParam
     */
    public function expand(string $field): self
    {
        $this->expand[] = $field;
        return $this;
    }

    /**
     * Фильтрация по обычному полю
     * @param string $field
     * @param string $condition
     * @param string $value
     * @return $this
     * @throws \Exception
     */
    public function filter(string $field, string $condition, string $value): self
    {
        if (in_array($condition, self::FILTER, true)) {
            $this->filters[] = $field.$condition.$value;
            return $this;
        }
        throw new \Exception();
    }

    /**
     * Фильтрация по полю сущности
     * @param string $field
     * @param string $condition условие = или !=
     * @param MetaEntity $entity
     * @return $this
     * @throws \Exception
     */
    public function filterEntity(string $field, string $condition, MetaEntity $entity): self
    {
        $href = $entity->getMetaHref();
        if (!is_null($href) && in_array($condition, self::FILTER_ENTITY, true)) {
            $this->filters[] = $field.$condition.$href;
            return $this;
        }
        throw new \Exception();
    }

    /**
     * Получить подготовленные данные для запроса
     * @return array
     */
    public function getData(): array
    {
        $ret = [];
        if (count($this->expand) > 0) {
            $ret['expand'] = implode(',', $this->expand);
        }
        if (count($this->orders) > 0) {
            $ret['order'] = implode(';', $this->orders);
        }
        if (count($this->filters) > 0) {
            $ret['filter'] = implode(';', $this->filters);
        }
        if (isset($this->search)) {
            $ret['search'] = $this->search;
        }
        if (isset($this->limit)) {
            if ($this->limit > 0 && $this->limit <= 1000) {
                $ret['limit'] = $this->limit;
            }
        }
        if (isset($this->offset)) {
            if ($this->offset > 0) {
                $ret['offset'] = $this->offset;
            }
        }
        return $ret;
    }

    /**
     * Лимит строк ответа
     * @param int $limit
     * @return QueryParam
     */
    public function limit(int $limit): self
    {
        $this->limit = $limit;
        return $this;
    }

    /**
     * Отступ ответа
     * @param int $offset
     * @return QueryParam
     */
    public function offset(int $offset): self
    {
        $this->offset = $offset;
        return $this;
    }

    /**
     * Сортировка ответа
     * @param string $field
     * @param string|null $direction
     * @return QueryParam
     * @throws \Exception
     */
    public function order(string $field, string $direction = null): self
    {
        if (is_null($direction)) {
            $this->orders[] = $field;
            return $this;
        }
        if (in_array($direction, self::ORDER_DIRECTION, true)) {
            $this->orders[] = "$field,$direction";
            return $this;
        }
        throw new \Exception();
    }

    /**
     * Поиск
     * @param string $value
     * @return QueryParam
     */
    public function search(string $value): self
    {
        $this->search = $value;
        return $this;
    }
}
