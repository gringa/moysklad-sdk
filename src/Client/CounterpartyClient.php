<?php

namespace MoySkladSDK\Client;

use MoySkladSDK\Actions\CreateEntity;
use MoySkladSDK\Actions\DeleteEntities;
use MoySkladSDK\Actions\DeleteEntity;
use MoySkladSDK\Actions\GetEntity;
use MoySkladSDK\Actions\GetEntityList;
use MoySkladSDK\Actions\GetMetadata;
use MoySkladSDK\Actions\UpdateEntity;
use MoySkladSDK\Entity\Counterparty;

/**
 * Class CounterpartyClient
 * Клиент для сущности Контрагентов
 * @package MoySkladSDK\Client
 */
class CounterpartyClient extends EntityClientBase
{
    use CreateEntity;
    use DeleteEntities;
    use DeleteEntity;
    use GetEntity;
    use GetEntityList;
    use GetMetadata;
    use UpdateEntity;

    protected function getClass(): string
    {
        return Counterparty::class;
    }

    protected function getPath(): string
    {
        return Counterparty::getPath();
    }
}
