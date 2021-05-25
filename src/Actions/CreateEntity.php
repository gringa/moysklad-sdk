<?php

namespace MoySkladSDK\Actions;

use Exception;
use MoySkladSDK\ApiClient;
use MoySkladSDK\Client\EntityClientBase;
use MoySkladSDK\Entity\MetaEntity;
use MoySkladSDK\RequestPreparer;

/**
 * Trait CreateEntity
 * Создание сущности
 * @package MoySkladSDK\Actions
 * @author gringa <gringa@gringa.me>
 * @licence MIT
 * @property ApiClient $api
 * @method string getPath
 */
trait CreateEntity
{
    /**
     * Запрос на создание сущности
     * @param MetaEntity $newEntity Экземпляр класса сущности для создания
     * @return mixed|MetaEntity Экземпляр сущности полученный с сервера
     * @throws Exception
     */
    public function create(MetaEntity $newEntity)
    {
        if (get_parent_class($this) !== EntityClientBase::class) {
            throw new Exception('The trait cannot be used outside the EntityClientBase class');
        }
        return $this->api->post(RequestPreparer::path($this->getPath())->body($newEntity), MetaEntity::class);
    }
}
