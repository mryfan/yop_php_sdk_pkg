<?php


namespace Fy\Yeepay\Yop\Sdk\Service\Settle\Model;


use Fy\Yeepay\Yop\Sdk\Model\BaseResponse;
class SettleCardModifyResponse extends BaseResponse
{
    /**
     * @var SettleCardModifyMerchantSettleCardResponseDTOResult
     */
    private $result;

    function getResultClass()
    {
        return '\Fy\Yeepay\Yop\Sdk\Service\Settle\Model\SettleCardModifyMerchantSettleCardResponseDTOResult';
    }

    /**
     * @param SettleCardModifyMerchantSettleCardResponseDTOResult $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return SettleCardModifyMerchantSettleCardResponseDTOResult
     */
    function getResult()
    {
        return $this->result;
    }
}
