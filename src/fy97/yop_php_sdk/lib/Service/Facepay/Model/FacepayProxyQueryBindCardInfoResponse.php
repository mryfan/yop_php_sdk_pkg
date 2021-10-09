<?php


namespace Fy\Yeepay\Yop\Sdk\Service\Facepay\Model;


use Fy\Yeepay\Yop\Sdk\Model\BaseResponse;
class FacepayProxyQueryBindCardInfoResponse extends BaseResponse
{
    /**
     * @var FacepayProxyQueryBindCardInfoBindCardInfoResponseResult
     */
    private $result;

    function getResultClass()
    {
        return '\Fy\Yeepay\Yop\Sdk\Service\Facepay\Model\FacepayProxyQueryBindCardInfoBindCardInfoResponseResult';
    }

    /**
     * @param FacepayProxyQueryBindCardInfoBindCardInfoResponseResult $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return FacepayProxyQueryBindCardInfoBindCardInfoResponseResult
     */
    function getResult()
    {
        return $this->result;
    }
}
