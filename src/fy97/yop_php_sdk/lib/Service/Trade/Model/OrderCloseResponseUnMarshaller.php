<?php


namespace Fy\Yeepay\Yop\Sdk\Service\Trade\Model;


use Fy\Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class OrderCloseResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var OrderCloseResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new OrderCloseResponseUnMarshaller();
    }

    /**
     * @return OrderCloseResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return OrderCloseResponse
     */
    protected function getResponseInstance()
    {
        return new OrderCloseResponse();
    }
}

OrderCloseResponseUnMarshaller::__init();
