<?php


namespace Fy\Yeepay\Yop\Sdk\Service\Insurance\Model;


use Fy\Yeepay\Yop\Sdk\Model\BaseResponse;
class RealnameNotifyResponse extends BaseResponse
{
    /**
     * @var RealnameNotifyCommonNoticeResponseDTOResult
     */
    private $result;

    function getResultClass()
    {
        return '\Fy\Yeepay\Yop\Sdk\Service\Insurance\Model\RealnameNotifyCommonNoticeResponseDTOResult';
    }

    /**
     * @param RealnameNotifyCommonNoticeResponseDTOResult $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return RealnameNotifyCommonNoticeResponseDTOResult
     */
    function getResult()
    {
        return $this->result;
    }
}
