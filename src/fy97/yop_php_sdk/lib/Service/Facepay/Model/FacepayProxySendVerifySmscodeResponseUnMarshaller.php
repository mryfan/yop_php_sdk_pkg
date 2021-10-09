<?php


namespace Fy\Yeepay\Yop\Sdk\Service\Facepay\Model;


use Fy\Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class FacepayProxySendVerifySmscodeResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var FacepayProxySendVerifySmscodeResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new FacepayProxySendVerifySmscodeResponseUnMarshaller();
    }

    /**
     * @return FacepayProxySendVerifySmscodeResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return FacepayProxySendVerifySmscodeResponse
     */
    protected function getResponseInstance()
    {
        return new FacepayProxySendVerifySmscodeResponse();
    }
}

FacepayProxySendVerifySmscodeResponseUnMarshaller::__init();
