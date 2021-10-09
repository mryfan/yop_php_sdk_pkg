<?php


namespace Fy\Yeepay\Yop\Sdk\Service\Facepay\Model;


use Fy\Yeepay\Yop\Sdk\Model\BaseResponse;
class FacepayProxyQueryOrderAfterResponse extends BaseResponse
{
    /**
     * @var FacepayProxyQueryOrderAfterOrderAfterResponseResult
     */
    private $result;

    function getResultClass()
    {
        return '\Fy\Yeepay\Yop\Sdk\Service\Facepay\Model\FacepayProxyQueryOrderAfterOrderAfterResponseResult';
    }

    /**
     * @param FacepayProxyQueryOrderAfterOrderAfterResponseResult $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return FacepayProxyQueryOrderAfterOrderAfterResponseResult
     */
    function getResult()
    {
        return $this->result;
    }
}
