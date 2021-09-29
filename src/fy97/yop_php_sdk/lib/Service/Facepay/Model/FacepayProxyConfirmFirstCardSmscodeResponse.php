<?php


namespace Fy\Yeepay\Yop\Sdk\Service\Facepay\Model;


use Fy\Yeepay\Yop\Sdk\Model\BaseResponse;
class FacepayProxyConfirmFirstCardSmscodeResponse extends BaseResponse
{
    /**
     * @var FacepayProxyConfirmFirstCardSmscodeBaseResponseResult
     */
    private $result;

    function getResultClass()
    {
        return '\Fy\Yeepay\Yop\Sdk\Service\Facepay\Model\FacepayProxyConfirmFirstCardSmscodeBaseResponseResult';
    }

    /**
     * @param FacepayProxyConfirmFirstCardSmscodeBaseResponseResult $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return FacepayProxyConfirmFirstCardSmscodeBaseResponseResult
     */
    function getResult()
    {
        return $this->result;
    }
}
