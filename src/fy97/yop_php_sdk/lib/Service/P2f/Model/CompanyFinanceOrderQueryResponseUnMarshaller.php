<?php


namespace Fy\Yeepay\Yop\Sdk\Service\P2f\Model;


use Fy\Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class CompanyFinanceOrderQueryResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var CompanyFinanceOrderQueryResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new CompanyFinanceOrderQueryResponseUnMarshaller();
    }

    /**
     * @return CompanyFinanceOrderQueryResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return CompanyFinanceOrderQueryResponse
     */
    protected function getResponseInstance()
    {
        return new CompanyFinanceOrderQueryResponse();
    }
}

CompanyFinanceOrderQueryResponseUnMarshaller::__init();
