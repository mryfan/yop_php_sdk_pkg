<?php


namespace Fy\Yeepay\Yop\Sdk\Service\P2f\Model;


use Fy\Yeepay\Yop\Sdk\Model\BaseResponse;
class CompanyFinanceRedeemOrderResponse extends BaseResponse
{
    /**
     * @var CompanyFinanceRedeemOrderCompTranRedeemRspDTOResult
     */
    private $result;

    function getResultClass()
    {
        return '\Fy\Yeepay\Yop\Sdk\Service\P2f\Model\CompanyFinanceRedeemOrderCompTranRedeemRspDTOResult';
    }

    /**
     * @param CompanyFinanceRedeemOrderCompTranRedeemRspDTOResult $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return CompanyFinanceRedeemOrderCompTranRedeemRspDTOResult
     */
    function getResult()
    {
        return $this->result;
    }
}
