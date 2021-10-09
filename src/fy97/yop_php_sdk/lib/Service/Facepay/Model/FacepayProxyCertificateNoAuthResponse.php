<?php


namespace Fy\Yeepay\Yop\Sdk\Service\Facepay\Model;


use Fy\Yeepay\Yop\Sdk\Model\BaseResponse;
class FacepayProxyCertificateNoAuthResponse extends BaseResponse
{
    /**
     * @var FacepayProxyCertificateNoAuthFaceLogonResponseResult
     */
    private $result;

    function getResultClass()
    {
        return '\Fy\Yeepay\Yop\Sdk\Service\Facepay\Model\FacepayProxyCertificateNoAuthFaceLogonResponseResult';
    }

    /**
     * @param FacepayProxyCertificateNoAuthFaceLogonResponseResult $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return FacepayProxyCertificateNoAuthFaceLogonResponseResult
     */
    function getResult()
    {
        return $this->result;
    }
}
