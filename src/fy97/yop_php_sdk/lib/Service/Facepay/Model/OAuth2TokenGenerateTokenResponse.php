<?php


namespace Fy\Yeepay\Yop\Sdk\Service\Facepay\Model;


use Fy\Yeepay\Yop\Sdk\Model\BaseResponse;
class OAuth2TokenGenerateTokenResponse extends BaseResponse
{
    /**
     * @var OAuth2TokenGenerateTokenOAuth2TokenResponseResult
     */
    private $result;

    function getResultClass()
    {
        return '\Fy\Yeepay\Yop\Sdk\Service\Facepay\Model\OAuth2TokenGenerateTokenOAuth2TokenResponseResult';
    }

    /**
     * @param OAuth2TokenGenerateTokenOAuth2TokenResponseResult $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return OAuth2TokenGenerateTokenOAuth2TokenResponseResult
     */
    function getResult()
    {
        return $this->result;
    }
}
