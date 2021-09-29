<?php


namespace Fy\Yeepay\Yop\Sdk\Service\Mer\Model;


use Fy\Yeepay\Yop\Sdk\Model\BaseResponse;
class AuthorizeRelieveResponse extends BaseResponse
{
    /**
     * @var AuthorizeRelieveMGRelieveAuthorizeRespDTOResult
     */
    private $result;

    function getResultClass()
    {
        return '\Fy\Yeepay\Yop\Sdk\Service\Mer\Model\AuthorizeRelieveMGRelieveAuthorizeRespDTOResult';
    }

    /**
     * @param AuthorizeRelieveMGRelieveAuthorizeRespDTOResult $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return AuthorizeRelieveMGRelieveAuthorizeRespDTOResult
     */
    function getResult()
    {
        return $this->result;
    }
}
