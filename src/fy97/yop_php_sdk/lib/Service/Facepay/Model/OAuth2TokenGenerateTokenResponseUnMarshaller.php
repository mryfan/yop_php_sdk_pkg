<?php


namespace Fy\Yeepay\Yop\Sdk\Service\Facepay\Model;


use Fy\Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class OAuth2TokenGenerateTokenResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var OAuth2TokenGenerateTokenResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new OAuth2TokenGenerateTokenResponseUnMarshaller();
    }

    /**
     * @return OAuth2TokenGenerateTokenResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return OAuth2TokenGenerateTokenResponse
     */
    protected function getResponseInstance()
    {
        return new OAuth2TokenGenerateTokenResponse();
    }
}

OAuth2TokenGenerateTokenResponseUnMarshaller::__init();
