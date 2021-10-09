<?php


namespace Fy\Yeepay\Yop\Sdk\Service\Account\Model;


use Fy\Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class PayBatchOrderResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var PayBatchOrderResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new PayBatchOrderResponseUnMarshaller();
    }

    /**
     * @return PayBatchOrderResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return PayBatchOrderResponse
     */
    protected function getResponseInstance()
    {
        return new PayBatchOrderResponse();
    }
}

PayBatchOrderResponseUnMarshaller::__init();
