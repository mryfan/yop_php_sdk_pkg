<?php


namespace Fy\Yeepay\Yop\Sdk\Service\Mer\Model;


use Fy\Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class ProductFeeQueryResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var ProductFeeQueryResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new ProductFeeQueryResponseUnMarshaller();
    }

    /**
     * @return ProductFeeQueryResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return ProductFeeQueryResponse
     */
    protected function getResponseInstance()
    {
        return new ProductFeeQueryResponse();
    }
}

ProductFeeQueryResponseUnMarshaller::__init();
