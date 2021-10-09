<?php


namespace Fy\Yeepay\Yop\Sdk\Service\Trade;


use Fy\Yeepay\Yop\Sdk\Auth\AuthorityReqRegistryImpl;
use Fy\Yeepay\Yop\Sdk\Auth\AuthorizationReqRegistry;
use Fy\Yeepay\Yop\Sdk\Auth\AuthorizationReqSupport;
use Fy\Yeepay\Yop\Sdk\Client\ClientParams;
use Fy\Yeepay\Yop\Sdk\Client\Support\ClientParamsSupport;
use Fy\Yeepay\Yop\Sdk\Config\AppSdkConfig;
use Fy\Yeepay\Yop\Sdk\Config\AppSdkConfigProvider;
use Fy\Yeepay\Yop\Sdk\Config\DefaultAppSdkConfigProvider;
use Fy\Yeepay\Yop\Sdk\Exception\YopClientException;

class TradeClientBuilder
{
    /**
     * @var AuthorizationReqRegistry
     */
    private static $authorizationReqRegistry;

    public static function __init()
    {
        self::$authorizationReqRegistry = new AuthorityReqRegistryImpl();
        self::$authorizationReqRegistry->register('order', AuthorizationReqSupport::getAuthorizationReq('YOP-RSA2048-SHA256'));
        self::$authorizationReqRegistry->register('orderClose', AuthorizationReqSupport::getAuthorizationReq('YOP-RSA2048-SHA256'));
        self::$authorizationReqRegistry->register('orderCombineQuery', AuthorizationReqSupport::getAuthorizationReq('YOP-RSA2048-SHA256'));
        self::$authorizationReqRegistry->register('orderQuery', AuthorizationReqSupport::getAuthorizationReq('YOP-RSA2048-SHA256'));
        self::$authorizationReqRegistry->register('receiptDownload', AuthorizationReqSupport::getAuthorizationReq('YOP-RSA2048-SHA256'));
        self::$authorizationReqRegistry->register('refund', AuthorizationReqSupport::getAuthorizationReq('YOP-RSA2048-SHA256'));
        self::$authorizationReqRegistry->register('refundEnd', AuthorizationReqSupport::getAuthorizationReq('YOP-RSA2048-SHA256'));
        self::$authorizationReqRegistry->register('refundFast', AuthorizationReqSupport::getAuthorizationReq('YOP-RSA2048-SHA256'));
        self::$authorizationReqRegistry->register('refundQuery', AuthorizationReqSupport::getAuthorizationReq('YOP-RSA2048-SHA256'));
        self::$authorizationReqRegistry->register('refundSupply', AuthorizationReqSupport::getAuthorizationReq('YOP-RSA2048-SHA256'));
    }

    /**
     * @var ClientParams
     */
    private $clientParams;

    /**
     * TradeClientBuilder constructor.
     * @param ClientParams $clientParams
     */
    public function __construct(ClientParams $clientParams)
    {
        $this->clientParams = $clientParams;
    }

    public function build()
    {
        return new TradeClient($this->clientParams);
    }

    /**
     * @param $config AppSdkConfig|array|AppSdkConfigProvider
     * @return TradeClientBuilder
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
        return new TradeClientBuilder($clientParams);
    }

}
TradeClientBuilder::__init();
