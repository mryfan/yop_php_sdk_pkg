<?php


namespace Fy\Yeepay\Yop\Sdk\Service\Settle\Model;


use Fy\Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class SettleCardModifyResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var SettleCardModifyResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new SettleCardModifyResponseUnMarshaller();
    }

    /**
     * @return SettleCardModifyResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return SettleCardModifyResponse
     */
    protected function getResponseInstance()
    {
        return new SettleCardModifyResponse();
    }
}

SettleCardModifyResponseUnMarshaller::__init();
