<?php

namespace MoySkladSDK\Client;

use MoySkladSDK\ApiClient;

/**
 * Class EntityClientBase
 * Базовый клиент для сущностей
 * @package MoySkladSDK\Client
 * @author gringa <gringa@gringa.me>
 * @licence MIT
 */
abstract class EntityClientBase
{
    protected ApiClient $api;

    public function __construct(ApiClient $api)
    {
        $this->api = $api;
    }

    /**
     * Возвращает имя класса сущности
     * @return string
     */
    abstract protected function getClass(): string;

    /**
     * Возвращает путь сущности
     * @return string
     */
    abstract protected function getPath(): string;
}
