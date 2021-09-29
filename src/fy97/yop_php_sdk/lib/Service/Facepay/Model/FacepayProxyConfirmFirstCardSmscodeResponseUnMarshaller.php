<?php


namespace Fy\Yeepay\Yop\Sdk\Service\Facepay\Model;


use Fy\Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class FacepayProxyConfirmFirstCardSmscodeResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var FacepayProxyConfirmFirstCardSmscodeResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new FacepayProxyConfirmFirstCardSmscodeResponseUnMarshaller();
    }

    /**
     * @return FacepayProxyConfirmFirstCardSmscodeResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return FacepayProxyConfirmFirstCardSmscodeResponse
     */
    protected function getResponseInstance()
    {
        return new FacepayProxyConfirmFirstCardSmscodeResponse();
    }
}

FacepayProxyConfirmFirstCardSmscodeResponseUnMarshaller::__init();
