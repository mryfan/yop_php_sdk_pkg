<?php


namespace Fy\Yeepay\Yop\Sdk\Service\Facepay\Model;


use Fy\Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class FacepayProxyVerifyUserInfoResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var FacepayProxyVerifyUserInfoResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new FacepayProxyVerifyUserInfoResponseUnMarshaller();
    }

    /**
     * @return FacepayProxyVerifyUserInfoResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return FacepayProxyVerifyUserInfoResponse
     */
    protected function getResponseInstance()
    {
        return new FacepayProxyVerifyUserInfoResponse();
    }
}

FacepayProxyVerifyUserInfoResponseUnMarshaller::__init();
