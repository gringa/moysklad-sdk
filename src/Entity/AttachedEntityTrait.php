<?php

namespace MoySkladSDK\Entity;

use MoySkladSDK\Annotation\Readonly;

trait AttachedEntityTrait
{
    /**
     * @Readonly
     * @var array
     */
    private array $attachedProperty = [];

    /**
     * Получить прикреплямые сущности/сущность
     * @param string|null $property имя сущности
     * @return array|mixed|null
     */
    public function getAttached(string $property = null)
    {
        if (is_null($property)) {
            return $this->attachedProperty;
        }
        return $this->attachedProperty[$property] ?? null;
    }

    protected function addAttached($property, $value): void
    {
        $this->attachedProperty[$property] = $value;
    }
}
