<?php


namespace Fy\Yeepay\Yop\Sdk\Service\Trade\Model;


use Fy\Yeepay\Yop\Sdk\Model\BaseResponse;
class OrderResponse extends BaseResponse
{
    /**
     * @var OrderYopCreateOrderV2ResDTOResult
     */
    private $result;

    function getResultClass()
    {
        return '\Fy\Yeepay\Yop\Sdk\Service\Trade\Model\OrderYopCreateOrderV2ResDTOResult';
    }

    /**
     * @param OrderYopCreateOrderV2ResDTOResult $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return OrderYopCreateOrderV2ResDTOResult
     */
    function getResult()
    {
        return $this->result;
    }
}
