<?php


namespace Fy\Yeepay\Yop\Sdk\Service\Trade\Model;


use Fy\Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class RefundQueryResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var RefundQueryResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new RefundQueryResponseUnMarshaller();
    }

    /**
     * @return RefundQueryResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return RefundQueryResponse
     */
    protected function getResponseInstance()
    {
        return new RefundQueryResponse();
    }
}

RefundQueryResponseUnMarshaller::__init();
