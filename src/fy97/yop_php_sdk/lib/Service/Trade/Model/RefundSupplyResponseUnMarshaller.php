<?php


namespace Fy\Yeepay\Yop\Sdk\Service\Trade\Model;


use Fy\Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class RefundSupplyResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var RefundSupplyResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new RefundSupplyResponseUnMarshaller();
    }

    /**
     * @return RefundSupplyResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return RefundSupplyResponse
     */
    protected function getResponseInstance()
    {
        return new RefundSupplyResponse();
    }
}

RefundSupplyResponseUnMarshaller::__init();
