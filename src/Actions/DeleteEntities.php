<?php

namespace MoySkladSDK\Actions;

use Exception;
use MoySkladSDK\ApiClient;
use MoySkladSDK\Client\EntityClientBase;
use MoySkladSDK\Entity\MetaEntity;
use MoySkladSDK\Param\QueryParam;
use MoySkladSDK\RequestPreparer;

/**
 * Trait DeleteEntities
 * Удаление сущностей
 * @package MoySkladSDK\Actions
 * @author gringa <gringa@gringa.me>
 * @licence MIT
 * @property ApiClient $api
 * @method string getPath
 */
trait DeleteEntities
{
    /**
     * Массовое удаление сузностей
     * @param MetaEntity[] $entities Массив сущностей с метаданными
     * @return array
     * @throws \MoySkladSDK\Exception\ApiClientException|\ReflectionException|Exception
     */
    public function massDelete(array $entities, QueryParam $param=null): array
    {
        if (get_parent_class($this) !== EntityClientBase::class) {
            throw new Exception('The trait cannot be used outside the EntityClientBase class');
        }
        return $this->api->post(RequestPreparer::path($this->getPath().'delete')->body($entities), '');
    }
}
