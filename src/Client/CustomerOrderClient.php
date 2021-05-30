<?php

namespace MoySkladSDK\Client;

use MoySkladSDK\Actions\GetEntity;
use MoySkladSDK\Actions\GetEntityList;
use MoySkladSDK\Entity\CustomerOrder;

/**
 * Class CounterpartyClient
 * Клиент для сущности Заказ покупателя
 * @package MoySkladSDK\Client
 * @author gringa <gringa@gringa.me>
 * @licence MIT
 */
class CustomerOrderClient extends EntityClientBase
{
    use GetEntity;
    use GetEntityList;

    protected function getClass(): string
    {
        return CustomerOrder::class;
    }

    protected function getPath(): string
    {
        return CustomerOrder::getPath();
    }
}
