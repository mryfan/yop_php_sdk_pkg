<?php


namespace Fy\Yeepay\Yop\Sdk\Service\Account\Model;


use Fy\Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class WithdrawCardBindResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var WithdrawCardBindResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new WithdrawCardBindResponseUnMarshaller();
    }

    /**
     * @return WithdrawCardBindResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return WithdrawCardBindResponse
     */
    protected function getResponseInstance()
    {
        return new WithdrawCardBindResponse();
    }
}

WithdrawCardBindResponseUnMarshaller::__init();
