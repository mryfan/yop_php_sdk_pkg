<?php


namespace Fy\Yeepay\Yop\Sdk\Service\Settle\Model;


use Fy\Yeepay\Yop\Sdk\Model\BaseResponse;
class SettleCardAddResponse extends BaseResponse
{
    /**
     * @var SettleCardAddMerchantSettleCardResponseDTOResult
     */
    private $result;

    function getResultClass()
    {
        return '\Fy\Yeepay\Yop\Sdk\Service\Settle\Model\SettleCardAddMerchantSettleCardResponseDTOResult';
    }

    /**
     * @param SettleCardAddMerchantSettleCardResponseDTOResult $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return SettleCardAddMerchantSettleCardResponseDTOResult
     */
    function getResult()
    {
        return $this->result;
    }
}
