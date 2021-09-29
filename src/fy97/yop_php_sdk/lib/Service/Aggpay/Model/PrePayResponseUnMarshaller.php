<?php


namespace Fy\Yeepay\Yop\Sdk\Service\Aggpay\Model;


use Fy\Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class PrePayResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var PrePayResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new PrePayResponseUnMarshaller();
    }

    /**
     * @return PrePayResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return PrePayResponse
     */
    protected function getResponseInstance()
    {
        return new PrePayResponse();
    }
}

PrePayResponseUnMarshaller::__init();
