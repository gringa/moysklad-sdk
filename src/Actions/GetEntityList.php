<?php

namespace MoySkladSDK\Actions;

use Exception;
use MoySkladSDK\ApiClient;
use MoySkladSDK\Client\EntityClientBase;
use MoySkladSDK\Entity\ListEntity;
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
     * @return ListEntity|mixed
     * @throws Exception|\MoySkladSDK\Exception\ApiClientException|\ReflectionException
     */
    public function getList()
    {
        if (get_parent_class($this) !== EntityClientBase::class) {
            throw new Exception('The trait cannot be used outside the EntityClientBase class');
        }
        return $this->api->get(RequestPreparer::path($this->getPath()), ListEntity::class);
    }
}
