<?php


namespace Fy\Yeepay\Yop\Sdk\Service\Facepay\Model;


use Fy\Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class FacepayProxyFaceLogonResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var FacepayProxyFaceLogonResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new FacepayProxyFaceLogonResponseUnMarshaller();
    }

    /**
     * @return FacepayProxyFaceLogonResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return FacepayProxyFaceLogonResponse
     */
    protected function getResponseInstance()
    {
        return new FacepayProxyFaceLogonResponse();
    }
}

FacepayProxyFaceLogonResponseUnMarshaller::__init();
