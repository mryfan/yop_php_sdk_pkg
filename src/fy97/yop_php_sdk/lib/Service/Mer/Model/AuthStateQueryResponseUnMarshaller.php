<?php


namespace Fy\Yeepay\Yop\Sdk\Service\Mer\Model;


use Fy\Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class AuthStateQueryResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var AuthStateQueryResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new AuthStateQueryResponseUnMarshaller();
    }

    /**
     * @return AuthStateQueryResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return AuthStateQueryResponse
     */
    protected function getResponseInstance()
    {
        return new AuthStateQueryResponse();
    }
}

AuthStateQueryResponseUnMarshaller::__init();
