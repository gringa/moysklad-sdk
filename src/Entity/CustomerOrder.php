<?php

namespace MoySkladSDK\Entity;

use MoySkladSDK\Annotation\ArrayClass;
use MoySkladSDK\Annotation\Readonly;

/**
 * Class CustomerOrder
 * Заказ Покупателя
 * @package MoySkladSDK\Entity
 * @author gringa <gringa@gringa.me>
 * @licence MIT
 * @link https://dev.moysklad.ru/doc/api/remap/1.2/documents/#dokumenty-zakaz-pokupatelq
 */
class CustomerOrder extends MetaEntity
{
    use AttachedEntityTrait;

    /**
     * Метаданные контрагента
     * @var Counterparty
     */
    public Counterparty $agent;
    /**
     * Метаданные счета контрагента
     * @var Account
     */
    public Account $agentAccount;
    /**
     * Отметка о проведении
     * @var bool
     */
    public bool $applicable;
    /**
     * Коллекция метаданных доп. полей.
     * @ArrayClass(type="MoySkladSDK\Entity\Attribute")
     * @var array|Attribute[]
     */
    public array $attributes;
    /**
     * Код
     * @var string
     */
    public string $code;
    /**
     * Метаданные договора
     * @var Contract
     */
    public Contract $contract;
    /**
     * Дата создания
     * @Readonly
     * @var \DateTime
     */
    public \DateTime $created;
    /**
     * Время последнего удаления
     * @var \DateTime
     */
    public \DateTime $deleted;
    /**
     * Планируемая дата отгрузки
     * @var \DateTime
     */
    public \DateTime $deliveryPlannedMoment;
    /**
     * Массив ссылок на связанные отгрузки
     * @Readonly
     * @var ListEntity
     */
    public ListEntity $demands;
    /**
     * Комментарий
     * @var string
     */
    public string $description;
    /**
     * Внешний код
     * @var string
     */
    public string $externalCode;
    /**
     * Файлы
     * @var ListEntity
     */
    public ListEntity $files;
    /**
     * Отдел сотрудника
     * @var Group
     */
    public Group $group;
    /**
     * Сумма счетов покупателю
     * @Readonly
     * @var float
     */
    public float $invoicedSum;
    /**
     * Массив ссылок на связанные счета покупателям
     * @var array
     */
    public array $invoicesOut;
    /**
     * Дата Заказа
     * @var \DateTime
     */
    public \DateTime $moment;
    /**
     * Наименование
     * @var string
     */
    public string $name;
    /**
     * Метаданные юрлица
     * @var Organization
     */
    public Organization $organization;
    /**
     * Метаданные счета юрлица
     * @var Account
     */
    public Account $organizationAccount;
    /**
     * Владелец (Сотрудник)
     * @var Employee
     */
    public Employee $owner;
    /**
     * Сумма входящих платежей по Заказу
     * @Readonly
     * @var float
     */
    public float $payedSum;
    /**
     * Массив ссылок на связанные платежи
     * @var array
     */
    public array $payments;
    /**
     * Метаданные позиций Заказа покупателя
     * @Readonly
     * @var ListEntity
     */
    public ListEntity $positions;
    /**
     * Напечатан ли документ
     * @Readonly
     * @var bool
     */
    public bool $printed;
    /**
     * Метаданные проекта
     * @var Project
     */
    public Project $project;
    /**
     * Опубликован ли документ
     * @Readonly
     * @var bool
     */
    public bool $published;
    /**
     * Массив ссылок на связанные заказы поставщикам
     * @var array
     */
    public array $purchaseOrders;
    /**
     * Валюта
     * @var Rate
     */
    public Rate $rate;
    /**
     * Сумма товаров в резерве
     * @Readonly()
     * @var float
     */
    public float $reservedSum;
    /**
     * Общий доступ
     * @var bool
     */
    public bool $shared;
    /**
     * Сумма отгруженного
     * @Readonly
     * @var float
     */
    public float $shippedSum;
    /**
     * Метаданные статуса заказа
     * @var State
     */
    public State $state;
    /**
     * Метаданные склада
     * @var Store
     */
    public Store $store;
    /**
     * Сумма Заказа в установленной валюте
     * @Readonly
     * @var int
     */
    public int $sum;
    /**
     * ID синхронизации
     * @Readonly
     * @var string
     */
    public string $syncId;
    /**
     * Код системы налогообложения
     * @var string
     */
    public string $taxSystem;
    /**
     * Время последнего обновления
     * @var \DateTime
     */
    public \DateTime $updated;
    /**
     * Учитывается ли НДС
     * @var bool
     */
    public bool $vatEnabled;
    /**
     * Включен ли НДС в цену
     * @var bool
     */
    public bool $vatIncluded;
    /**
     * Сумма НДС
     * @Readonly
     * @var float
     */
    public float $vatSum;

    protected static string $_path = '/entity/customerorder/';
    protected static string $_type = 'customerorder';

    /**
     * Задать позиции заказа для добавления
     * @param array|CustomEntity[] $items
     * @return self
     */
    public function setPositions(array $items): self
    {
        $value = [];
        foreach ($items as $item) {
            if (get_class($item) === CustomerOrderPosition::class) {
                $value[] = $item;
            }
        }
        $this->addAttached('positions', $value);
        return $this;
    }
}
