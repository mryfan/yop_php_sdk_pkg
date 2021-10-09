<?php


namespace Fy\Yeepay\Yop\Sdk\Service\Common\Model;


use Fy\Yeepay\Yop\Sdk\Model\BaseResponse;
use Fy\Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class YopResponseUnMarshaller extends BaseResponseUnMarshaller
{
    /**
     * @return BaseResponse
     */
    protected function getResponseInstance()
    {
        return new YopResponse();
    }
}