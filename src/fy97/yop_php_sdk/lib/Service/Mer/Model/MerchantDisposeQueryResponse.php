<?php


namespace Fy\Yeepay\Yop\Sdk\Service\Mer\Model;


use Fy\Yeepay\Yop\Sdk\Model\BaseResponse;
class MerchantDisposeQueryResponse extends BaseResponse
{
    /**
     * @var MerchantDisposeQueryMerchantQueryDisposeNotifyRespDtoResult
     */
    private $result;

    function getResultClass()
    {
        return '\Fy\Yeepay\Yop\Sdk\Service\Mer\Model\MerchantDisposeQueryMerchantQueryDisposeNotifyRespDtoResult';
    }

    /**
     * @param MerchantDisposeQueryMerchantQueryDisposeNotifyRespDtoResult $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return MerchantDisposeQueryMerchantQueryDisposeNotifyRespDtoResult
     */
    function getResult()
    {
        return $this->result;
    }
}
