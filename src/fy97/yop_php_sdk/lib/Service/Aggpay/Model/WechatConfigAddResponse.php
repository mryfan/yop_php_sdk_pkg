<?php


namespace Fy\Yeepay\Yop\Sdk\Service\Aggpay\Model;


use Fy\Yeepay\Yop\Sdk\Model\BaseResponse;
class WechatConfigAddResponse extends BaseResponse
{
    /**
     * @var WechatConfigAddWechatConfigResponseDTOResult
     */
    private $result;

    function getResultClass()
    {
        return '\Fy\Yeepay\Yop\Sdk\Service\Aggpay\Model\WechatConfigAddWechatConfigResponseDTOResult';
    }

    /**
     * @param WechatConfigAddWechatConfigResponseDTOResult $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return WechatConfigAddWechatConfigResponseDTOResult
     */
    function getResult()
    {
        return $this->result;
    }
}
