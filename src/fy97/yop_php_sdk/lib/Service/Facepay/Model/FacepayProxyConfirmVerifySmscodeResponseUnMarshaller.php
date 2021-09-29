<?php


namespace Fy\Yeepay\Yop\Sdk\Service\Facepay\Model;


use Fy\Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class FacepayProxyConfirmVerifySmscodeResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var FacepayProxyConfirmVerifySmscodeResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new FacepayProxyConfirmVerifySmscodeResponseUnMarshaller();
    }

    /**
     * @return FacepayProxyConfirmVerifySmscodeResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return FacepayProxyConfirmVerifySmscodeResponse
     */
    protected function getResponseInstance()
    {
        return new FacepayProxyConfirmVerifySmscodeResponse();
    }
}

FacepayProxyConfirmVerifySmscodeResponseUnMarshaller::__init();
