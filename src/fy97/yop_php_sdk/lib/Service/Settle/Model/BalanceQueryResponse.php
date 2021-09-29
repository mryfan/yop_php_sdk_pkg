<?php


namespace Fy\Yeepay\Yop\Sdk\Service\Settle\Model;


use Fy\Yeepay\Yop\Sdk\Model\BaseResponse;
class BalanceQueryResponse extends BaseResponse
{
    /**
     * @var BalanceQuerySelfSettleQueryResponseDtoResult
     */
    private $result;

    function getResultClass()
    {
        return '\Fy\Yeepay\Yop\Sdk\Service\Settle\Model\BalanceQuerySelfSettleQueryResponseDtoResult';
    }

    /**
     * @param BalanceQuerySelfSettleQueryResponseDtoResult $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return BalanceQuerySelfSettleQueryResponseDtoResult
     */
    function getResult()
    {
        return $this->result;
    }
}
