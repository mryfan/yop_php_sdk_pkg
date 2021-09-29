<?php


namespace Fy\Yeepay\Yop\Sdk\Service\Divide\Model;


use Fy\Yeepay\Yop\Sdk\Model\BaseResponse;
class ApplyResponse extends BaseResponse
{
    /**
     * @var ApplyYopOrderDivideResDTOResult
     */
    private $result;

    function getResultClass()
    {
        return '\Fy\Yeepay\Yop\Sdk\Service\Divide\Model\ApplyYopOrderDivideResDTOResult';
    }

    /**
     * @param ApplyYopOrderDivideResDTOResult $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return ApplyYopOrderDivideResDTOResult
     */
    function getResult()
    {
        return $this->result;
    }
}
