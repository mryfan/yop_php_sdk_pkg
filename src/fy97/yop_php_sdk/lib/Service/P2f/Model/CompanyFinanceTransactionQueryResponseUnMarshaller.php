<?php


namespace Fy\Yeepay\Yop\Sdk\Service\P2f\Model;


use Fy\Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class CompanyFinanceTransactionQueryResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var CompanyFinanceTransactionQueryResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new CompanyFinanceTransactionQueryResponseUnMarshaller();
    }

    /**
     * @return CompanyFinanceTransactionQueryResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return CompanyFinanceTransactionQueryResponse
     */
    protected function getResponseInstance()
    {
        return new CompanyFinanceTransactionQueryResponse();
    }
}

CompanyFinanceTransactionQueryResponseUnMarshaller::__init();
