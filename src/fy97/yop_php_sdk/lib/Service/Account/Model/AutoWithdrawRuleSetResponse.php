<?php


namespace Fy\Yeepay\Yop\Sdk\Service\Account\Model;


use Fy\Yeepay\Yop\Sdk\Model\BaseResponse;
class AutoWithdrawRuleSetResponse extends BaseResponse
{
    /**
     * @var AutoWithdrawRuleSetYopAutoWithdrawRuleSetResponseDTOResult
     */
    private $result;

    function getResultClass()
    {
        return '\Fy\Yeepay\Yop\Sdk\Service\Account\Model\AutoWithdrawRuleSetYopAutoWithdrawRuleSetResponseDTOResult';
    }

    /**
     * @param AutoWithdrawRuleSetYopAutoWithdrawRuleSetResponseDTOResult $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return AutoWithdrawRuleSetYopAutoWithdrawRuleSetResponseDTOResult
     */
    function getResult()
    {
        return $this->result;
    }
}
