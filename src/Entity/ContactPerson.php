<?php

namespace MoySkladSDK\Entity;

use MoySkladSDK\Annotation\Readonly;

/**
 * Class ContactPerson
 * Контактное лицо
 * @package MoySkladSDK\Entity
 * @author gringa <gringa@gringa.me>
 * @licence MIT
 */
class ContactPerson extends MetaEntity
{
    /**
     * Контрагент
     * @var Counterparty
     */
    public Counterparty $agent;
    /**
     * Код
     * @var string
     */
    public string $code;
    /**
     * Время последнего обновления
     * @Readonly
     * @var \DateTime
     */
    public \DateTime $dateTime;
    /**
     * Описание
     * @var string
     */
    public string $description;
    /**
     * Адрес электронной почты
     * @var string
     */
    public string $email;
    /**
     * Внешний код
     * @var string
     */
    public string $externalCode;
    /**
     * ФИО контактного лица
     * @var string
     */
    public string $name;
    /**
     * Номер телефона
     * @var string
     */
    public string $phone;
    /**
     * Должность
     * @var string
     */
    public string $position;
}
