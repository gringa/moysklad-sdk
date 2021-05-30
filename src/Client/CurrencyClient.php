<?php

namespace MoySkladSDK\Client;

use MoySkladSDK\Actions\CreateEntity;
use MoySkladSDK\Actions\DeleteEntities;
use MoySkladSDK\Actions\DeleteEntity;
use MoySkladSDK\Actions\GetEntity;
use MoySkladSDK\Actions\GetEntityList;
use MoySkladSDK\Actions\UpdateEntities;
use MoySkladSDK\Actions\UpdateEntity;
use MoySkladSDK\Entity\Currency;

/**
 * Class CurrencyClient
 * Клиент для сущности Валюта
 * @package MoySkladSDK\Client
 * @author gringa <gringa@gringa.me>
 * @licence MIT
 */
class CurrencyClient extends EntityClientBase
{
    use CreateEntity;
    use DeleteEntities;
    use DeleteEntities;
    use DeleteEntity;
    use GetEntity;
    use GetEntityList;
    use UpdateEntities;
    use UpdateEntity;

    protected function getClass(): string
    {
        return Currency::class;
    }

    protected function getPath(): string
    {
        return Currency::getPath();
    }
}
