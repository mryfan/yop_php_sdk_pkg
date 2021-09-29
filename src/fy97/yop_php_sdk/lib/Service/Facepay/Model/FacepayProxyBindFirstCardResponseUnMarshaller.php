<?php


namespace Fy\Yeepay\Yop\Sdk\Service\Facepay\Model;


use Fy\Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class FacepayProxyBindFirstCardResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var FacepayProxyBindFirstCardResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new FacepayProxyBindFirstCardResponseUnMarshaller();
    }

    /**
     * @return FacepayProxyBindFirstCardResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return FacepayProxyBindFirstCardResponse
     */
    protected function getResponseInstance()
    {
        return new FacepayProxyBindFirstCardResponse();
    }
}

FacepayProxyBindFirstCardResponseUnMarshaller::__init();
