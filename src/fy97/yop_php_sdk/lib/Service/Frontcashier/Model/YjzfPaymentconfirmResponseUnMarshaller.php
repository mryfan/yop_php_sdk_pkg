<?php


namespace Fy\Yeepay\Yop\Sdk\Service\Frontcashier\Model;


use Fy\Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class YjzfPaymentconfirmResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var YjzfPaymentconfirmResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new YjzfPaymentconfirmResponseUnMarshaller();
    }

    /**
     * @return YjzfPaymentconfirmResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return YjzfPaymentconfirmResponse
     */
    protected function getResponseInstance()
    {
        return new YjzfPaymentconfirmResponse();
    }
}

YjzfPaymentconfirmResponseUnMarshaller::__init();
