<?php


namespace Fy\Yeepay\Yop\Sdk\Service\Account\Model;


use Fy\Yeepay\Yop\Sdk\Model\BaseResponse;
class BalanceQueryResponse extends BaseResponse
{
    /**
     * @var BalanceQueryAccountInfoRespDTOResult
     */
    private $result;

    function getResultClass()
    {
        return '\Fy\Yeepay\Yop\Sdk\Service\Account\Model\BalanceQueryAccountInfoRespDTOResult';
    }

    /**
     * @param BalanceQueryAccountInfoRespDTOResult $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return BalanceQueryAccountInfoRespDTOResult
     */
    function getResult()
    {
        return $this->result;
    }
}
