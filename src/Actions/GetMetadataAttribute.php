<?php

namespace MoySkladSDK\Actions;

use MoySkladSDK\ApiClient;
use MoySkladSDK\Client\EntityClientBase;
use MoySkladSDK\Entity\Attribute;
use MoySkladSDK\Entity\MetaEntity;
use MoySkladSDK\Exception\ApiClientException;
use MoySkladSDK\RequestPreparer;

/**
 * Trait GetMetadataAttribute
 * @package MoySkladSDK\Actions
 * @author gringa <gringa@gringa.me>
 * @licence MIT
 * @property ApiClient $api
 * @method string getPath
 */
trait GetMetadataAttribute
{
    /**
     * @throws ApiClientException
     * @throws \Exception
     */
    public function getMetadataAttribute(string $id): MetaEntity
    {
        if (EntityClientBase::class !== get_parent_class($this)) {
            throw new \Exception('The trait cannot be used outside the EntityClientBase class');
        }
        return $this->api->get(RequestPreparer::path($this->getPath().'metadata/attributes/'.$id), Attribute::class);
    }
}
