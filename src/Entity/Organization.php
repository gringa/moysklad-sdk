<?php

namespace MoySkladSDK\Entity;

use MoySkladSDK\Annotation\Readonly;

/**
 * Class Organization
 * Юр.лицо
 * @package MoySkladSDK\Entity
 * @author gringa <gringa@gringa.me>
 * @licence MIT
 * @link https://dev.moysklad.ru/doc/api/remap/1.2/dictionaries/#suschnosti-jurlico
 */
class Organization extends MetaEntity
{
    /**
     * Метаданные счетов юрлица
     * @var ListEntity
     */
    public ListEntity $accounts;
    /**
     * Фактический адрес
     * @var string
     */
    public string $actualAddress;
    /**
     * Фактический адрес с детализацией по отдельным полям
     * @var Address
     */
    public Address $actualAddressFull;
    /**
     * Добавлено ли в архив
     * @var bool
     */
    public bool $archived;
    /**
     * Массив метаданных дополнительных полей юрлица
     * @var array
     */
    public array $attributes;
    /**
     * Бонусные баллы по активной бонусной программе
     * @Readonly
     * @var int
     */
    public int $bonusPoints;
    /**
     * Метаданные активной бонусной программы
     * @var BonusProgram
     */
    public BonusProgram $bonusProgram;
    /**
     * Дата свидетельства
     * @var \DateTime
     */
    public \DateTime $certificateDate;
    /**
     * Номер свидетельства
     * @var string
     */
    public string $certificateNumber;
    /**
     * Главный бухгалтер
     * @var string
     */
    public string $chiefAccountant;
    /**
     * Подпись главного бухгалтера
     * @var array
     */
    public array $chiefAccountSign;
    /**
     * Код
     * @var string
     */
    public string $code;
    /**
     * Тип Юрлица
     * @var string
     */
    public string $companyType;
    /**
     * Дата создания
     * @var \DateTime
     */
    public \DateTime $created;
    /**
     * Комментарий
     * @var string
     */
    public string $description;
    /**
     * Руководитель
     * @var string
     */
    public string $director;
    /**
     * Должность руководителя
     * @var string
     */
    public string $directorPosition;
    /**
     * Подпись руководителя
     * @var array
     */
    public array $directorSign;
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
     * Номер факса
     * @var string
     */
    public string $fax;
    /**
     * Идентификатор в ФСРАР
     * @var string
     */
    public string $fsrarId;
    /**
     * Отдел сотрудника
     * @var Group
     */
    public Group $group;
    /**
     * ИНН
     * @var string
     */
    public string $inn;
    /**
     * Включен ли ЕГАИС для данного юрлица
     * @var bool
     */
    public bool $isEgaisEnable;
    /**
     * КПП
     * @var string
     */
    public string $kpp;
    /**
     * Юридический адреса
     * @var string
     */
    public string $legalAddress;
    /**
     * Юридический адрес с детализацией по отдельным полям
     * @var Address
     */
    public Address $legalAddressFull;
    /**
     * Имя (только для Индивидуальный предприниматель, Физическое лицо)
     * @var string
     */
    public string $legalFirstName;
    /**
     * Фамилия (только для Индивидуальный предприниматель, Физическое лицо)
     * @var string
     */
    public string $legalLastName;
    /**
     * Отчество (только для Индивидуальный предприниматель, Физическое лицо)
     * @var string
     */
    public string $legalMiddleName;
    /**
     * Полное наименование
     * @var string
     */
    public string $legalTitle;
    /**
     * Наименование
     * @var string
     */
    public string $name;
    /**
     * ОГРН
     * @var string
     */
    public string $ogrn;
    /**
     * ОГРНИП
     * @var string
     */
    public string $ogrnip;
    /**
     * ОКПО
     * @var string
     */
    public string $okpo;
    /**
     * Владелец (Сотрудник)
     * @var Employee
     */
    public Employee $owner;
    /**
     * Является ли данное юрлицо плательщиком НДС
     * @var bool
     */
    public bool $payerVat;
    /**
     * Номер городского телефона
     * @var string
     */
    public string $phone;
    /**
     * Общий доступ
     * @var bool
     */
    public bool $shared;
    /**
     * Печать
     * @var array
     */
    public array $stamp;
    /**
     * ID синхронизации
     * @Readonly
     * @var string
     */
    public string $syncId;
    /**
     * Дата договора с ЦРПТ
     * @var \DateTime
     */
    public \DateTime $trackingContractDate;
    /**
     * Номер договора с ЦРПТ
     * @var string
     */
    public string $trackingContractNumber;
    /**
     * Время последнего обновления
     * @Readonly
     * @var \DateTime
     */
    public \DateTime $updated;
    /**
     * IP-адрес УТМ
     * @var string
     */
    public string $utmUrl;

    protected static string $_path = '/entity/organization/';
    protected static string $_type = 'organization';
}
