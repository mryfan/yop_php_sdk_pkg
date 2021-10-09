<?php


namespace Fy\Yeepay\Yop\Sdk\Service\Account\Model;


use Fy\Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class SupplierQueryResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var SupplierQueryResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new SupplierQueryResponseUnMarshaller();
    }

    /**
     * @return SupplierQueryResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return SupplierQueryResponse
     */
    protected function getResponseInstance()
    {
        return new SupplierQueryResponse();
    }
}

SupplierQueryResponseUnMarshaller::__init();
