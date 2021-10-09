<?php


namespace Fy\Yeepay\Yop\Sdk\Service\Account\Model;


use Fy\Yeepay\Yop\Sdk\Model\BaseResponse;
class PayOrderResponse extends BaseResponse
{
    /**
     * @var PayOrderRemitRespDTOResult
     */
    private $result;

    function getResultClass()
    {
        return '\Fy\Yeepay\Yop\Sdk\Service\Account\Model\PayOrderRemitRespDTOResult';
    }

    /**
     * @param PayOrderRemitRespDTOResult $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return PayOrderRemitRespDTOResult
     */
    function getResult()
    {
        return $this->result;
    }
}
