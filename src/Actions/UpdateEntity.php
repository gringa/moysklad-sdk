<?php

namespace MoySkladSDK\Actions;

use Exception;
use MoySkladSDK\ApiClient;
use MoySkladSDK\Client\EntityClientBase;
use MoySkladSDK\Entity\MetaEntity;
use MoySkladSDK\Param\QueryParam;
use MoySkladSDK\RequestPreparer;

/**
 * Trait UpdateEntity
 * Обновление сущености
 * @package MoySkladSDK\Actions
 * @author gringa <gringa@gringa.me>
 * @licence MIT
 * @property ApiClient $api
 * @method string getPath
 * @method string getClass
 */
trait UpdateEntity
{
    /**
     * Обновление сущности по ID
     * @param string $id ID сущности
     * @param MetaEntity $updatedEntity Экземпляр класса сущности с новыми данными
     * @param QueryParam|null $params Параметры запроса
     * @return MetaEntity|mixed Экземпляр сущности полученный с сервера
     * @throws \MoySkladSDK\Exception\ApiClientException|\ReflectionException|Exception
     */
    public function update(string $id, MetaEntity $updatedEntity, QueryParam $params = null)
    {
        if (get_parent_class($this) !== EntityClientBase::class) {
            throw new Exception('The trait cannot be used outside the EntityClientBase class');
        }
        if (is_null($params)) {
            $params = new QueryParam();
        }
        return $this->api->put(RequestPreparer::path($this->getPath().$id)->body($updatedEntity)->params($params), $this->getClass());
    }
}
