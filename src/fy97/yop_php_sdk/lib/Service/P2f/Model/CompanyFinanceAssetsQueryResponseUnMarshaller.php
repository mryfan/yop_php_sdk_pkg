<?php


namespace Fy\Yeepay\Yop\Sdk\Service\P2f\Model;


use Fy\Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class CompanyFinanceAssetsQueryResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var CompanyFinanceAssetsQueryResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new CompanyFinanceAssetsQueryResponseUnMarshaller();
    }

    /**
     * @return CompanyFinanceAssetsQueryResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return CompanyFinanceAssetsQueryResponse
     */
    protected function getResponseInstance()
    {
        return new CompanyFinanceAssetsQueryResponse();
    }
}

CompanyFinanceAssetsQueryResponseUnMarshaller::__init();
