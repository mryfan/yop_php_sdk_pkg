<?php


namespace Fy\Yeepay\Yop\Sdk\Service\Mer\Model;


use Fy\Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class RegisterQueryResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var RegisterQueryResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new RegisterQueryResponseUnMarshaller();
    }

    /**
     * @return RegisterQueryResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return RegisterQueryResponse
     */
    protected function getResponseInstance()
    {
        return new RegisterQueryResponse();
    }
}

RegisterQueryResponseUnMarshaller::__init();
