<?php


namespace Fy\Yeepay\Yop\Sdk\Service\Account\Model;


use Fy\Yeepay\Yop\Sdk\Model\BaseResponse;
class EnterpriseWithholdingOrderResponse extends BaseResponse
{
    /**
     * @var EnterpriseWithholdingOrderWithholdingPaymentRespDtoResult
     */
    private $result;

    function getResultClass()
    {
        return '\Fy\Yeepay\Yop\Sdk\Service\Account\Model\EnterpriseWithholdingOrderWithholdingPaymentRespDtoResult';
    }

    /**
     * @param EnterpriseWithholdingOrderWithholdingPaymentRespDtoResult $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return EnterpriseWithholdingOrderWithholdingPaymentRespDtoResult
     */
    function getResult()
    {
        return $this->result;
    }
}
