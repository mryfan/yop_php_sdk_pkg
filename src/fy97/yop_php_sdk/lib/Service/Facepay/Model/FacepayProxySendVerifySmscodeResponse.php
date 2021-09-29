<?php


namespace Fy\Yeepay\Yop\Sdk\Service\Facepay\Model;


use Fy\Yeepay\Yop\Sdk\Model\BaseResponse;
class FacepayProxySendVerifySmscodeResponse extends BaseResponse
{
    /**
     * @var FacepayProxySendVerifySmscodeBaseResponseResult
     */
    private $result;

    function getResultClass()
    {
        return '\Fy\Yeepay\Yop\Sdk\Service\Facepay\Model\FacepayProxySendVerifySmscodeBaseResponseResult';
    }

    /**
     * @param FacepayProxySendVerifySmscodeBaseResponseResult $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return FacepayProxySendVerifySmscodeBaseResponseResult
     */
    function getResult()
    {
        return $this->result;
    }
}
