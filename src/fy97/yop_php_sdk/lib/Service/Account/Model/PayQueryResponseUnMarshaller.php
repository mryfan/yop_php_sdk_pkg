<?php


namespace Fy\Yeepay\Yop\Sdk\Service\Account\Model;


use Fy\Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class PayQueryResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var PayQueryResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new PayQueryResponseUnMarshaller();
    }

    /**
     * @return PayQueryResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return PayQueryResponse
     */
    protected function getResponseInstance()
    {
        return new PayQueryResponse();
    }
}

PayQueryResponseUnMarshaller::__init();
