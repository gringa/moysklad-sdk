<?php

namespace MoySkladSDK\Entity;

use MoySkladSDK\Annotation\Readonly;
use MoySkladSDK\ApiClient;

/**
 * Class State
 * Статусы докуметов
 * @author gringa <gringa@gringa.me>
 * @licence MIT
 * @link https://dev.moysklad.ru/doc/api/remap/1.2/dictionaries/#suschnosti-statusy-dokumentow
 */
class State extends MetaEntity
{
    public const STATE_TYPE = [
        'Regular' => 'Обычный (значение по умолчанию)',
        'Successful' => 'Финальный положительный',
        'Unsuccessful' => 'Финальный отрицательный',
    ];
    /**
     * Цвет Статуса
     * @var string
     */
    public string $color;
    /**
     * Тип сущности, к которой относится Статус (ключевое слово в рамках JSON API)
     * @Readonly
     * @var string
     */
    public string $entityType;
    /**
     * Наименование Статуса
     * @var string
     */
    public string $name;
    /**
     * Тип Статуса
     * @var string
     */
    public string $stateType;

    /**
     * Гененрирует новые метаданные для сущности на основе ID
     * @param string $id
     * @param string|null $parentType
     * @throws \Exception
     */
    public function newMeta(string $id, string $parentType = null): void
    {
        if (is_null($parentType)) {
            throw new \Exception();
        }
        $this->meta = new Meta();
        $this->meta->type = 'state';
        $this->meta->mediaType = 'application/json';
        $this->meta->href = ApiClient::API_ADDRESS.ApiClient::API_PATH.'entity/'.$parentType.'/metadata/states/'.$id;
    }

    /**
     * Возвращает новый экземляр сущности с метаданными на основе ID
     * @param $id
     * @param string|null $parentType
     * @return self
     * @throws \Exception
     */
    public static function newWithMeta($id, string $parentType = null): self
    {
        if (is_null($parentType)) {
            throw new \Exception();
        }
        $entity = new self();
        $entity->newMeta($id, $parentType);
        return $entity;
    }
}
