<?php


namespace Fy\Yeepay\Yop\Sdk\Service\Facepay\Model;


use Fy\Yeepay\Yop\Sdk\Model\BaseResponse;
class FacepayProxyConfirmVerifySmscodeResponse extends BaseResponse
{
    /**
     * @var FacepayProxyConfirmVerifySmscodeUserInfoResponseResult
     */
    private $result;

    function getResultClass()
    {
        return '\Fy\Yeepay\Yop\Sdk\Service\Facepay\Model\FacepayProxyConfirmVerifySmscodeUserInfoResponseResult';
    }

    /**
     * @param FacepayProxyConfirmVerifySmscodeUserInfoResponseResult $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return FacepayProxyConfirmVerifySmscodeUserInfoResponseResult
     */
    function getResult()
    {
        return $this->result;
    }
}
