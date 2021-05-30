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
     * Клиент для ассортимента
     * @return AssortmentClient
     */
    public function assortment(): AssortmentClient
    {
        return new AssortmentClient($this->api);
    }

    /**
     * Клиент для контрагентов
     * @return CounterpartyClient
     */
    public function counterparty(): CounterpartyClient
    {
        return new CounterpartyClient($this->api);
    }

    /**
     * Клиент для заказов покупателя
     * @return CustomerOrderClient
     */
    public function customerOrder(): CustomerOrderClient
    {
        return new CustomerOrderClient($this->api);
    }

    /**
     * Клиент для юр.лиц
     * @return OrganizationClient
     */
    public function organization(): OrganizationClient
    {
        return new OrganizationClient($this->api);
    }

    /**
     * Клиент для товаров
     * @return ProductClient
     */
    public function product(): ProductClient
    {
        return new ProductClient($this->api);
    }

    /**
     * Клиент для услуг
     * @return ServiceClient
     */
    public function service(): ServiceClient
    {
        return new ServiceClient($this->api);
    }
}
