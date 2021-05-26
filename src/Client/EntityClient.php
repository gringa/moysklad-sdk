<?php

namespace MoySkladSDK\Client;

use MoySkladSDK\ApiClient;

/**
 * Class EntityClient
 * Мета клиент для сущностей
 * @package MoySkladSDK\Client
 * @author gringa <gringa@gringa.me>
 * @licence MIT
 */
class EntityClient
{
    private ApiClient $api;

    /**
     * EntityClient constructor.
     * @param ApiClient $api
     */
    public function __construct(ApiClient $api)
    {
        $this->api = $api;
    }

    /**
     * Клиент для контрагентов
     * @return CounterpartyClient
     */
    public function counterparty(): CounterpartyClient
    {
        return new CounterpartyClient($this->api);
    }
}
