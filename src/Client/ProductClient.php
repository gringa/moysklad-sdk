<?php

namespace MoySkladSDK\Client;

use MoySkladSDK\Actions\CreateEntity;
use MoySkladSDK\Actions\DeleteEntities;
use MoySkladSDK\Actions\DeleteEntity;
use MoySkladSDK\Actions\GetEntity;
use MoySkladSDK\Actions\GetEntityList;
use MoySkladSDK\Actions\GetMetadata;
use MoySkladSDK\Actions\UpdateEntity;
use MoySkladSDK\Entity\Product;

/**
 * Class ProductClient
 * Клиент для сущности Контрагентов
 * @package MoySkladSDK\Client
 * @author gringa <gringa@gringa.me>
 * @licence MIT
 */
class ProductClient extends EntityClientBase
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
        return Product::class;
    }

    protected function getPath(): string
    {
        return Product::getPath();
    }
}
