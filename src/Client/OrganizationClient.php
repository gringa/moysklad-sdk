<?php

namespace MoySkladSDK\Client;

use MoySkladSDK\Actions\GetEntity;
use MoySkladSDK\Actions\GetEntityList;
use MoySkladSDK\Entity\CustomerOrder;
use MoySkladSDK\Entity\Organization;

/**
 * Class CounterpartyClient
 * Клиент для сущности Контрагентов
 * @package MoySkladSDK\Client
 * @author gringa <gringa@gringa.me>
 * @licence MIT
 */
class OrganizationClient extends EntityClientBase
{
    use GetEntity;
    use GetEntityList;

    protected function getClass(): string
    {
        return Organization::class;
    }

    protected function getPath(): string
    {
        return Organization::getPath();
    }
}
