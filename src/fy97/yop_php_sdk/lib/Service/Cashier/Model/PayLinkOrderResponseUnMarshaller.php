<?php


namespace Fy\Yeepay\Yop\Sdk\Service\Cashier\Model;


use Fy\Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class PayLinkOrderResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var PayLinkOrderResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new PayLinkOrderResponseUnMarshaller();
    }

    /**
     * @return PayLinkOrderResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return PayLinkOrderResponse
     */
    protected function getResponseInstance()
    {
        return new PayLinkOrderResponse();
    }
}

PayLinkOrderResponseUnMarshaller::__init();
