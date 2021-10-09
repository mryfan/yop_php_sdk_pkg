<?php


namespace Fy\Yeepay\Yop\Sdk\Service\Account\Model;


use Fy\Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class WithdrawCardQueryResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var WithdrawCardQueryResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new WithdrawCardQueryResponseUnMarshaller();
    }

    /**
     * @return WithdrawCardQueryResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return WithdrawCardQueryResponse
     */
    protected function getResponseInstance()
    {
        return new WithdrawCardQueryResponse();
    }
}

WithdrawCardQueryResponseUnMarshaller::__init();
