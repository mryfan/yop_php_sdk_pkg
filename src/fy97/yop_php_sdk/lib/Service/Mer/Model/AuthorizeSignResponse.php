<?php


namespace Fy\Yeepay\Yop\Sdk\Service\Mer\Model;


use Fy\Yeepay\Yop\Sdk\Model\BaseResponse;
class AuthorizeSignResponse extends BaseResponse
{
    /**
     * @var AuthorizeSignMGAuthorizeRespDTOResult
     */
    private $result;

    function getResultClass()
    {
        return '\Fy\Yeepay\Yop\Sdk\Service\Mer\Model\AuthorizeSignMGAuthorizeRespDTOResult';
    }

    /**
     * @param AuthorizeSignMGAuthorizeRespDTOResult $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return AuthorizeSignMGAuthorizeRespDTOResult
     */
    function getResult()
    {
        return $this->result;
    }
}
