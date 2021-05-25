<?php

namespace MoySkladSDK\Entity;

/**
 * Class Context
 * Метаданные о сотруднике, выполнившем запрос
 * @package MoySkladSDK\Entity
 * @author gringa <gringa@gringa.me>
 * @licence MIT
 */
class Context
{
    /**
     * Сотрудник
     * @var Employee
     */
    public Employee $employee;
}
