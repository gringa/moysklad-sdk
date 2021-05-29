<?php

namespace MoySkladSDK\Param;

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
    private array $expand = [];
    private int $limit;
    private int $offset;

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
     * Получить подготовленные данные для запроса
     * @return array
     */
    public function getData(): array
    {
        $ret = [];
        if (count($this->expand) > 0) {
            $ret['expand'] = implode(',', $this->expand);
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
     * Отступ ответ
     * @param int $offset
     * @return QueryParam
     */
    public function offset(int $offset): self
    {
        $this->offset = $offset;
        return $this;
    }
}
