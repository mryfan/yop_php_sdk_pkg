<?php


namespace Fy\Yeepay\Yop\Sdk\Service\Trade\Model;


use Fy\Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class OrderCombineQueryResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var OrderCombineQueryResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new OrderCombineQueryResponseUnMarshaller();
    }

    /**
     * @return OrderCombineQueryResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return OrderCombineQueryResponse
     */
    protected function getResponseInstance()
    {
        return new OrderCombineQueryResponse();
    }
}

OrderCombineQueryResponseUnMarshaller::__init();
