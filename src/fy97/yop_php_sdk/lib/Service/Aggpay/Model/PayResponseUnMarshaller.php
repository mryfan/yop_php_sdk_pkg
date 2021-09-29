<?php


namespace Fy\Yeepay\Yop\Sdk\Service\Aggpay\Model;


use Fy\Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class PayResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var PayResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new PayResponseUnMarshaller();
    }

    /**
     * @return PayResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return PayResponse
     */
    protected function getResponseInstance()
    {
        return new PayResponse();
    }
}

PayResponseUnMarshaller::__init();
