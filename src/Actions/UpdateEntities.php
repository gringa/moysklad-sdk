<?php

namespace MoySkladSDK\Actions;

use MoySkladSDK\ApiClient;
use MoySkladSDK\Client\EntityClientBase;
use MoySkladSDK\Entity\MetaEntity;
use MoySkladSDK\Exception\ApiClientException;
use MoySkladSDK\RequestPreparer;

/**
 * Trait UpdateEntities
 * Обновление сущеностей
 * @package MoySkladSDK\Actions
 * @author gringa <gringa@gringa.me>
 * @licence MIT
 * @property ApiClient $api
 * @method string getPath
 * @method string getClass
 */

trait UpdateEntities
{
    /**
     * Обновление/создание сущностей
     * @param MetaEntity[] $entities
     * @throws ApiClientException|\Exception
     * @return array
     */
    public function massUpdate(array $entities): array
    {
        if (EntityClientBase::class !== get_parent_class($this)) {
            throw new \Exception('The trait cannot be used outside the EntityClientBase class');
        }
        return $this->api->post(RequestPreparer::path($this->getPath())->body($entities), '');
    }
}
