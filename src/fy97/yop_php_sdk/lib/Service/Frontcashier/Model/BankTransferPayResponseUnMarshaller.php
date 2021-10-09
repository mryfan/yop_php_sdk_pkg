<?php


namespace Fy\Yeepay\Yop\Sdk\Service\Frontcashier\Model;


use Fy\Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class BankTransferPayResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var BankTransferPayResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new BankTransferPayResponseUnMarshaller();
    }

    /**
     * @return BankTransferPayResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return BankTransferPayResponse
     */
    protected function getResponseInstance()
    {
        return new BankTransferPayResponse();
    }
}

BankTransferPayResponseUnMarshaller::__init();
