<?php


namespace Fy\Yeepay\Yop\Sdk\Service\P2f\Model;


use Fy\Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class CompanyFinancePurchaseOrderResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var CompanyFinancePurchaseOrderResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new CompanyFinancePurchaseOrderResponseUnMarshaller();
    }

    /**
     * @return CompanyFinancePurchaseOrderResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return CompanyFinancePurchaseOrderResponse
     */
    protected function getResponseInstance()
    {
        return new CompanyFinancePurchaseOrderResponse();
    }
}

CompanyFinancePurchaseOrderResponseUnMarshaller::__init();
