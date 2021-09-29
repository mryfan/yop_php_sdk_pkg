<?php


namespace Fy\Yeepay\Yop\Sdk\Service\Divide\Model;


use Fy\Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class ApplyResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var ApplyResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new ApplyResponseUnMarshaller();
    }

    /**
     * @return ApplyResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return ApplyResponse
     */
    protected function getResponseInstance()
    {
        return new ApplyResponse();
    }
}

ApplyResponseUnMarshaller::__init();
