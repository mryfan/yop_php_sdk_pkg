<?php


namespace Fy\Yeepay\Yop\Sdk\Service\Account\Model;


use Fy\Yeepay\Yop\Sdk\Model\BaseResponse;
class PayBatchOrderResponse extends BaseResponse
{
    /**
     * @var PayBatchOrderBatchRemitRespDTOResult
     */
    private $result;

    function getResultClass()
    {
        return '\Fy\Yeepay\Yop\Sdk\Service\Account\Model\PayBatchOrderBatchRemitRespDTOResult';
    }

    /**
     * @param PayBatchOrderBatchRemitRespDTOResult $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return PayBatchOrderBatchRemitRespDTOResult
     */
    function getResult()
    {
        return $this->result;
    }
}
