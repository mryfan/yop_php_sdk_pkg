<?php


namespace Fy\Yeepay\Yop\Sdk\Service\Account\Model;


use Fy\Yeepay\Yop\Sdk\Model\BaseResponse;
class WithdrawCardModifyResponse extends BaseResponse
{
    /**
     * @var WithdrawCardModifyModifyBindCardRespDTOResult
     */
    private $result;

    function getResultClass()
    {
        return '\Fy\Yeepay\Yop\Sdk\Service\Account\Model\WithdrawCardModifyModifyBindCardRespDTOResult';
    }

    /**
     * @param WithdrawCardModifyModifyBindCardRespDTOResult $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return WithdrawCardModifyModifyBindCardRespDTOResult
     */
    function getResult()
    {
        return $this->result;
    }
}
