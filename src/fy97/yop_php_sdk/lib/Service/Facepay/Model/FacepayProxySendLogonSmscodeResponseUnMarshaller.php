<?php


namespace Fy\Yeepay\Yop\Sdk\Service\Facepay\Model;


use Fy\Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class FacepayProxySendLogonSmscodeResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var FacepayProxySendLogonSmscodeResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new FacepayProxySendLogonSmscodeResponseUnMarshaller();
    }

    /**
     * @return FacepayProxySendLogonSmscodeResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return FacepayProxySendLogonSmscodeResponse
     */
    protected function getResponseInstance()
    {
        return new FacepayProxySendLogonSmscodeResponse();
    }
}

FacepayProxySendLogonSmscodeResponseUnMarshaller::__init();
