<?php


namespace Fy\Yeepay\Yop\Sdk\Service\Facepay\Model;


use Fy\Yeepay\Yop\Sdk\Model\BaseResponse;
class FacepayProxyVerifyUserInfoResponse extends BaseResponse
{
    /**
     * @var FacepayProxyVerifyUserInfoUserInfoResponseResult
     */
    private $result;

    function getResultClass()
    {
        return '\Fy\Yeepay\Yop\Sdk\Service\Facepay\Model\FacepayProxyVerifyUserInfoUserInfoResponseResult';
    }

    /**
     * @param FacepayProxyVerifyUserInfoUserInfoResponseResult $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return FacepayProxyVerifyUserInfoUserInfoResponseResult
     */
    function getResult()
    {
        return $this->result;
    }
}
