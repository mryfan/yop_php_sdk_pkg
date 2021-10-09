<?php


namespace Fy\Yeepay\Yop\Sdk\Service\Trade\Model;


use Fy\Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class RefundEndResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var RefundEndResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new RefundEndResponseUnMarshaller();
    }

    /**
     * @return RefundEndResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return RefundEndResponse
     */
    protected function getResponseInstance()
    {
        return new RefundEndResponse();
    }
}

RefundEndResponseUnMarshaller::__init();
