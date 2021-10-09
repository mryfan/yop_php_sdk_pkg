<?php


namespace Fy\Yeepay\Yop\Sdk\Service\Mer\Model;


use Fy\Yeepay\Yop\Sdk\Model\BaseResponse;
class ProductFeeQueryResponse extends BaseResponse
{
    /**
     * @var ProductFeeQueryQueryProductFeeRespDtoResult
     */
    private $result;

    function getResultClass()
    {
        return '\Fy\Yeepay\Yop\Sdk\Service\Mer\Model\ProductFeeQueryQueryProductFeeRespDtoResult';
    }

    /**
     * @param ProductFeeQueryQueryProductFeeRespDtoResult $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return ProductFeeQueryQueryProductFeeRespDtoResult
     */
    function getResult()
    {
        return $this->result;
    }
}
