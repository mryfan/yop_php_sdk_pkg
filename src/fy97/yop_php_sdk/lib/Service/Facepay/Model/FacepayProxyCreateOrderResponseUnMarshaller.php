<?php


namespace Fy\Yeepay\Yop\Sdk\Service\Facepay\Model;


use Fy\Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class FacepayProxyCreateOrderResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var FacepayProxyCreateOrderResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new FacepayProxyCreateOrderResponseUnMarshaller();
    }

    /**
     * @return FacepayProxyCreateOrderResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return FacepayProxyCreateOrderResponse
     */
    protected function getResponseInstance()
    {
        return new FacepayProxyCreateOrderResponse();
    }
}

FacepayProxyCreateOrderResponseUnMarshaller::__init();
