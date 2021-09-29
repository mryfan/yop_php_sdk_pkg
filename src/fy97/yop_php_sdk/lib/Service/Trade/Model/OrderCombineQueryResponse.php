<?php


namespace Fy\Yeepay\Yop\Sdk\Service\Trade\Model;


use Fy\Yeepay\Yop\Sdk\Model\BaseResponse;
class OrderCombineQueryResponse extends BaseResponse
{
    /**
     * @var OrderCombineQueryYopQueryCombineOrderResDTOResult
     */
    private $result;

    function getResultClass()
    {
        return '\Fy\Yeepay\Yop\Sdk\Service\Trade\Model\OrderCombineQueryYopQueryCombineOrderResDTOResult';
    }

    /**
     * @param OrderCombineQueryYopQueryCombineOrderResDTOResult $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return OrderCombineQueryYopQueryCombineOrderResDTOResult
     */
    function getResult()
    {
        return $this->result;
    }
}
