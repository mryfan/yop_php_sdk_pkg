<?php


namespace Fy\Yeepay\Yop\Sdk\Service\Account\Model;


use Fy\Yeepay\Yop\Sdk\Model\BaseResponse;
class AutoWithdrawRuleCancelResponse extends BaseResponse
{
    /**
     * @var AutoWithdrawRuleCancelYopAutoWithdrawRuleCancelResponseDTOResult
     */
    private $result;

    function getResultClass()
    {
        return '\Fy\Yeepay\Yop\Sdk\Service\Account\Model\AutoWithdrawRuleCancelYopAutoWithdrawRuleCancelResponseDTOResult';
    }

    /**
     * @param AutoWithdrawRuleCancelYopAutoWithdrawRuleCancelResponseDTOResult $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return AutoWithdrawRuleCancelYopAutoWithdrawRuleCancelResponseDTOResult
     */
    function getResult()
    {
        return $this->result;
    }
}
