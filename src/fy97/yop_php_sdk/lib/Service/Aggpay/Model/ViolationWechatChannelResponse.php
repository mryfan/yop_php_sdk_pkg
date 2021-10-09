<?php


namespace Fy\Yeepay\Yop\Sdk\Service\Aggpay\Model;


use Fy\Yeepay\Yop\Sdk\Model\BaseResponse;
class ViolationWechatChannelResponse extends BaseResponse
{
    /**
     * @var ViolationWechatChannelWechatRiskQueryResponseDTOResult
     */
    private $result;

    function getResultClass()
    {
        return '\Fy\Yeepay\Yop\Sdk\Service\Aggpay\Model\ViolationWechatChannelWechatRiskQueryResponseDTOResult';
    }

    /**
     * @param ViolationWechatChannelWechatRiskQueryResponseDTOResult $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return ViolationWechatChannelWechatRiskQueryResponseDTOResult
     */
    function getResult()
    {
        return $this->result;
    }
}
