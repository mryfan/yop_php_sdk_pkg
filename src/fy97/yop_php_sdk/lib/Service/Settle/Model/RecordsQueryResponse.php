<?php


namespace Fy\Yeepay\Yop\Sdk\Service\Settle\Model;


use Fy\Yeepay\Yop\Sdk\Model\BaseResponse;
class RecordsQueryResponse extends BaseResponse
{
    /**
     * @var RecordsQuerySettleRecordQueryResponseDtoResult
     */
    private $result;

    function getResultClass()
    {
        return '\Fy\Yeepay\Yop\Sdk\Service\Settle\Model\RecordsQuerySettleRecordQueryResponseDtoResult';
    }

    /**
     * @param RecordsQuerySettleRecordQueryResponseDtoResult $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return RecordsQuerySettleRecordQueryResponseDtoResult
     */
    function getResult()
    {
        return $this->result;
    }
}
