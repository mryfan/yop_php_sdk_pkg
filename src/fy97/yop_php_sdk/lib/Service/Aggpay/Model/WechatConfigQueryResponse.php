<?php


namespace Fy\Yeepay\Yop\Sdk\Service\Aggpay\Model;


use Fy\Yeepay\Yop\Sdk\Model\BaseResponse;
class WechatConfigQueryResponse extends BaseResponse
{
    /**
     * @var WechatConfigQueryWechatConfigResponseDTOResult
     */
    private $result;

    function getResultClass()
    {
        return '\Fy\Yeepay\Yop\Sdk\Service\Aggpay\Model\WechatConfigQueryWechatConfigResponseDTOResult';
    }

    /**
     * @param WechatConfigQueryWechatConfigResponseDTOResult $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return WechatConfigQueryWechatConfigResponseDTOResult
     */
    function getResult()
    {
        return $this->result;
    }
}
