<?php

namespace MoySkladSDK\Client;

use Exception;
use MoySkladSDK\Actions\CreateEntity;
use MoySkladSDK\Actions\GetEntity;
use MoySkladSDK\Actions\GetEntityList;
use MoySkladSDK\Actions\UpdateEntities;
use MoySkladSDK\Actions\UpdateEntity;
use MoySkladSDK\Entity\PriceType;
use MoySkladSDK\Param\QueryParam;
use MoySkladSDK\RequestPreparer;

/**
 * Class PriceTypeClient
 * Клиент для Типов цен
 * @package MoySkladSDK\Client
 * @author gringa <gringa@gringa.me>
 * @licence MIT
 */
class PriceTypeClient extends EntityClientBase
{
    use CreateEntity;
    use GetEntity;
    use UpdateEntities;
    use UpdateEntity;

    /**
     * Получить тип цены поумолчанию
     * @return PriceType
     * @throws \MoySkladSDK\Exception\ApiClientException
     * @throws \ReflectionException
     */
    public function getDefault(): PriceType
    {
        return $this->getById('default');
    }

    /**
     * Получние списка сущностей
     * @param QueryParam|null $params Параметры запроса
     * @return array|mixed
     * @throws \MoySkladSDK\Exception\ApiClientException|\ReflectionException|Exception
     */
    public function getList(QueryParam $params = null)
    {
        if (get_parent_class($this) !== EntityClientBase::class) {
            throw new Exception('The trait cannot be used outside the EntityClientBase class');
        }
        if (is_null($params)) {
            $params = new QueryParam();
        }
        return $this->api->get(RequestPreparer::path($this->getPath())->params($params), 'array');
    }

    protected function getClass(): string
    {
        return PriceType::class;
    }

    protected function getPath(): string
    {
        return PriceType::getPath();
    }
}
