<?php

namespace MoySkladSDK\Client;

use MoySkladSDK\Actions\CreateEntity;
use MoySkladSDK\Actions\DeleteEntities;
use MoySkladSDK\Actions\DeleteEntity;
use MoySkladSDK\Actions\GetEntity;
use MoySkladSDK\Actions\GetEntityList;
use MoySkladSDK\Actions\GetMetadata;
use MoySkladSDK\Actions\UpdateEntity;
use MoySkladSDK\Entity\Service;

/**
 * Class ProductClient
 * Клиент для сущности Товаров
 * @package MoySkladSDK\Client
 * @author gringa <gringa@gringa.me>
 * @licence MIT
 */
class ServiceClient extends EntityClientBase
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
        return Service::class;
    }

    protected function getPath(): string
    {
        return Service::getPath();
    }
}
