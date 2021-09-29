<?php


namespace Fy\Yeepay\Yop\Sdk\Service\Facepay\Model;


use Fy\Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class FacepayProxyQueryBindCardInfoResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var FacepayProxyQueryBindCardInfoResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new FacepayProxyQueryBindCardInfoResponseUnMarshaller();
    }

    /**
     * @return FacepayProxyQueryBindCardInfoResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return FacepayProxyQueryBindCardInfoResponse
     */
    protected function getResponseInstance()
    {
        return new FacepayProxyQueryBindCardInfoResponse();
    }
}

FacepayProxyQueryBindCardInfoResponseUnMarshaller::__init();
