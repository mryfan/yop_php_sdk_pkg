<?php


namespace Fy\Yeepay\Yop\Sdk\Service\Mer\Model;


use Fy\Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class MerchantDisposeUnfreezeResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var MerchantDisposeUnfreezeResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new MerchantDisposeUnfreezeResponseUnMarshaller();
    }

    /**
     * @return MerchantDisposeUnfreezeResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return MerchantDisposeUnfreezeResponse
     */
    protected function getResponseInstance()
    {
        return new MerchantDisposeUnfreezeResponse();
    }
}

MerchantDisposeUnfreezeResponseUnMarshaller::__init();
