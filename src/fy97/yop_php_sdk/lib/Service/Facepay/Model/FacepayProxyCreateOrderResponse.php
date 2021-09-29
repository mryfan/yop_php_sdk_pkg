<?php


namespace Fy\Yeepay\Yop\Sdk\Service\Facepay\Model;


use Fy\Yeepay\Yop\Sdk\Model\BaseResponse;
class FacepayProxyCreateOrderResponse extends BaseResponse
{
    /**
     * @var FacepayProxyCreateOrderPayOrderResponseResult
     */
    private $result;

    function getResultClass()
    {
        return '\Fy\Yeepay\Yop\Sdk\Service\Facepay\Model\FacepayProxyCreateOrderPayOrderResponseResult';
    }

    /**
     * @param FacepayProxyCreateOrderPayOrderResponseResult $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return FacepayProxyCreateOrderPayOrderResponseResult
     */
    function getResult()
    {
        return $this->result;
    }
}
