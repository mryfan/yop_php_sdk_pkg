<?php


namespace Fy\Yeepay\Yop\Sdk\Service\Facepay\Model;


use Fy\Yeepay\Yop\Sdk\Model\BaseResponse;
class FacepayProxyCreateBindCardResponse extends BaseResponse
{
    /**
     * @var FacepayProxyCreateBindCardBindCardResponseResult
     */
    private $result;

    function getResultClass()
    {
        return '\Fy\Yeepay\Yop\Sdk\Service\Facepay\Model\FacepayProxyCreateBindCardBindCardResponseResult';
    }

    /**
     * @param FacepayProxyCreateBindCardBindCardResponseResult $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return FacepayProxyCreateBindCardBindCardResponseResult
     */
    function getResult()
    {
        return $this->result;
    }
}
