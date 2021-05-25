<?php

namespace MoySkladSDK\Actions;

use Exception;
use MoySkladSDK\ApiClient;
use MoySkladSDK\Client\EntityClientBase;
use MoySkladSDK\Entity\MetaEntity;
use MoySkladSDK\RequestPreparer;

/**
 * Trait GetEntity
 * Получение сущности
 * @package MoySkladSDK\Actions
 * @author gringa <gringa@gringa.me>
 * @licence MIT
 * @property ApiClient $api
 * @method string getPath
 * @method string getClass
 */
trait GetEntity
{
    /**
     * Получние сущности по ID
     * @param string $id ID сущности
     * @return MetaEntity|mixed
     * @throws \MoySkladSDK\Exception\ApiClientException|\ReflectionException|Exception
     */
    public function getById(string $id)
    {
        if (get_parent_class($this) !== EntityClientBase::class) {
            throw new Exception('The trait cannot be used outside the EntityClientBase class');
        }
        return $this->api->get(RequestPreparer::path($this->getPath().$id), $this->getClass());
    }
}
