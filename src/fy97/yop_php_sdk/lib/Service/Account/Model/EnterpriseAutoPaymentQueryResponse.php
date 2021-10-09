<?php


namespace Fy\Yeepay\Yop\Sdk\Service\Account\Model;


use Fy\Yeepay\Yop\Sdk\Model\BaseResponse;
class EnterpriseAutoPaymentQueryResponse extends BaseResponse
{
    /**
     * @var EnterpriseAutoPaymentQueryAutoPaymentQueryRespDtoResult
     */
    private $result;

    function getResultClass()
    {
        return '\Fy\Yeepay\Yop\Sdk\Service\Account\Model\EnterpriseAutoPaymentQueryAutoPaymentQueryRespDtoResult';
    }

    /**
     * @param EnterpriseAutoPaymentQueryAutoPaymentQueryRespDtoResult $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return EnterpriseAutoPaymentQueryAutoPaymentQueryRespDtoResult
     */
    function getResult()
    {
        return $this->result;
    }
}
