<?php


namespace Fy\Yeepay\Yop\Sdk\Service\Mer\Model;


use Fy\Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class AuthorizeRelieveResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var AuthorizeRelieveResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new AuthorizeRelieveResponseUnMarshaller();
    }

    /**
     * @return AuthorizeRelieveResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return AuthorizeRelieveResponse
     */
    protected function getResponseInstance()
    {
        return new AuthorizeRelieveResponse();
    }
}

AuthorizeRelieveResponseUnMarshaller::__init();
