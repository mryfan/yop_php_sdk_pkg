<?php


namespace Fy\Yeepay\Yop\Sdk\Service\Account\Model;


use Fy\Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class ReceiptGetResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var ReceiptGetResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new ReceiptGetResponseUnMarshaller();
    }

    /**
     * @return ReceiptGetResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return ReceiptGetResponse
     */
    protected function getResponseInstance()
    {
        return new ReceiptGetResponse();
    }
}

ReceiptGetResponseUnMarshaller::__init();
