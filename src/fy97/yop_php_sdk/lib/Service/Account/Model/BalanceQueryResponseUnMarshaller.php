<?php


namespace Fy\Yeepay\Yop\Sdk\Service\Account\Model;


use Fy\Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class BalanceQueryResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var BalanceQueryResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new BalanceQueryResponseUnMarshaller();
    }

    /**
     * @return BalanceQueryResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return BalanceQueryResponse
     */
    protected function getResponseInstance()
    {
        return new BalanceQueryResponse();
    }
}

BalanceQueryResponseUnMarshaller::__init();
