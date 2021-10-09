<?php


namespace Fy\Yeepay\Yop\Sdk\Service\Aggpay\Model;


use Fy\Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class WechatConfigQuery0ResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var WechatConfigQuery0ResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new WechatConfigQuery0ResponseUnMarshaller();
    }

    /**
     * @return WechatConfigQuery0ResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return WechatConfigQuery0Response
     */
    protected function getResponseInstance()
    {
        return new WechatConfigQuery0Response();
    }
}

WechatConfigQuery0ResponseUnMarshaller::__init();
