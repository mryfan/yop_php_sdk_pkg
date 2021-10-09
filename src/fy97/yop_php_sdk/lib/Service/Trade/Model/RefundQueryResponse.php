<?php


namespace Fy\Yeepay\Yop\Sdk\Service\Trade\Model;


use Fy\Yeepay\Yop\Sdk\Model\BaseResponse;
class RefundQueryResponse extends BaseResponse
{
    /**
     * @var RefundQueryQueryRefundResponseDTOResult
     */
    private $result;

    function getResultClass()
    {
        return '\Fy\Yeepay\Yop\Sdk\Service\Trade\Model\RefundQueryQueryRefundResponseDTOResult';
    }

    /**
     * @param RefundQueryQueryRefundResponseDTOResult $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return RefundQueryQueryRefundResponseDTOResult
     */
    function getResult()
    {
        return $this->result;
    }
}
