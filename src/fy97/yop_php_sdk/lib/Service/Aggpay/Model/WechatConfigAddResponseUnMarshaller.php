<?php


namespace Fy\Yeepay\Yop\Sdk\Service\Aggpay\Model;


use Fy\Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class WechatConfigAddResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var WechatConfigAddResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new WechatConfigAddResponseUnMarshaller();
    }

    /**
     * @return WechatConfigAddResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return WechatConfigAddResponse
     */
    protected function getResponseInstance()
    {
        return new WechatConfigAddResponse();
    }
}

WechatConfigAddResponseUnMarshaller::__init();
