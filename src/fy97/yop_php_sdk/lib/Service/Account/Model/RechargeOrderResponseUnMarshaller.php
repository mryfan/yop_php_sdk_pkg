<?php


namespace Fy\Yeepay\Yop\Sdk\Service\Account\Model;


use Fy\Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class RechargeOrderResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var RechargeOrderResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new RechargeOrderResponseUnMarshaller();
    }

    /**
     * @return RechargeOrderResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return RechargeOrderResponse
     */
    protected function getResponseInstance()
    {
        return new RechargeOrderResponse();
    }
}

RechargeOrderResponseUnMarshaller::__init();
