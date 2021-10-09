<?php


namespace Fy\Yeepay\Yop\Sdk\Service\Account\Model;


use Fy\Yeepay\Yop\Sdk\Model\BaseResponse;
class RechargeBatchQueryResponse extends BaseResponse
{
    /**
     * @var RechargeBatchQueryRechargeQueryMultiApiRespDTOResult
     */
    private $result;

    function getResultClass()
    {
        return '\Fy\Yeepay\Yop\Sdk\Service\Account\Model\RechargeBatchQueryRechargeQueryMultiApiRespDTOResult';
    }

    /**
     * @param RechargeBatchQueryRechargeQueryMultiApiRespDTOResult $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return RechargeBatchQueryRechargeQueryMultiApiRespDTOResult
     */
    function getResult()
    {
        return $this->result;
    }
}
