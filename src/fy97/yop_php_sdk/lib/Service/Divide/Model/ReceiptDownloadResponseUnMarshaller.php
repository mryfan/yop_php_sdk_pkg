<?php


namespace Fy\Yeepay\Yop\Sdk\Service\Divide\Model;


use Fy\Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class ReceiptDownloadResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var ReceiptDownloadResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new ReceiptDownloadResponseUnMarshaller();
    }

    /**
     * @return ReceiptDownloadResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return ReceiptDownloadResponse
     */
    protected function getResponseInstance()
    {
        return new ReceiptDownloadResponse();
    }
}

ReceiptDownloadResponseUnMarshaller::__init();
