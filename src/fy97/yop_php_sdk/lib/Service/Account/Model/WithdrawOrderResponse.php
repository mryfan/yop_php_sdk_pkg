<?php


namespace Fy\Yeepay\Yop\Sdk\Service\Account\Model;


use Fy\Yeepay\Yop\Sdk\Model\BaseResponse;
class WithdrawOrderResponse extends BaseResponse
{
    /**
     * @var WithdrawOrderWithdrawOrderRespDTOResult
     */
    private $result;

    function getResultClass()
    {
        return '\Fy\Yeepay\Yop\Sdk\Service\Account\Model\WithdrawOrderWithdrawOrderRespDTOResult';
    }

    /**
     * @param WithdrawOrderWithdrawOrderRespDTOResult $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return WithdrawOrderWithdrawOrderRespDTOResult
     */
    function getResult()
    {
        return $this->result;
    }
}
