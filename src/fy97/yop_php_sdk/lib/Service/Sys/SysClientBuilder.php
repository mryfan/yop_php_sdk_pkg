<?php


namespace Fy\Yeepay\Yop\Sdk\Service\Sys;


use Fy\Yeepay\Yop\Sdk\Auth\AuthorityReqRegistryImpl;
use Fy\Yeepay\Yop\Sdk\Auth\AuthorizationReqRegistry;
use Fy\Yeepay\Yop\Sdk\Auth\AuthorizationReqSupport;
use Fy\Yeepay\Yop\Sdk\Client\ClientParams;
use Fy\Yeepay\Yop\Sdk\Client\Support\ClientParamsSupport;
use Fy\Yeepay\Yop\Sdk\Config\AppSdkConfig;
use Fy\Yeepay\Yop\Sdk\Config\AppSdkConfigProvider;
use Fy\Yeepay\Yop\Sdk\Config\DefaultAppSdkConfigProvider;
use Fy\Yeepay\Yop\Sdk\Exception\YopClientException;

class SysClientBuilder
{
    /**
     * @var AuthorizationReqRegistry
     */
    private static $authorizationReqRegistry;

    public static function __init()
    {
        self::$authorizationReqRegistry = new AuthorityReqRegistryImpl();
        self::$authorizationReqRegistry->register('merchantQualUpload', AuthorizationReqSupport::getAuthorizationReq('YOP-RSA2048-SHA256'));
    }

    /**
     * @var ClientParams
     */
    private $clientParams;

    /**
     * SysClientBuilder constructor.
     * @param ClientParams $clientParams
     */
    public function __construct(ClientParams $clientParams)
    {
        $this->clientParams = $clientParams;
    }

    public function build()
    {
        return new SysClient($this->clientParams);
    }

    /**
     * @param $config AppSdkConfig|array|AppSdkConfigProvider
     * @return SysClientBuilder
     * @throws YopClientException
     */
    public static function builder($config)
    {
        $appSdkConfigProvider = null;
        if ($config instanceof AppSdkConfigProvider) {
            $appSdkConfigProvider = $config;
        } else {
            $appSdkConfigProvider = new DefaultAppSdkConfigProvider($config);
        }
        $clientParams = ClientParamsSupport::generateClientParams($appSdkConfigProvider);
        $clientParams->setAuthorizationReqRegistry(self::$authorizationReqRegistry);
        return new SysClientBuilder($clientParams);
    }

}
SysClientBuilder::__init();
