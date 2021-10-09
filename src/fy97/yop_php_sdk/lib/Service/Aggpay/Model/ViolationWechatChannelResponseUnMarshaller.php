<?php


namespace Fy\Yeepay\Yop\Sdk\Service\Aggpay\Model;


use Fy\Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class ViolationWechatChannelResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var ViolationWechatChannelResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new ViolationWechatChannelResponseUnMarshaller();
    }

    /**
     * @return ViolationWechatChannelResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return ViolationWechatChannelResponse
     */
    protected function getResponseInstance()
    {
        return new ViolationWechatChannelResponse();
    }
}

ViolationWechatChannelResponseUnMarshaller::__init();
