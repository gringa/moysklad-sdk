<?php

namespace MoySkladSDK\Entity;

/**
 * Class Note
 * События
 * @package MoySkladSDK\Entity
 * @author gringa <gringa@gringa.me>
 * @licence MIT
 */
class Note extends MetaEntity
{
    /**
     * Контрагент
     * @var Counterparty
     */
    public Counterparty $agent;
    /**
     * Создатель события (сотрудник)
     * @var Employee
     */
    public Employee $author;
    /**
     * Время создания
     * @var \DateTime
     */
    public \DateTime $created;
    /**
     * Текст события
     * @var string
     */
    public string $description;
}
