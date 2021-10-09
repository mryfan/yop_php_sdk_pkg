<?php


namespace Fy\Yeepay\Yop\Sdk\Service\P2f\Model;


use Fy\Yeepay\Yop\Sdk\Model\BaseResponse;
class CompanyFinanceOrderQueryResponse extends BaseResponse
{
    /**
     * @var CompanyFinanceOrderQueryCompQueryOrderStatusResponseDTOResult
     */
    private $result;

    function getResultClass()
    {
        return '\Fy\Yeepay\Yop\Sdk\Service\P2f\Model\CompanyFinanceOrderQueryCompQueryOrderStatusResponseDTOResult';
    }

    /**
     * @param CompanyFinanceOrderQueryCompQueryOrderStatusResponseDTOResult $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return CompanyFinanceOrderQueryCompQueryOrderStatusResponseDTOResult
     */
    function getResult()
    {
        return $this->result;
    }
}
