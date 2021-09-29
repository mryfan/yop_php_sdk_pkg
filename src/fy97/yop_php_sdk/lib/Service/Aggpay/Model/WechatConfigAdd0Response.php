<?php


namespace Fy\Yeepay\Yop\Sdk\Service\Aggpay\Model;


use Fy\Yeepay\Yop\Sdk\Model\BaseResponse;
class WechatConfigAdd0Response extends BaseResponse
{
    /**
     * @var WechatConfigAddWechatConfigFlatResponseDTOResult
     */
    private $result;

    function getResultClass()
    {
        return '\Fy\Yeepay\Yop\Sdk\Service\Aggpay\Model\WechatConfigAddWechatConfigFlatResponseDTOResult';
    }

    /**
     * @param WechatConfigAddWechatConfigFlatResponseDTOResult $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return WechatConfigAddWechatConfigFlatResponseDTOResult
     */
    function getResult()
    {
        return $this->result;
    }
}
