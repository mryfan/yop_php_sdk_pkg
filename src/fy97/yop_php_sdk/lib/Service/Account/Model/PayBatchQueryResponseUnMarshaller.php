<?php


namespace Fy\Yeepay\Yop\Sdk\Service\Account\Model;


use Fy\Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class PayBatchQueryResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var PayBatchQueryResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new PayBatchQueryResponseUnMarshaller();
    }

    /**
     * @return PayBatchQueryResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return PayBatchQueryResponse
     */
    protected function getResponseInstance()
    {
        return new PayBatchQueryResponse();
    }
}

PayBatchQueryResponseUnMarshaller::__init();
