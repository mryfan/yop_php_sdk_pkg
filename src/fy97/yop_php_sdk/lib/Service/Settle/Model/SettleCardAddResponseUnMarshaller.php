<?php


namespace Fy\Yeepay\Yop\Sdk\Service\Settle\Model;


use Fy\Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class SettleCardAddResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var SettleCardAddResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new SettleCardAddResponseUnMarshaller();
    }

    /**
     * @return SettleCardAddResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return SettleCardAddResponse
     */
    protected function getResponseInstance()
    {
        return new SettleCardAddResponse();
    }
}

SettleCardAddResponseUnMarshaller::__init();
