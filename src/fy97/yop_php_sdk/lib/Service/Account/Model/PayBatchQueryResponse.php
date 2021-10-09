<?php


namespace Fy\Yeepay\Yop\Sdk\Service\Account\Model;


use Fy\Yeepay\Yop\Sdk\Model\BaseResponse;
class PayBatchQueryResponse extends BaseResponse
{
    /**
     * @var PayBatchQueryBatchRemitQueryRespDTOResult
     */
    private $result;

    function getResultClass()
    {
        return '\Fy\Yeepay\Yop\Sdk\Service\Account\Model\PayBatchQueryBatchRemitQueryRespDTOResult';
    }

    /**
     * @param PayBatchQueryBatchRemitQueryRespDTOResult $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return PayBatchQueryBatchRemitQueryRespDTOResult
     */
    function getResult()
    {
        return $this->result;
    }
}
