<?php


namespace Fy\Yeepay\Yop\Sdk\Service\Account\Model;


use Fy\Yeepay\Yop\Sdk\Model\BaseResponse;
class RechargeOnlinebankOrderResponse extends BaseResponse
{
    /**
     * @var RechargeOnlinebankOrderOnlineBankRechargeApiRespDTOResult
     */
    private $result;

    function getResultClass()
    {
        return '\Fy\Yeepay\Yop\Sdk\Service\Account\Model\RechargeOnlinebankOrderOnlineBankRechargeApiRespDTOResult';
    }

    /**
     * @param RechargeOnlinebankOrderOnlineBankRechargeApiRespDTOResult $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return RechargeOnlinebankOrderOnlineBankRechargeApiRespDTOResult
     */
    function getResult()
    {
        return $this->result;
    }
}
