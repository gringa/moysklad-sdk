<?php

namespace MoySkladSDK\Entity;

use MoySkladSDK\Annotation\Readonly;

/**
 * Class Counterparty
 * Контрагент
 * @package MoySkladSDK\Entity
 * @author gringa <gringa@gringa.me>
 * @licence MIT
 * @link https://dev.moysklad.ru/doc/api/remap/1.2/dictionaries/#suschnosti-kontragent
 */
class Counterparty extends MetaEntity
{
    public const COMPANY_TYPE = [
        'legal' => 'Юридическое лицо',
        'entrepreneur' => 'Индивидуальный предприниматель',
        'individual' => 'Физическое лицо'
    ];

    /**
     * Массив счетов Контрагентов
     * @Readonly
     * @var ListEntity
     * @todo реализовать
     */
    public ListEntity $accounts;
    /**
     * Фактический адрес Контрагента
     * @var string
     */
    public string $actualAddress;
    /**
     * Фактический адрес Контрагента с детализацией по отдельным полям
     * @var Address
     */
    public Address $actualAddressFull;
    /**
     * Добавлен ли Контрагент в архив
     * @var bool
     */
    public bool $archived;
    /**
     * Массив метаданных доп. полей
     * @Readonly
     * @var ListEntity
     * @todo реализовать
     */
    public ListEntity $attributes;
    /**
     * Бонусные баллы по активной бонусной программе
     * @Readonly
     * @var int
     */
    public int $bonusPoints;
    /**
     * Метаданные активной Бонусной программы
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
     * Код Контрагента
     * @var string
     */
    public string $code;
    /**
     * Тип Контрагента
     * @var string
     */
    public string $companyType;
    /**
     * Массив контактных лиц фирмы Контрагента
     * @Readonly
     * @var ListEntity
     * @todo реализовать
     * @link https://dev.moysklad.ru/doc/api/remap/1.2/dictionaries/#suschnosti-kontragent-kontragenty-attributy-suschnosti-adres-kontaktnye-lica-kontragentow
     */
    public ListEntity $contactpersons;
    /**
     * Момент создания
     * @var \DateTime
     */
    public \DateTime $created;
    /**
     * Комментарий к Контрагенту
     * @var string
     */
    public string $description;
    /**
     * Номер дисконтной карты Контрагента
     * @var string
     */
    public string $discountCardNumber;
    /**
     * Массив метаданных скидок. Массив может содержать персональные и накопительные скидки. Персональная скидка выводится, если хотя бы раз изменялся процент скидки для контрагента, значение будет указано в поле personalDiscount
     * @Readonly
     * @var ListEntity
     * @todo реализовать
     */
    public ListEntity $discounts;
    /**
     * Адрес электронной почты
     * @var string
     */
    public string $email;
    /**
     * Внешний код Контрагента
     * @var string
     */
    public string $externalCode;
    /**
     * Номер факса
     * @var string
     */
    public string $fax;
    /**
     * Метаданные массива Файлов
     * @Readonly
     * @var ListEntity
     */
    public ListEntity $files;
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
     * КПП
     * @var string
     */
    public string $kpp;
    /**
     * Юридический адрес Контрагента
     * @var string
     */
    public string $legalAddress;
    /**
     * Юридический адрес Контрагента с детализацией по отдельным полям
     * @var Address
     */
    public Address $legalAddressFull;
    /**
     * Имя Контрагента (только Индивидуальный предприниматель, Физическое лицо)
     * @var string
     */
    public string $legalFirstName;
    /**
     * Фамаилия Контрагента (только Индивидуальный предприниматель, Физическое лицо)
     * @var string
     */
    public string $legalLastName;
    /**
     * Отчество Контрагента (только Индивидуальный предприниматель, Физическое лицо)
     * @var string
     */
    public string $legalMiddleName;
    /**
     * Полное наименование Контрагента (только Юридическое лицо)
     * @var string
     */
    public string $legalTitle;
    /**
     * Наименование Контрагента
     * @var string
     */
    public string $name;
    /**
     * Массив событий Контрагента
     * @Readonly
     * @var ListEntity
     * @todo реализовать
     * @link https://dev.moysklad.ru/doc/api/remap/1.2/dictionaries/#suschnosti-kontragent-kontragenty-attributy-suschnosti-adres-sobytiq-kontragenta
     */
    public ListEntity $notes;
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
     * Номер городского телефона
     * @var string
     */
    public string $phone;
    /**
     * Тип цены Контрагента
     * @var PriceType
     */
    public PriceType $priceType;
    /**
     * Сумма продаж
     * @Readonly
     * @var int
     */
    public int $salesAmount;
    /**
     * Общий доступ
     * @var bool
     */
    public bool $shared;
    /**
     * Метаданные Статуса Контрагента
     * @var State
     */
    public State $state;
    /**
     * ID Синхронизации (UUID)
     * @Readonly
     * @var string
     */
    public string $syncId;
    /**
     * Группы контрагента
     * @var array|string[]
     */
    public array $tags;
    /**
     * Момент последнего обновления Контрагента
     * @Readonly
     * @var \DateTime
     */
    public \DateTime $updated;

    protected static string $_path = '/entity/counterparty/';
    protected static string $_type = 'counterparty';
}
