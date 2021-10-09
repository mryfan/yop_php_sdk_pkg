<?php


namespace Fy\Yeepay\Yop\Sdk\Service\Trade\Model;


use Fy\Yeepay\Yop\Sdk\Model\BaseResponse;
class OrderQueryResponse extends BaseResponse
{
    /**
     * @var OrderQueryYopQueryOrderResDTOResult
     */
    private $result;

    function getResultClass()
    {
        return '\Fy\Yeepay\Yop\Sdk\Service\Trade\Model\OrderQueryYopQueryOrderResDTOResult';
    }

    /**
     * @param OrderQueryYopQueryOrderResDTOResult $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return OrderQueryYopQueryOrderResDTOResult
     */
    function getResult()
    {
        return $this->result;
    }
}
