<?php


namespace Fy\Yeepay\Yop\Sdk\Service\Aggpay\Model;


use Fy\Yeepay\Yop\Sdk\Model\BaseResponse;
class WechatConfigQuery0Response extends BaseResponse
{
    /**
     * @var WechatConfigQueryWechatConfigFlatResponseDTOResult
     */
    private $result;

    function getResultClass()
    {
        return '\Fy\Yeepay\Yop\Sdk\Service\Aggpay\Model\WechatConfigQueryWechatConfigFlatResponseDTOResult';
    }

    /**
     * @param WechatConfigQueryWechatConfigFlatResponseDTOResult $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return WechatConfigQueryWechatConfigFlatResponseDTOResult
     */
    function getResult()
    {
        return $this->result;
    }
}
