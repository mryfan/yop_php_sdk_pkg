<?php


namespace Fy\Yeepay\Yop\Sdk\Service\Facepay\Model;


use Fy\Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class FacepayProxyQueryOrderBeforeResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var FacepayProxyQueryOrderBeforeResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new FacepayProxyQueryOrderBeforeResponseUnMarshaller();
    }

    /**
     * @return FacepayProxyQueryOrderBeforeResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return FacepayProxyQueryOrderBeforeResponse
     */
    protected function getResponseInstance()
    {
        return new FacepayProxyQueryOrderBeforeResponse();
    }
}

FacepayProxyQueryOrderBeforeResponseUnMarshaller::__init();
