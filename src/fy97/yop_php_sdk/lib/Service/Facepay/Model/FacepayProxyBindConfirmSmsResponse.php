<?php


namespace Fy\Yeepay\Yop\Sdk\Service\Facepay\Model;


use Fy\Yeepay\Yop\Sdk\Model\BaseResponse;
class FacepayProxyBindConfirmSmsResponse extends BaseResponse
{
    /**
     * @var FacepayProxyBindConfirmSmsBindCardResponseResult
     */
    private $result;

    function getResultClass()
    {
        return '\Fy\Yeepay\Yop\Sdk\Service\Facepay\Model\FacepayProxyBindConfirmSmsBindCardResponseResult';
    }

    /**
     * @param FacepayProxyBindConfirmSmsBindCardResponseResult $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return FacepayProxyBindConfirmSmsBindCardResponseResult
     */
    function getResult()
    {
        return $this->result;
    }
}
