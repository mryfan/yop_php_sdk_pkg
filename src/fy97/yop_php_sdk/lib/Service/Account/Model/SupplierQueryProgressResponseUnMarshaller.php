<?php


namespace Fy\Yeepay\Yop\Sdk\Service\Account\Model;


use Fy\Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class SupplierQueryProgressResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var SupplierQueryProgressResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new SupplierQueryProgressResponseUnMarshaller();
    }

    /**
     * @return SupplierQueryProgressResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return SupplierQueryProgressResponse
     */
    protected function getResponseInstance()
    {
        return new SupplierQueryProgressResponse();
    }
}

SupplierQueryProgressResponseUnMarshaller::__init();
