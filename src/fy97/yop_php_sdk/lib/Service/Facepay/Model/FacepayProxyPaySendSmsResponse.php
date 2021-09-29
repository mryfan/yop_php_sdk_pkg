<?php


namespace Fy\Yeepay\Yop\Sdk\Service\Facepay\Model;


use Fy\Yeepay\Yop\Sdk\Model\BaseResponse;
class FacepayProxyPaySendSmsResponse extends BaseResponse
{
    /**
     * @var FacepayProxyPaySendSmsBaseUserResponseResult
     */
    private $result;

    function getResultClass()
    {
        return '\Fy\Yeepay\Yop\Sdk\Service\Facepay\Model\FacepayProxyPaySendSmsBaseUserResponseResult';
    }

    /**
     * @param FacepayProxyPaySendSmsBaseUserResponseResult $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return FacepayProxyPaySendSmsBaseUserResponseResult
     */
    function getResult()
    {
        return $this->result;
    }
}
