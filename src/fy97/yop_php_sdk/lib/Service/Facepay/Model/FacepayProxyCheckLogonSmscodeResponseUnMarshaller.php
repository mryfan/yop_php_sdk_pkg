<?php


namespace Fy\Yeepay\Yop\Sdk\Service\Facepay\Model;


use Fy\Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class FacepayProxyCheckLogonSmscodeResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var FacepayProxyCheckLogonSmscodeResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new FacepayProxyCheckLogonSmscodeResponseUnMarshaller();
    }

    /**
     * @return FacepayProxyCheckLogonSmscodeResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return FacepayProxyCheckLogonSmscodeResponse
     */
    protected function getResponseInstance()
    {
        return new FacepayProxyCheckLogonSmscodeResponse();
    }
}

FacepayProxyCheckLogonSmscodeResponseUnMarshaller::__init();
