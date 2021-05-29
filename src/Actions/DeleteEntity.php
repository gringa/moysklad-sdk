<?php

namespace MoySkladSDK\Actions;

use Exception;
use MoySkladSDK\ApiClient;
use MoySkladSDK\Client\EntityClientBase;
use MoySkladSDK\Param\QueryParam;
use MoySkladSDK\RequestPreparer;

/**
 * Trait DeleteEntity
 * Удаление сущности
 * @package MoySkladSDK\Actions
 * @author gringa <gringa@gringa.me>
 * @licence MIT
 * @property ApiClient $api
 * @method string getPath
 */
trait DeleteEntity
{
    /**
     * Удаление сущности по ID
     * @param string $id ID сущности
     * @throws Exception
     */
    public function delete(string $id, QueryParam $params): void
    {
        if (get_parent_class($this) !== EntityClientBase::class) {
            throw new Exception('The trait cannot be used outside the EntityClientBase class');
        }
        if (is_null($params)) {
            $params=new QueryParam();
        }
        $this->api->delete(RequestPreparer::path($this->getPath().$id)->params($params));
    }
}
