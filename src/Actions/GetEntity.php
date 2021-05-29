<?php

namespace MoySkladSDK\Actions;

use Exception;
use MoySkladSDK\ApiClient;
use MoySkladSDK\Client\EntityClientBase;
use MoySkladSDK\Entity\MetaEntity;
use MoySkladSDK\Param\QueryParam;
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
     * @param QueryParam|null $params Параметры запроса
     * @return MetaEntity|mixed
     * @throws \MoySkladSDK\Exception\ApiClientException|\ReflectionException|Exception
     */
    public function getById(string $id, QueryParam $params = null)
    {
        if (get_parent_class($this) !== EntityClientBase::class) {
            throw new Exception('The trait cannot be used outside the EntityClientBase class');
        }
        if (is_null($params)) {
            $params = new QueryParam();
        }
        return $this->api->get(RequestPreparer::path($this->getPath().$id)->params($params), $this->getClass());
    }
}
