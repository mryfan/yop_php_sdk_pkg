<?php


namespace Fy\Yeepay\Yop\Sdk\Service\Facepay\Model;


use Fy\Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class FacepayProxyQueryOrderAfterResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var FacepayProxyQueryOrderAfterResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new FacepayProxyQueryOrderAfterResponseUnMarshaller();
    }

    /**
     * @return FacepayProxyQueryOrderAfterResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return FacepayProxyQueryOrderAfterResponse
     */
    protected function getResponseInstance()
    {
        return new FacepayProxyQueryOrderAfterResponse();
    }
}

FacepayProxyQueryOrderAfterResponseUnMarshaller::__init();
