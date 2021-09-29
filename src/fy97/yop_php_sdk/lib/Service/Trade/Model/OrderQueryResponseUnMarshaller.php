<?php


namespace Fy\Yeepay\Yop\Sdk\Service\Trade\Model;


use Fy\Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class OrderQueryResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var OrderQueryResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new OrderQueryResponseUnMarshaller();
    }

    /**
     * @return OrderQueryResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return OrderQueryResponse
     */
    protected function getResponseInstance()
    {
        return new OrderQueryResponse();
    }
}

OrderQueryResponseUnMarshaller::__init();
