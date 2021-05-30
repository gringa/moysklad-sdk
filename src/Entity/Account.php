<?php

namespace MoySkladSDK\Entity;

use MoySkladSDK\Annotation\Readonly;

/**
 * Class Account
 * Счет организации/контрагента
 * @package MoySkladSDK\Entity
 * @author gringa <gringa@gringa.me>
 * @licence MIT
 */
class Account extends MetaEntity
{
    /**
     * Номер счета
     * @var string
     */
    public string $accountNumber;
    /**
     * Агент
     * @var Counterparty
     */
    public Counterparty $agent;
    /**
     * Адрес банка
     * @var string
     */
    public string $bankLocation;
    /**
     * Наименование банка
     * @var string
     */
    public string $bankName;
    /**
     * БИК
     * @var string
     */
    public string $bic;
    /**
     * Корр счет
     * @var string
     */
    public string $correspondentAccount;
    /**
     * Является ли счет основным счетом
     * @var bool
     */
    public bool $isDefault;
    /**
     * Время последнего обновления
     * @Readonly
     * @var \DateTime
     */
    public \DateTime $updated;
}
