<?php


namespace Fy\Yeepay\Yop\Sdk\Service\Facepay\Model;


use Fy\Yeepay\Yop\Sdk\Model\BaseResponse;
class FacepayProxyBindFirstCardResponse extends BaseResponse
{
    /**
     * @var FacepayProxyBindFirstCardBindCardResponseResult
     */
    private $result;

    function getResultClass()
    {
        return '\Fy\Yeepay\Yop\Sdk\Service\Facepay\Model\FacepayProxyBindFirstCardBindCardResponseResult';
    }

    /**
     * @param FacepayProxyBindFirstCardBindCardResponseResult $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return FacepayProxyBindFirstCardBindCardResponseResult
     */
    function getResult()
    {
        return $this->result;
    }
}
