<?php

namespace MoySkladSDK\Client;

use MoySkladSDK\Actions\CreateEntity;
use MoySkladSDK\Actions\DeleteEntities;
use MoySkladSDK\Actions\DeleteEntity;
use MoySkladSDK\Actions\GetEntity;
use MoySkladSDK\Actions\GetEntityList;
use MoySkladSDK\Actions\GetMetadata;
use MoySkladSDK\Actions\GetMetadataAttribute;
use MoySkladSDK\Actions\UpdateEntities;
use MoySkladSDK\Actions\UpdateEntity;
use MoySkladSDK\Entity\Account;
use MoySkladSDK\Entity\ContactPerson;
use MoySkladSDK\Entity\Counterparty;
use MoySkladSDK\Entity\ListEntity;
use MoySkladSDK\Entity\Note;
use MoySkladSDK\Param\QueryParam;
use MoySkladSDK\RequestPreparer;

/**
 * Class CounterpartyClient
 * Клиент для сущности Контрагентов
 * @package MoySkladSDK\Client
 * @author gringa <gringa@gringa.me>
 * @licence MIT
 */
class CounterpartyClient extends EntityClientBase
{
    use CreateEntity;
    use DeleteEntities;
    use DeleteEntity;
    use GetEntity;
    use GetEntityList;
    use GetMetadata;
    use GetMetadataAttribute;
    use UpdateEntities;
    use UpdateEntity;

    /**
     * Создать Контактное лицо Контрагента
     * @param string $counterpartyId ID Контрагента
     * @param ContactPerson $contactPerson Экземпляр класса сущности для создания
     * @param QueryParam|null $params Параметры запроса
     * @return ContactPerson
     * @throws \MoySkladSDK\Exception\ApiClientException|\ReflectionException
     */
    public function createContactPerson(string $counterpartyId, ContactPerson $contactPerson, QueryParam $params = null): ContactPerson
    {
        if (is_null($params)) {
            $params = new QueryParam();
        }
        return $this->api->post(RequestPreparer::path($this->getPath().$counterpartyId.'/contactperson')->body($contactPerson)->params($params), ContactPerson::class);
    }

    /**
     * Создать Контактное лицо Контрагента
     * @param string $counterpartyId ID Контрагента
     * @param Note $note Экземпляр класса сущности для создания
     * @param QueryParam|null $params Параметры запроса
     * @return Note
     * @throws \MoySkladSDK\Exception\ApiClientException|\ReflectionException
     */
    public function createNote(string $counterpartyId, Note $note, QueryParam $params = null): Note
    {
        if (is_null($params)) {
            $params = new QueryParam();
        }
        return $this->api->post(RequestPreparer::path($this->getPath().$counterpartyId.'/notes')->body($note)->params($params), Note::class);
    }

    /**
     * Удалить Событие Контрагента
     * @param string $counterpartyId ID Контрагента
     * @param string $noteId ID События
     * @param QueryParam|null $params Параметры запроса
     * @throws \MoySkladSDK\Exception\ApiClientException|\ReflectionException
     */
    public function deleteNote(string $counterpartyId, string $noteId, QueryParam $params = null): void
    {
        if (is_null($params)) {
            $params = new QueryParam();
        }
        $this->api->delete(RequestPreparer::path($this->getPath().$counterpartyId.'/notes/'.$noteId)->params($params));
    }

    /**
     * Получить счет Контрагента
     * @param string $counterpartyId ID Контрагента
     * @param string $accountId ID Счета
     * @param QueryParam|null $params Параметры запроса
     * @return Account
     * @throws \MoySkladSDK\Exception\ApiClientException|\ReflectionException
     */
    public function getAccount(string $counterpartyId, string $accountId, QueryParam $params = null): Account
    {
        if (is_null($params)) {
            $params = new QueryParam();
        }
        return $this->api->get(RequestPreparer::path($this->getPath().$counterpartyId.'/accounts/'.$accountId)->params($params), Account::class);
    }

    /**
     * Получить список счетов Контрагента
     * @param string $counterpartyId
     * @param QueryParam|null $params Параметры запроса
     * @return ListEntity
     * @throws \MoySkladSDK\Exception\ApiClientException|\ReflectionException
     */
    public function getAccountList(string $counterpartyId, QueryParam $params = null): ListEntity
    {
        if (is_null($params)) {
            $params = new QueryParam();
        }
        return $this->api->get(RequestPreparer::path($this->getPath().$counterpartyId.'/accounts')->params($params), ListEntity::class);
    }

    /**
     * Получить счет Контрагента
     * @param string $counterpartyId ID Контрагента
     * @param string $contactPersonId ID Контактного лица
     * @param QueryParam|null $params Параметры запроса
     * @return ContactPerson
     * @throws \MoySkladSDK\Exception\ApiClientException|\ReflectionException
     */
    public function getContactPerson(string $counterpartyId, string $contactPersonId, QueryParam $params = null): ContactPerson
    {
        if (is_null($params)) {
            $params = new QueryParam();
        }
        return $this->api->get(RequestPreparer::path($this->getPath().$counterpartyId.'/contactperson/'.$contactPersonId)->params($params), ContactPerson::class);
    }

    /**
     * Получить список Контакных лиц Контрагента
     * @param string $counterpartyId
     * @param QueryParam|null $params Параметры запроса
     * @return ListEntity
     * @throws \MoySkladSDK\Exception\ApiClientException|\ReflectionException
     */
    public function getContactPersonList(string $counterpartyId, QueryParam $params = null): ListEntity
    {
        if (is_null($params)) {
            $params = new QueryParam();
        }
        return $this->api->get(RequestPreparer::path($this->getPath().$counterpartyId.'/contactperson')->params($params), ListEntity::class);
    }

    /**
     * Получить Событие Контрагента
     * @param string $counterpartyId ID Контрагента
     * @param string $noteId ID События
     * @param QueryParam|null $params Параметры запроса
     * @return Note
     * @throws \MoySkladSDK\Exception\ApiClientException|\ReflectionException
     */
    public function getNote(string $counterpartyId, string $noteId, QueryParam $params = null): Note
    {
        if (is_null($params)) {
            $params = new QueryParam();
        }
        return $this->api->get(RequestPreparer::path($this->getPath().$counterpartyId.'/notes/'.$noteId)->params($params), Note::class);
    }

    /**
     * Получить список Событий лиц Контрагента
     * @param string $counterpartyId
     * @param QueryParam|null $params Параметры запроса
     * @return ListEntity
     * @throws \MoySkladSDK\Exception\ApiClientException|\ReflectionException
     */
    public function getNoteList(string $counterpartyId, QueryParam $params = null): ListEntity
    {
        if (is_null($params)) {
            $params = new QueryParam();
        }
        return $this->api->get(RequestPreparer::path($this->getPath().$counterpartyId.'/notes')->params($params), ListEntity::class);
    }

    /**
     * Обновить Контактное лицо Контрагента
     * @param string $counterpartyId ID Контрагента
     * @param string $contactPersonId ID Контактного лица
     * @param ContactPerson $contactPerson Экземпляр класса сущности для обновления
     * @param QueryParam|null $params Параметры запроса
     * @return ContactPerson
     * @throws \MoySkladSDK\Exception\ApiClientException|\ReflectionException
     */
    public function updateContactPerson(string $counterpartyId, string $contactPersonId, ContactPerson $contactPerson, QueryParam $params = null): ContactPerson
    {
        if (is_null($params)) {
            $params = new QueryParam();
        }
        return $this->api->put(RequestPreparer::path($this->getPath().$counterpartyId.'/contactperson/'.$contactPersonId)->body($contactPerson)->params($params), ContactPerson::class);
    }

    /**
     * Обновить Событие лицо Контрагента
     * @param string $counterpartyId ID Контрагента
     * @param string $noteId ID Контактного лица
     * @param Note $note Экземпляр класса сущности для обновления
     * @param QueryParam|null $params Параметры запроса
     * @return Note
     * @throws \MoySkladSDK\Exception\ApiClientException|\ReflectionException
     */
    public function updateNote(string $counterpartyId, string $noteId, Note $note, QueryParam $params = null): Note
    {
        if (is_null($params)) {
            $params = new QueryParam();
        }
        return $this->api->put(RequestPreparer::path($this->getPath().$counterpartyId.'/notes/'.$noteId)->body($note)->params($params), Note::class);
    }

    protected function getClass(): string
    {
        return Counterparty::class;
    }

    protected function getPath(): string
    {
        return Counterparty::getPath();
    }
}
