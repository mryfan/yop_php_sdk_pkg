<?php


namespace Fy\Yeepay\Yop\Sdk\Service\Mer\Model;


use Fy\Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class ProductFeeModifyResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var ProductFeeModifyResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new ProductFeeModifyResponseUnMarshaller();
    }

    /**
     * @return ProductFeeModifyResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return ProductFeeModifyResponse
     */
    protected function getResponseInstance()
    {
        return new ProductFeeModifyResponse();
    }
}

ProductFeeModifyResponseUnMarshaller::__init();
