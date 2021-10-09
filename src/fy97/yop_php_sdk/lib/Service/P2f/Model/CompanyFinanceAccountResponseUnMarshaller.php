<?php


namespace Fy\Yeepay\Yop\Sdk\Service\P2f\Model;


use Fy\Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class CompanyFinanceAccountResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var CompanyFinanceAccountResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new CompanyFinanceAccountResponseUnMarshaller();
    }

    /**
     * @return CompanyFinanceAccountResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return CompanyFinanceAccountResponse
     */
    protected function getResponseInstance()
    {
        return new CompanyFinanceAccountResponse();
    }
}

CompanyFinanceAccountResponseUnMarshaller::__init();
