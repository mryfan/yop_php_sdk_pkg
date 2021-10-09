<?php


namespace Fy\Yeepay\Yop\Sdk\Service\Account\Model;


use Fy\Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class EnterpriseAccountPayOrderResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var EnterpriseAccountPayOrderResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new EnterpriseAccountPayOrderResponseUnMarshaller();
    }

    /**
     * @return EnterpriseAccountPayOrderResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return EnterpriseAccountPayOrderResponse
     */
    protected function getResponseInstance()
    {
        return new EnterpriseAccountPayOrderResponse();
    }
}

EnterpriseAccountPayOrderResponseUnMarshaller::__init();
