<?php


namespace Fy\Yeepay\Yop\Sdk\Service\Mer\Model;


use Fy\Yeepay\Yop\Sdk\Model\BaseResponse;
class RegisterQueryResponse extends BaseResponse
{
    /**
     * @var RegisterQueryNetInProgressQueryRespDtoResult
     */
    private $result;

    function getResultClass()
    {
        return '\Fy\Yeepay\Yop\Sdk\Service\Mer\Model\RegisterQueryNetInProgressQueryRespDtoResult';
    }

    /**
     * @param RegisterQueryNetInProgressQueryRespDtoResult $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return RegisterQueryNetInProgressQueryRespDtoResult
     */
    function getResult()
    {
        return $this->result;
    }
}
