<?php

namespace MoySkladSDK\Actions;

use Exception;
use MoySkladSDK\ApiClient;
use MoySkladSDK\Client\EntityClientBase;
use MoySkladSDK\Entity\ListEntity;
use MoySkladSDK\Param\QueryParam;
use MoySkladSDK\RequestPreparer;

/**
 * Trait GetEntity.
 * Получение списка сущностей
 * @package MoySkladSDK\Actions
 * @author gringa <gringa@gringa.me>
 * @licence MIT
 * @property ApiClient $api
 * @method string getPath
 */
trait GetEntityList
{
    /**
     * Получние списка сущностей
     * @param QueryParam|null $params Параметры запроса
     * @return ListEntity|mixed
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
        return $this->api->get(RequestPreparer::path($this->getPath())->params($params), ListEntity::class);
    }
}
