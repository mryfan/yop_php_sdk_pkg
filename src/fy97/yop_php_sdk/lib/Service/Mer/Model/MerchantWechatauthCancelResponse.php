<?php


namespace Fy\Yeepay\Yop\Sdk\Service\Mer\Model;


use Fy\Yeepay\Yop\Sdk\Model\BaseResponse;
class MerchantWechatauthCancelResponse extends BaseResponse
{
    /**
     * @var MerchantWechatauthCancelApplymentCancelRespDtoResult
     */
    private $result;

    function getResultClass()
    {
        return '\Fy\Yeepay\Yop\Sdk\Service\Mer\Model\MerchantWechatauthCancelApplymentCancelRespDtoResult';
    }

    /**
     * @param MerchantWechatauthCancelApplymentCancelRespDtoResult $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return MerchantWechatauthCancelApplymentCancelRespDtoResult
     */
    function getResult()
    {
        return $this->result;
    }
}
