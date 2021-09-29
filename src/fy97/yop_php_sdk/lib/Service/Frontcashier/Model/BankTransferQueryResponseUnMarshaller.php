<?php


namespace Fy\Yeepay\Yop\Sdk\Service\Frontcashier\Model;


use Fy\Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class BankTransferQueryResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var BankTransferQueryResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new BankTransferQueryResponseUnMarshaller();
    }

    /**
     * @return BankTransferQueryResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return BankTransferQueryResponse
     */
    protected function getResponseInstance()
    {
        return new BankTransferQueryResponse();
    }
}

BankTransferQueryResponseUnMarshaller::__init();
