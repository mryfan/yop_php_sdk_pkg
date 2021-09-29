<?php


namespace Fy\Yeepay\Yop\Sdk\Service\P2f\Model;


use Fy\Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class CompanyFinanceAccountQueryResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var CompanyFinanceAccountQueryResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new CompanyFinanceAccountQueryResponseUnMarshaller();
    }

    /**
     * @return CompanyFinanceAccountQueryResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return CompanyFinanceAccountQueryResponse
     */
    protected function getResponseInstance()
    {
        return new CompanyFinanceAccountQueryResponse();
    }
}

CompanyFinanceAccountQueryResponseUnMarshaller::__init();
