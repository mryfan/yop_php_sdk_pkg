<?php


namespace Fy\Yeepay\Yop\Sdk\Service\Trade\Model;


use Fy\Yeepay\Yop\Sdk\Model\BaseResponse;
class RefundFastResponse extends BaseResponse
{
    /**
     * @var RefundFastYopFastRefundResponseDTOResult
     */
    private $result;

    function getResultClass()
    {
        return '\Fy\Yeepay\Yop\Sdk\Service\Trade\Model\RefundFastYopFastRefundResponseDTOResult';
    }

    /**
     * @param RefundFastYopFastRefundResponseDTOResult $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return RefundFastYopFastRefundResponseDTOResult
     */
    function getResult()
    {
        return $this->result;
    }
}
