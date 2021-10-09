<?php


namespace Fy\Yeepay\Yop\Sdk\Service\Facepay\Model;


use Fy\Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class FacepayProxyBindConfirmSmsResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var FacepayProxyBindConfirmSmsResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new FacepayProxyBindConfirmSmsResponseUnMarshaller();
    }

    /**
     * @return FacepayProxyBindConfirmSmsResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return FacepayProxyBindConfirmSmsResponse
     */
    protected function getResponseInstance()
    {
        return new FacepayProxyBindConfirmSmsResponse();
    }
}

FacepayProxyBindConfirmSmsResponseUnMarshaller::__init();
