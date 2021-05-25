<?php

namespace MoySkladSDK;

use MoySkladSDK\Client\EntityClient;

/**
 * Class RequestPreparer
 * Сборщик параметров для запроса
 * @package MoySkladSDK
 * @author gringa <gringa@gringa.me>
 * @licence MIT
 */
class RequestPreparer
{
    private array $body = [];
    private array $headers = [
        'Content-Type' => 'application/json',
        'Accept' => 'application/json;charset=utf-8',
    ];
    private array $params = [];
    private string $path;
    private array $query = [];

    /**
     * RequestPreparer constructor.
     * @param string $path путь сущности
     */
    public function __construct(string $path)
    {
        $this->path = $path;
    }

    /**
     * @param EntityClient|mixed $body
     * @return $this
     */
    public function body($body): self
    {
        $this->body = Serializer::serialize($body);
        return $this;
    }

    /**
     * Сборка пути до сущности и параметров поиска/сортировки/фильтрации
     * @return string
     * @todo Параметры пока в планах
     */
    public function buildFullUrl(): string
    {
        if (count($this->params) < 1) {
            return $this->path;
        }
        return $this->path.'?'.http_build_query($this->query);
    }

    /**
     * Получение данных тела запроса
     * @return array
     */
    public function getBody(): array
    {
        return $this->body;
    }

    /**
     * Получение данных заголовков
     * @return array|string[]
     */
    public function getHeaders(): array
    {
        return $this->headers;
    }

    /**
     * Установка параметров
     * @param array $params
     * @return $this
     * @todo Пока не используется
     */
    public function params(array $params): self
    {
        $this->params = $params;
        return $this;
    }

    /**
     * Создание нового экземпляра сборщика с установленным путем
     * @param string $path путь сущности
     * @return $this
     */
    public static function path(string $path): self
    {
        return new self($path);
    }
}
