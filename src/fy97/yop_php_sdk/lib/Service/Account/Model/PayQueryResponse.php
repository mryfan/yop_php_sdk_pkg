<?php


namespace Fy\Yeepay\Yop\Sdk\Service\Account\Model;


use Fy\Yeepay\Yop\Sdk\Model\BaseResponse;
class PayQueryResponse extends BaseResponse
{
    /**
     * @var PayQueryRemitOrderQueryRespDTOResult
     */
    private $result;

    function getResultClass()
    {
        return '\Fy\Yeepay\Yop\Sdk\Service\Account\Model\PayQueryRemitOrderQueryRespDTOResult';
    }

    /**
     * @param PayQueryRemitOrderQueryRespDTOResult $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return PayQueryRemitOrderQueryRespDTOResult
     */
    function getResult()
    {
        return $this->result;
    }
}
