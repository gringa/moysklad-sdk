<?php

namespace MoySkladSDK\Actions;

use Exception;
use MoySkladSDK\ApiClient;
use MoySkladSDK\Client\EntityClientBase;
use MoySkladSDK\Entity\Metadata;
use MoySkladSDK\RequestPreparer;

/**
 * Trait GetMetadata
 * Метаданные модели сущности
 * @package MoySkladSDK\Actions
 * @author gringa <gringa@gringa.me>
 * @licence MIT
 * @property ApiClient $api
 * @method string getPath
 */
trait GetMetadata
{
    /**
     * Метаданные модели сущности
     * @return Metadata|mixed
     * @throws \MoySkladSDK\Exception\ApiClientException
     * @throws \ReflectionException|Exception
     */
    public function getMetadata()
    {
        if (get_parent_class($this) !== EntityClientBase::class) {
            throw new Exception('The trait cannot be used outside the EntityClientBase class');
        }
        return $this->api->get(RequestPreparer::path($this->getPath().'metadata'), Metadata::class);
    }
}
