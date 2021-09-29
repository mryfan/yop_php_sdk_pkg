<?php


namespace Fy\Yeepay\Yop\Sdk\Service\Facepay\Model;


use Fy\Yeepay\Yop\Sdk\Model\BaseResponse;
class FacepayProxySendLogonSmscodeResponse extends BaseResponse
{
    /**
     * @var FacepayProxySendLogonSmscodeBaseResponseResult
     */
    private $result;

    function getResultClass()
    {
        return '\Fy\Yeepay\Yop\Sdk\Service\Facepay\Model\FacepayProxySendLogonSmscodeBaseResponseResult';
    }

    /**
     * @param FacepayProxySendLogonSmscodeBaseResponseResult $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return FacepayProxySendLogonSmscodeBaseResponseResult
     */
    function getResult()
    {
        return $this->result;
    }
}
