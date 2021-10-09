<?php


namespace Fy\Yeepay\Yop\Sdk\Service\Account\Model;


use Fy\Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class WithdrawCardModifyResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var WithdrawCardModifyResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new WithdrawCardModifyResponseUnMarshaller();
    }

    /**
     * @return WithdrawCardModifyResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return WithdrawCardModifyResponse
     */
    protected function getResponseInstance()
    {
        return new WithdrawCardModifyResponse();
    }
}

WithdrawCardModifyResponseUnMarshaller::__init();
