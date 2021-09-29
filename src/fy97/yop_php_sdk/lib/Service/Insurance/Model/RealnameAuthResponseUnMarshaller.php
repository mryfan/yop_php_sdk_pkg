<?php


namespace Fy\Yeepay\Yop\Sdk\Service\Insurance\Model;


use Fy\Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class RealnameAuthResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var RealnameAuthResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new RealnameAuthResponseUnMarshaller();
    }

    /**
     * @return RealnameAuthResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return RealnameAuthResponse
     */
    protected function getResponseInstance()
    {
        return new RealnameAuthResponse();
    }
}

RealnameAuthResponseUnMarshaller::__init();
