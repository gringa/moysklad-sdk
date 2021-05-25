<?php

namespace MoySkladSDK\Entity;

use MoySkladSDK\Annotation\Readonly;

/**
 * Class Employee
 * Сотрудник
 * @package MoySkladSDK\Entity
 * @author gringa <gringa@gringa.me>
 * @licence MIT
 * @link https://dev.moysklad.ru/doc/api/remap/1.2/dictionaries/#suschnosti-sotrudnik
 */
class Employee extends MetaEntity
{
    /**
     * Добавлен ли Сотрудник в архив
     * @var bool
     */
    public bool $archived;
    /**
     * Дополнительные поля Сотрудника
     * @var array
     * @todo Реализовать отдельный класс
     */
    public array $attributes;
    /**
     * Массив кассиров
     * @Readonly
     * @var array
     * @todo Реализовать отдельный класс
     * @link https://dev.moysklad.ru/doc/api/remap/1.2/dictionaries/#suschnosti-sotrudnik-sotrudniki-atributy-wlozhennyh-suschnostej-kassir
     */
    public array $cashiers;
    /**
     * Код Сотрудника
     * @var string
     */
    public string $code;
    /**
     * Момент создания Сотрудника
     * @Readonly
     * @var \DateTime
     */
    public \DateTime $created;
    /**
     * Комментарий к Сотруднику
     * @var string
     */
    public string $description;
    /**
     * Электронная почта сотрудника
     * @var string
     */
    public string $email;
    /**
     * Внешний код Сотрудника
     * @var string
     */
    public string $externalCode;
    /**
     * Имя
     * @var string
     */
    public string $firstName;
    /**
     * Имя Отчество Фамилия
     * @Readonly
     * @var string
     */
    public string $fullName;
    /**
     * Отдел сотрудника
     * @var Group
     */
    public Group $group;
    /**
     * Фотография сотрудника
     * @var array
     * @todo Реализовать отдельный класс
     * @link https://dev.moysklad.ru/doc/api/remap/1.2/dictionaries/#suschnosti-sotrudnik-sotrudniki-atributy-wlozhennyh-suschnostej-fotografiq-sotrudnika-struktura-i-zagruzka
     */
    public array $image;
    /**
     * ИНН сотрудника (в формате ИНН физического лица)
     * @var string
     */
    public string $inn;
    /**
     * Фамилия
     * @var string
     */
    public string $lastName;
    /**
     * Отчество
     * @var string
     */
    public string $middleName;
    /**
     * Наименование Сотрудника
     * @Readonly
     * @var string
     */
    public string $name;
    /**
     * Владелец (Сотрудник)
     * @var Employee $this
     */
    public Employee $owner;
    /**
     * Телефон сотрудника
     * @var string
     */
    public string $phone;
    /**
     * Должность сотрудника
     * @var array
     */
    public array $position;
    /**
     * Общий доступ
     * @var bool
     */
    public bool $shared;
    /**
     * Краткое ФИО
     * @Readonly
     * @var string
     */
    public string $shortFio;
    /**
     * Логин сотрудника
     * @Readonly
     * @var string
     */
    public string $uid;
    /**
     * Момент последнего обновления Сотрудника
     * @Readonly
     * @var \DateTime
     */
    public \DateTime $updated;

    private static string $_path = '/entity/employee/';
    private static string $_type = 'employee';
}
