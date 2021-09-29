<?php


namespace Fy\Yeepay\Yop\Sdk\Service\P2f\Model;


use Fy\Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class CompanyFinanceRedeemOrderResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var CompanyFinanceRedeemOrderResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new CompanyFinanceRedeemOrderResponseUnMarshaller();
    }

    /**
     * @return CompanyFinanceRedeemOrderResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return CompanyFinanceRedeemOrderResponse
     */
    protected function getResponseInstance()
    {
        return new CompanyFinanceRedeemOrderResponse();
    }
}

CompanyFinanceRedeemOrderResponseUnMarshaller::__init();
