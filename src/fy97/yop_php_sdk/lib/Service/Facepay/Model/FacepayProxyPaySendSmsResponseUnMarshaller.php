<?php


namespace Fy\Yeepay\Yop\Sdk\Service\Facepay\Model;


use Fy\Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class FacepayProxyPaySendSmsResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var FacepayProxyPaySendSmsResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new FacepayProxyPaySendSmsResponseUnMarshaller();
    }

    /**
     * @return FacepayProxyPaySendSmsResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return FacepayProxyPaySendSmsResponse
     */
    protected function getResponseInstance()
    {
        return new FacepayProxyPaySendSmsResponse();
    }
}

FacepayProxyPaySendSmsResponseUnMarshaller::__init();
