<?php


namespace Fy\Yeepay\Yop\Sdk\Service\Facepay\Model;


use Fy\Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class FacepayProxyCreateBindCardResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var FacepayProxyCreateBindCardResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new FacepayProxyCreateBindCardResponseUnMarshaller();
    }

    /**
     * @return FacepayProxyCreateBindCardResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return FacepayProxyCreateBindCardResponse
     */
    protected function getResponseInstance()
    {
        return new FacepayProxyCreateBindCardResponse();
    }
}

FacepayProxyCreateBindCardResponseUnMarshaller::__init();
