<?php

namespace MoySkladSDK;

use Exception;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\ClientException;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Psr7\Request;
use MoySkladSDK\Client\EntityClient;
use MoySkladSDK\Exception\ApiClientException;

/**
 * Class ApiClient
 * Базоый класс для подключения к API
 * @package MoySkladSDK
 * @author gringa <gringa@gringa.me>
 * @licence MIT
 */
class ApiClient
{
    public const API_ADDRESS = 'https://online.moysklad.ru';
    public const API_PATH = '/api/remap/1.2';

    private string $login;
    private string $password;
    private string $token;

    /**
     * @param array $credentials массив с парметрами подключения[login, password] или [token]
     * @throws Exception
     */
    public function __construct(array $credentials)
    {
        if (isset($credentials['token'])) {
            $this->token = $credentials['token'];
        } elseif (isset($credentials['login'], $credentials['password'])) {
            $this->login = $credentials['login'];
            $this->password = $credentials['password'];
        } else {
            throw new Exception('Credential login, password or token must be set!');
        }
    }

    /**
     * Отправка DELETE запроса
     * @param RequestPreparer $requestPreparer
     * @throws ApiClientException
     */
    public function delete(RequestPreparer $requestPreparer)
    {
        $headers = array_merge($requestPreparer->getHeaders(), $this->auth());
        $url = $requestPreparer->buildFullUrl();
        if (0 !== strpos($url, '/')) {
            $url = '/'.$url;
        }
        $url = self::API_ADDRESS.self::API_PATH.$url;
        $request = new Request('DELETE', $url, $headers);
        $this->executeRequest($request);
    }

    /**
     * Базовый метод для вызова сущностей
     * @return EntityClient
     */
    public function entity(): EntityClient
    {
        return new EntityClient($this);
    }

    /**
     * Отправка GET зароса
     * @param RequestPreparer $requestPreparer
     * @param string $className Имя класса в который будет обернут ответ, пустое для возврата массива
     * @return array|bool|float|int|mixed|string
     * @throws \ReflectionException|ApiClientException
     */
    public function get(RequestPreparer $requestPreparer, string $className = '')
    {
        $headers = array_merge($requestPreparer->getHeaders(), $this->auth());
        $url = $requestPreparer->buildFullUrl();
        if (0 !== strpos($url, '/')) {
            $url = '/'.$url;
        }
        $url = self::API_ADDRESS.self::API_PATH.$url;
        $request = new Request('GET', $url, $headers);
        return Serializer::deserialize($this->executeRequest($request), $className);
    }

    /**
     * Отправка POST запроса
     * @param RequestPreparer $requestPreparer
     * @param string $className Имя класса в который будет обернут ответ, пустое для возврата массива
     * @return array|bool|float|int|mixed|string
     * @throws \ReflectionException|ApiClientException
     */
    public function post(RequestPreparer $requestPreparer, string $className)
    {
        $headers = array_merge($requestPreparer->getHeaders(), $this->auth());
        $url = $requestPreparer->buildFullUrl();
        if (0 !== strpos($url, '/')) {
            $url = '/'.$url;
        }
        $url = self::API_ADDRESS.self::API_PATH.$url;
        $request = new Request('POST', $url, $headers, json_encode($requestPreparer->getBody()));
        return Serializer::deserialize($this->executeRequest($request), $className);
    }

    /**
     * @param RequestPreparer $requestPreparer
     * @param string $className Имя класса в который будет обернут ответ, пустое для возврата массива
     * @return array|bool|float|int|mixed|string
     * @throws \ReflectionException|ApiClientException
     */
    public function put(RequestPreparer $requestPreparer, string $className)
    {
        $headers = array_merge($requestPreparer->getHeaders(), $this->auth());
        $url = $requestPreparer->buildFullUrl();
        if (0 !== strpos($url, '/')) {
            $url = '/'.$url;
        }
        $url = self::API_ADDRESS.self::API_PATH.$url;
        $request = new Request('PUT', $url, $headers, json_encode($requestPreparer->getBody()));
        return Serializer::deserialize($this->executeRequest($request), $className);
    }

    /**
     * Возврат параметров для авторизации
     * @return array
     */
    private function auth(): array
    {
        $headers = [];
        if (isset($api->token)) {
            $headers['Authorization'] = 'Bearer '.$this->token;
        } else {
            $headers['Authorization'] = 'Basic '.base64_encode($this->login.':'.$this->password);
        }

        return $headers;
    }

    /**
     * Выполнение запроса
     * @param Request $request
     * @return string
     * @throws ApiClientException
     */
    private function executeRequest(Request $request): string
    {
        try {
            $response = (new Client())->send($request);
            if (!in_array($response->getStatusCode(), [200, 201, 204])) {
                throw new ApiClientException(
                    $request->getMethod().' '.$request->getUri(),
                    $response->getStatusCode(),
                    $response->getReasonPhrase()
                );
            }
            return $response->getBody()->getContents();
        } catch (GuzzleException $e) {
            $message = $e->getMessage();
            if ($e instanceof ClientException) {
                $message .= ' Response content: '.$e->getResponse()->getBody()->getContents();
            }
            throw new ApiClientException($request->getMethod().' '.$request->getUri(), $e->getCode(), $message);
        }
    }
}
