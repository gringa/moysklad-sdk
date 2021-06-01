<?php

namespace MoySkladSDK\Entity;

use MoySkladSDK\Annotation\Readonly;
use MoySkladSDK\ApiClient;
use MoySkladSDK\Serializer;

/**
 * Class MetaEntity
 * Базовый класс для сущностей с Метаданными
 * @package MoySkladSDK\Entity
 * @author gringa <gringa@gringa.me>
 * @licence MIT
 */
class MetaEntity
{
    /**
     * ID учетной записи
     * @Readonly
     * @var string
     */
    public string $accountId;
    /**
     * ID сущности если есть
     * @Readonly
     * @var string
     */
    public string $id;

    protected static string $_path = '';
    protected static string $_type = '';

    /**
     * Метаданные сущности
     * @var Meta
     */
    protected Meta $meta;

    /**
     * MetaEntity constructor.
     * @param array|null $values
     * @throws \ReflectionException
     */
    public function __construct(?array $values = null)
    {
        if (!is_null($values)) {
            Serializer::arrayToObject($values, $this);
        }
    }

    /**
     * Возвращает href из метаданных сущности (или null)
     * @return string|null
     */
    public function getMetaHref(): ?string
    {
        if (isset($this->meta)) {
            return $this->meta->href ?? null;
        }
        return null;
    }

    /**
     * Получить путь сущности
     * @return string
     */
    public static function getPath(): string
    {
        $class = static::class;
        $path = $class::$_path ?? '';
        if (strpos($path, '/') !== 0) {
            $path = '/'.$path;
        }
        $length = strlen($path);
        if (($length > 0) && substr('/', -$length) === $path) {
            $path .= '/';
        }
        return $path;
    }

    /**
     * Получить тип сущности
     * @return string
     */
    public static function getType(): string
    {
        $class = static::class;
        return $class::$_type ?? '';
    }

    /**
     * Гененрирует новые метаданные для сущности на основе ID
     * @param string $id
     */
    public function newMeta(string $id): void
    {
        $class = static::class;
        $this->meta = new Meta();
        $this->meta->type = $class::getType();
        $this->meta->mediaType = 'application/json';
        $this->meta->metadataHref = ApiClient::API_ADDRESS.ApiClient::API_PATH.$class::getPath().'metadata';
        $this->meta->href = ApiClient::API_ADDRESS.ApiClient::API_PATH.$class::getPath().$id;
    }

    /**
     * Возвращает новый экземляр сущности с метаданными на основе ID
     * @param $id
     * @return self
     */
    public static function newWithMeta($id): self
    {
        $class = static::class;
        $entity = new $class();
        $entity->newMeta($id);
        return $entity;
    }
}
