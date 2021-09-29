<?php


namespace Fy\Yeepay\Yop\Sdk\Service\Facepay\Model;


use Fy\Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class FacepayProxyOpenFaceAccountResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var FacepayProxyOpenFaceAccountResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new FacepayProxyOpenFaceAccountResponseUnMarshaller();
    }

    /**
     * @return FacepayProxyOpenFaceAccountResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return FacepayProxyOpenFaceAccountResponse
     */
    protected function getResponseInstance()
    {
        return new FacepayProxyOpenFaceAccountResponse();
    }
}

FacepayProxyOpenFaceAccountResponseUnMarshaller::__init();
