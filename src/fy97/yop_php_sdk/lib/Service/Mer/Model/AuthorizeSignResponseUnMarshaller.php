<?php


namespace Fy\Yeepay\Yop\Sdk\Service\Mer\Model;


use Fy\Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class AuthorizeSignResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var AuthorizeSignResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new AuthorizeSignResponseUnMarshaller();
    }

    /**
     * @return AuthorizeSignResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return AuthorizeSignResponse
     */
    protected function getResponseInstance()
    {
        return new AuthorizeSignResponse();
    }
}

AuthorizeSignResponseUnMarshaller::__init();
