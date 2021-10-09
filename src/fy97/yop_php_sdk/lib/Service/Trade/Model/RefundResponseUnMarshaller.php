<?php


namespace Fy\Yeepay\Yop\Sdk\Service\Trade\Model;


use Fy\Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class RefundResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var RefundResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new RefundResponseUnMarshaller();
    }

    /**
     * @return RefundResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return RefundResponse
     */
    protected function getResponseInstance()
    {
        return new RefundResponse();
    }
}

RefundResponseUnMarshaller::__init();
