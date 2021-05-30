<?php

namespace MoySkladSDK\Entity;

use MoySkladSDK\Annotation\Readonly;

/**
 * Class Image
 * Изображение
 * @package MoySkladSDK\Entity
 * @author gringa <gringa@gringa.me>
 * @licence MIT
 * @link https://dev.moysklad.ru/doc/api/remap/1.2/dictionaries/#suschnosti-fajly
 */
class File extends MetaEntity
{
    /**
     * Изображение в в Base64. Только при создании
     * @var string
     */
    public string $content;
    /**
     * Имя файла
     * @var string
     */
    public string $filename;
    /**
     * Метаданные миниатюры изображения
     * @var Meta
     */
    public Meta $miniature;
    /**
     * Размер в байтах
     * @Readonly
     * @var int
     */
    public int $size;
    /**
     * Метаданные уменьшенного изображения
     * @var Meta
     */
    public Meta $tiny;
    /**
     * Название
     * @var string
     */
    public string $title;
    /**
     * Время загрузки на сервер
     * @var \DateTime
     */
    public \DateTime $updated;
}
