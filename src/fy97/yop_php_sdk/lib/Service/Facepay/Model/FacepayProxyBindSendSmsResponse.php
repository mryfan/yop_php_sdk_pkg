<?php


namespace Fy\Yeepay\Yop\Sdk\Service\Facepay\Model;


use Fy\Yeepay\Yop\Sdk\Model\BaseResponse;
class FacepayProxyBindSendSmsResponse extends BaseResponse
{
    /**
     * @var FacepayProxyBindSendSmsBindCardResponseResult
     */
    private $result;

    function getResultClass()
    {
        return '\Fy\Yeepay\Yop\Sdk\Service\Facepay\Model\FacepayProxyBindSendSmsBindCardResponseResult';
    }

    /**
     * @param FacepayProxyBindSendSmsBindCardResponseResult $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return FacepayProxyBindSendSmsBindCardResponseResult
     */
    function getResult()
    {
        return $this->result;
    }
}
