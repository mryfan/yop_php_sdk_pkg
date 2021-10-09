<?php


namespace Fy\Yeepay\Yop\Sdk\Service\Account\Model;


use Fy\Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class SupplierPayOrderResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var SupplierPayOrderResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new SupplierPayOrderResponseUnMarshaller();
    }

    /**
     * @return SupplierPayOrderResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return SupplierPayOrderResponse
     */
    protected function getResponseInstance()
    {
        return new SupplierPayOrderResponse();
    }
}

SupplierPayOrderResponseUnMarshaller::__init();
