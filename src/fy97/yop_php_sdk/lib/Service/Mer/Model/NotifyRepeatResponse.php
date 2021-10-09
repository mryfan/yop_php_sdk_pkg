<?php


namespace Fy\Yeepay\Yop\Sdk\Service\Mer\Model;


use Fy\Yeepay\Yop\Sdk\Model\BaseResponse;
class NotifyRepeatResponse extends BaseResponse
{
    /**
     * @var NotifyRepeatMerchantNetInRepeatNotifyRespDtoResult
     */
    private $result;

    function getResultClass()
    {
        return '\Fy\Yeepay\Yop\Sdk\Service\Mer\Model\NotifyRepeatMerchantNetInRepeatNotifyRespDtoResult';
    }

    /**
     * @param NotifyRepeatMerchantNetInRepeatNotifyRespDtoResult $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return NotifyRepeatMerchantNetInRepeatNotifyRespDtoResult
     */
    function getResult()
    {
        return $this->result;
    }
}
