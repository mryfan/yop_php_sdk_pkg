<?php


namespace Fy\Yeepay\Yop\Sdk\Service\Account\Model;


use Fy\Yeepay\Yop\Sdk\Model\BaseResponse;
class EnterpriseAutoPaymentOrderResponse extends BaseResponse
{
    /**
     * @var EnterpriseAutoPaymentOrderAutoPaymentRespDtoResult
     */
    private $result;

    function getResultClass()
    {
        return '\Fy\Yeepay\Yop\Sdk\Service\Account\Model\EnterpriseAutoPaymentOrderAutoPaymentRespDtoResult';
    }

    /**
     * @param EnterpriseAutoPaymentOrderAutoPaymentRespDtoResult $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return EnterpriseAutoPaymentOrderAutoPaymentRespDtoResult
     */
    function getResult()
    {
        return $this->result;
    }
}
