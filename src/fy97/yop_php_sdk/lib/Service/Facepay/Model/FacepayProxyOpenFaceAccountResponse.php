<?php


namespace Fy\Yeepay\Yop\Sdk\Service\Facepay\Model;


use Fy\Yeepay\Yop\Sdk\Model\BaseResponse;
class FacepayProxyOpenFaceAccountResponse extends BaseResponse
{
    /**
     * @var FacepayProxyOpenFaceAccountBaseUserResponseResult
     */
    private $result;

    function getResultClass()
    {
        return '\Fy\Yeepay\Yop\Sdk\Service\Facepay\Model\FacepayProxyOpenFaceAccountBaseUserResponseResult';
    }

    /**
     * @param FacepayProxyOpenFaceAccountBaseUserResponseResult $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return FacepayProxyOpenFaceAccountBaseUserResponseResult
     */
    function getResult()
    {
        return $this->result;
    }
}
