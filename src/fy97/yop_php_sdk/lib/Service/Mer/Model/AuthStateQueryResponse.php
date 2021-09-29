<?php


namespace Fy\Yeepay\Yop\Sdk\Service\Mer\Model;


use Fy\Yeepay\Yop\Sdk\Model\BaseResponse;
class AuthStateQueryResponse extends BaseResponse
{
    /**
     * @var AuthStateQueryIdentityAuthStateResDtoResult
     */
    private $result;

    function getResultClass()
    {
        return '\Fy\Yeepay\Yop\Sdk\Service\Mer\Model\AuthStateQueryIdentityAuthStateResDtoResult';
    }

    /**
     * @param AuthStateQueryIdentityAuthStateResDtoResult $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return AuthStateQueryIdentityAuthStateResDtoResult
     */
    function getResult()
    {
        return $this->result;
    }
}
