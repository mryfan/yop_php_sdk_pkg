<?php


namespace Fy\Yeepay\Yop\Sdk\Service\Trade\Model;


use Fy\Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class OrderResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var OrderResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new OrderResponseUnMarshaller();
    }

    /**
     * @return OrderResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return OrderResponse
     */
    protected function getResponseInstance()
    {
        return new OrderResponse();
    }
}

OrderResponseUnMarshaller::__init();
