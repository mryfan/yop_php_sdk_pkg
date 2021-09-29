<?php


namespace Fy\Yeepay\Yop\Sdk\Service\Account\Model;


use Fy\Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class EnterpriseAutoPaymentQueryResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var EnterpriseAutoPaymentQueryResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new EnterpriseAutoPaymentQueryResponseUnMarshaller();
    }

    /**
     * @return EnterpriseAutoPaymentQueryResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return EnterpriseAutoPaymentQueryResponse
     */
    protected function getResponseInstance()
    {
        return new EnterpriseAutoPaymentQueryResponse();
    }
}

EnterpriseAutoPaymentQueryResponseUnMarshaller::__init();
