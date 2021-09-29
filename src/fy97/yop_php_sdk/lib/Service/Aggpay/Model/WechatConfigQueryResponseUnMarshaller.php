<?php


namespace Fy\Yeepay\Yop\Sdk\Service\Aggpay\Model;


use Fy\Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class WechatConfigQueryResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var WechatConfigQueryResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new WechatConfigQueryResponseUnMarshaller();
    }

    /**
     * @return WechatConfigQueryResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return WechatConfigQueryResponse
     */
    protected function getResponseInstance()
    {
        return new WechatConfigQueryResponse();
    }
}

WechatConfigQueryResponseUnMarshaller::__init();
