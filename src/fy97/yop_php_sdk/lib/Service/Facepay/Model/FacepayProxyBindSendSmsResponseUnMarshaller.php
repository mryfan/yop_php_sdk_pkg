<?php


namespace Fy\Yeepay\Yop\Sdk\Service\Facepay\Model;


use Fy\Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class FacepayProxyBindSendSmsResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var FacepayProxyBindSendSmsResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new FacepayProxyBindSendSmsResponseUnMarshaller();
    }

    /**
     * @return FacepayProxyBindSendSmsResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return FacepayProxyBindSendSmsResponse
     */
    protected function getResponseInstance()
    {
        return new FacepayProxyBindSendSmsResponse();
    }
}

FacepayProxyBindSendSmsResponseUnMarshaller::__init();
