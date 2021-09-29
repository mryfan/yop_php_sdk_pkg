<?php


namespace Fy\Yeepay\Yop\Sdk\Service\Facepay\Model;


use Fy\Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class FacepayProxySendFirstCardSmscodeResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var FacepayProxySendFirstCardSmscodeResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new FacepayProxySendFirstCardSmscodeResponseUnMarshaller();
    }

    /**
     * @return FacepayProxySendFirstCardSmscodeResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return FacepayProxySendFirstCardSmscodeResponse
     */
    protected function getResponseInstance()
    {
        return new FacepayProxySendFirstCardSmscodeResponse();
    }
}

FacepayProxySendFirstCardSmscodeResponseUnMarshaller::__init();
