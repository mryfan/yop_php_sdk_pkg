<?php


namespace Fy\Yeepay\Yop\Sdk\Service\Yop\Model;


use Fy\Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class Oauth2ReportKeyResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var Oauth2ReportKeyResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new Oauth2ReportKeyResponseUnMarshaller();
    }

    /**
     * @return Oauth2ReportKeyResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return Oauth2ReportKeyResponse
     */
    protected function getResponseInstance()
    {
        return new Oauth2ReportKeyResponse();
    }
}

Oauth2ReportKeyResponseUnMarshaller::__init();
