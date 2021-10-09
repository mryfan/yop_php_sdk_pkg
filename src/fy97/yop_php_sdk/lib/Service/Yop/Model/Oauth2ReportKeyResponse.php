<?php


namespace Fy\Yeepay\Yop\Sdk\Service\Yop\Model;


use Fy\Yeepay\Yop\Sdk\Model\BaseResponse;
class Oauth2ReportKeyResponse extends BaseResponse
{
    /**
     * @var Oauth2ReportKeyHandshakeResponseResult
     */
    private $result;

    function getResultClass()
    {
        return '\Fy\Yeepay\Yop\Sdk\Service\Yop\Model\Oauth2ReportKeyHandshakeResponseResult';
    }

    /**
     * @param Oauth2ReportKeyHandshakeResponseResult $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return Oauth2ReportKeyHandshakeResponseResult
     */
    function getResult()
    {
        return $this->result;
    }
}
