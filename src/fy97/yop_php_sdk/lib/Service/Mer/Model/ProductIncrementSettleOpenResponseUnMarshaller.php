<?php


namespace Fy\Yeepay\Yop\Sdk\Service\Mer\Model;


use Fy\Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class ProductIncrementSettleOpenResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var ProductIncrementSettleOpenResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new ProductIncrementSettleOpenResponseUnMarshaller();
    }

    /**
     * @return ProductIncrementSettleOpenResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return ProductIncrementSettleOpenResponse
     */
    protected function getResponseInstance()
    {
        return new ProductIncrementSettleOpenResponse();
    }
}

ProductIncrementSettleOpenResponseUnMarshaller::__init();
