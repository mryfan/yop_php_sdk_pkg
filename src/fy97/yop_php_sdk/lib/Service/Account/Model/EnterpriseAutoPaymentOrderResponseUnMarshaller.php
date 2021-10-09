<?php


namespace Fy\Yeepay\Yop\Sdk\Service\Account\Model;


use Fy\Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class EnterpriseAutoPaymentOrderResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var EnterpriseAutoPaymentOrderResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new EnterpriseAutoPaymentOrderResponseUnMarshaller();
    }

    /**
     * @return EnterpriseAutoPaymentOrderResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return EnterpriseAutoPaymentOrderResponse
     */
    protected function getResponseInstance()
    {
        return new EnterpriseAutoPaymentOrderResponse();
    }
}

EnterpriseAutoPaymentOrderResponseUnMarshaller::__init();
