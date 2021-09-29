<?php


namespace Fy\Yeepay\Yop\Sdk\Service\Account\Model;


use Fy\Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class RechargeOnlinebankOrderResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var RechargeOnlinebankOrderResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new RechargeOnlinebankOrderResponseUnMarshaller();
    }

    /**
     * @return RechargeOnlinebankOrderResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return RechargeOnlinebankOrderResponse
     */
    protected function getResponseInstance()
    {
        return new RechargeOnlinebankOrderResponse();
    }
}

RechargeOnlinebankOrderResponseUnMarshaller::__init();
