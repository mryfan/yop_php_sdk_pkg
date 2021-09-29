<?php


namespace Fy\Yeepay\Yop\Sdk\Service\Account\Model;


use Fy\Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class SupplierApplyResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var SupplierApplyResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new SupplierApplyResponseUnMarshaller();
    }

    /**
     * @return SupplierApplyResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return SupplierApplyResponse
     */
    protected function getResponseInstance()
    {
        return new SupplierApplyResponse();
    }
}

SupplierApplyResponseUnMarshaller::__init();
