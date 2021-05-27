<?php

namespace MoySkladSDK\Client;

use MoySkladSDK\Actions\GetEntityList;
use MoySkladSDK\Entity\Assortment;

/**
 * Class CounterpartyClient
 * Клиент для сущности Ассортимента
 * @package MoySkladSDK\Client
 * @author gringa <gringa@gringa.me>
 * @licence MIT
 */
class AssortmentClient extends EntityClientBase
{
    use GetEntityList;

    protected function getClass(): string
    {
        return Assortment::class;
    }

    protected function getPath(): string
    {
        return Assortment::getPath();
    }
}
