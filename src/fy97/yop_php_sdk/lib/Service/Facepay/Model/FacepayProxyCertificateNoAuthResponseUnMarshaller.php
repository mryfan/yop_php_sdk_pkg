<?php


namespace Fy\Yeepay\Yop\Sdk\Service\Facepay\Model;


use Fy\Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class FacepayProxyCertificateNoAuthResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var FacepayProxyCertificateNoAuthResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new FacepayProxyCertificateNoAuthResponseUnMarshaller();
    }

    /**
     * @return FacepayProxyCertificateNoAuthResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return FacepayProxyCertificateNoAuthResponse
     */
    protected function getResponseInstance()
    {
        return new FacepayProxyCertificateNoAuthResponse();
    }
}

FacepayProxyCertificateNoAuthResponseUnMarshaller::__init();
