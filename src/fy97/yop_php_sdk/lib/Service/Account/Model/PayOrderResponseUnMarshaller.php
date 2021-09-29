<?php


namespace Fy\Yeepay\Yop\Sdk\Service\Account\Model;


use Fy\Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class PayOrderResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var PayOrderResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new PayOrderResponseUnMarshaller();
    }

    /**
     * @return PayOrderResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return PayOrderResponse
     */
    protected function getResponseInstance()
    {
        return new PayOrderResponse();
    }
}

PayOrderResponseUnMarshaller::__init();
