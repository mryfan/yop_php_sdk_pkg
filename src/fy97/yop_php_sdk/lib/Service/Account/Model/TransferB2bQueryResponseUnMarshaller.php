<?php


namespace Fy\Yeepay\Yop\Sdk\Service\Account\Model;


use Fy\Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class TransferB2bQueryResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var TransferB2bQueryResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new TransferB2bQueryResponseUnMarshaller();
    }

    /**
     * @return TransferB2bQueryResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return TransferB2bQueryResponse
     */
    protected function getResponseInstance()
    {
        return new TransferB2bQueryResponse();
    }
}

TransferB2bQueryResponseUnMarshaller::__init();
