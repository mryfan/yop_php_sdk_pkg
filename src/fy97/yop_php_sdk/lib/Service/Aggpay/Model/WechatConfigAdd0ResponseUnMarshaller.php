<?php


namespace Fy\Yeepay\Yop\Sdk\Service\Aggpay\Model;


use Fy\Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class WechatConfigAdd0ResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var WechatConfigAdd0ResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new WechatConfigAdd0ResponseUnMarshaller();
    }

    /**
     * @return WechatConfigAdd0ResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return WechatConfigAdd0Response
     */
    protected function getResponseInstance()
    {
        return new WechatConfigAdd0Response();
    }
}

WechatConfigAdd0ResponseUnMarshaller::__init();
