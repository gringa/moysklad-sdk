<?php

namespace MoySkladSDK\Exception;

/**
 * Class ApiClientException
 * @package MoySkladSDK
 * @author gringa <gringa@gringa.me>
 * @licence MIT
 */
class ApiClientException extends \Exception
{
    /**
     * @var string
     */
    private string $reasonPhrase;
    /**
     * @var int
     */
    private int $statusCode;

    /**
     * ApiClientException constructor.
     * @param string $uri
     * @param int $statusCode
     * @param string $reasonPhrase
     */
    public function __construct(string $uri, int $statusCode, string $reasonPhrase)
    {
        parent::__construct($uri.': '.$statusCode.' '.$reasonPhrase, $statusCode);

        $this->statusCode = $statusCode;
        $this->reasonPhrase = $reasonPhrase;
    }
}
