<?php


namespace Fy\Yeepay\Yop\Sdk\Service\P2f\Model;


use Fy\Yeepay\Yop\Sdk\Model\BaseResponse;
class CompanyFinanceAssetsQueryResponse extends BaseResponse
{
    /**
     * @var CompanyFinanceAssetsQueryCompQueryAssetsResponseDTOResult
     */
    private $result;

    function getResultClass()
    {
        return '\Fy\Yeepay\Yop\Sdk\Service\P2f\Model\CompanyFinanceAssetsQueryCompQueryAssetsResponseDTOResult';
    }

    /**
     * @param CompanyFinanceAssetsQueryCompQueryAssetsResponseDTOResult $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return CompanyFinanceAssetsQueryCompQueryAssetsResponseDTOResult
     */
    function getResult()
    {
        return $this->result;
    }
}
