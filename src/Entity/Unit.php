<?php

namespace MoySkladSDK\Entity;

/**
 * Class Unit
 * @package MoySkladSDK\Entity
 * @author gringa <gringa@gringa.me>
 * @licence MIT
 * @link https://dev.moysklad.ru/doc/api/remap/1.2/dictionaries/#suschnosti-valuta-obnowit-nastrojki-sprawochnika-towarow-atributy-wlozhennyh-suschnostej-formy-edinic
 */
class Unit
{
    /**
     * Грамматический род единицы
     * @var string
     */
    public string $gender;
    /**
     * Форма единицы, используемая при числительном 1
     * @var string
     */
    public string $s1;
    /**
     * Форма единицы, используемая при числительном 2
     * @var string
     */
    public string $s2;
    /**
     * Форма единицы, используемая при числительном 5
     * @var string
     */
    public string $s5;
}
