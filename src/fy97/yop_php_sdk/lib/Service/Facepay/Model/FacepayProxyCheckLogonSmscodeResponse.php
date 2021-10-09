<?php


namespace Fy\Yeepay\Yop\Sdk\Service\Facepay\Model;


use Fy\Yeepay\Yop\Sdk\Model\BaseResponse;
class FacepayProxyCheckLogonSmscodeResponse extends BaseResponse
{
    /**
     * @var FacepayProxyCheckLogonSmscodeBaseUserResponseResult
     */
    private $result;

    function getResultClass()
    {
        return '\Fy\Yeepay\Yop\Sdk\Service\Facepay\Model\FacepayProxyCheckLogonSmscodeBaseUserResponseResult';
    }

    /**
     * @param FacepayProxyCheckLogonSmscodeBaseUserResponseResult $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return FacepayProxyCheckLogonSmscodeBaseUserResponseResult
     */
    function getResult()
    {
        return $this->result;
    }
}
