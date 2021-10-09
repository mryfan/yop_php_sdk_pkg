<?php


namespace Fy\Yeepay\Yop\Sdk\Service\Facepay\Model;


use Fy\Yeepay\Yop\Sdk\Model\BaseResponse;
class FacepayProxyQueryOrderBeforeResponse extends BaseResponse
{
    /**
     * @var FacepayProxyQueryOrderBeforeOrderBeforeResponseResult
     */
    private $result;

    function getResultClass()
    {
        return '\Fy\Yeepay\Yop\Sdk\Service\Facepay\Model\FacepayProxyQueryOrderBeforeOrderBeforeResponseResult';
    }

    /**
     * @param FacepayProxyQueryOrderBeforeOrderBeforeResponseResult $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return FacepayProxyQueryOrderBeforeOrderBeforeResponseResult
     */
    function getResult()
    {
        return $this->result;
    }
}
