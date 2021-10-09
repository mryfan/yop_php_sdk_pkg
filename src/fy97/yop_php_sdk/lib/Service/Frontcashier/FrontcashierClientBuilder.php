<?php


namespace Fy\Yeepay\Yop\Sdk\Service\Frontcashier;


use Fy\Yeepay\Yop\Sdk\Auth\AuthorityReqRegistryImpl;
use Fy\Yeepay\Yop\Sdk\Auth\AuthorizationReqRegistry;
use Fy\Yeepay\Yop\Sdk\Auth\AuthorizationReqSupport;
use Fy\Yeepay\Yop\Sdk\Client\ClientParams;
use Fy\Yeepay\Yop\Sdk\Client\Support\ClientParamsSupport;
use Fy\Yeepay\Yop\Sdk\Config\AppSdkConfig;
use Fy\Yeepay\Yop\Sdk\Config\AppSdkConfigProvider;
use Fy\Yeepay\Yop\Sdk\Config\DefaultAppSdkConfigProvider;
use Fy\Yeepay\Yop\Sdk\Exception\YopClientException;

class FrontcashierClientBuilder
{
    /**
     * @var AuthorizationReqRegistry
     */
    private static $authorizationReqRegistry;

    public static function __init()
    {
        self::$authorizationReqRegistry = new AuthorityReqRegistryImpl();
        self::$authorizationReqRegistry->register('bankTransferPay', AuthorizationReqSupport::getAuthorizationReq('YOP-RSA2048-SHA256'));
        self::$authorizationReqRegistry->register('bankTransferQuery', AuthorizationReqSupport::getAuthorizationReq('YOP-RSA2048-SHA256'));
        self::$authorizationReqRegistry->register('bindcardConfirm', AuthorizationReqSupport::getAuthorizationReq('YOP-RSA2048-SHA256'));
        self::$authorizationReqRegistry->register('bindcardConfirm_0', AuthorizationReqSupport::getAuthorizationReq('YOP-RSA2048-SHA256'));
        self::$authorizationReqRegistry->register('bindcardGetcardbin', AuthorizationReqSupport::getAuthorizationReq('YOP-RSA2048-SHA256'));
        self::$authorizationReqRegistry->register('bindcardQueryorder', AuthorizationReqSupport::getAuthorizationReq('YOP-RSA2048-SHA256'));
        self::$authorizationReqRegistry->register('bindcardRequest', AuthorizationReqSupport::getAuthorizationReq('YOP-RSA2048-SHA256'));
        self::$authorizationReqRegistry->register('bindcardRequest_0', AuthorizationReqSupport::getAuthorizationReq('YOP-RSA2048-SHA256'));
        self::$authorizationReqRegistry->register('bindpayConfirm', AuthorizationReqSupport::getAuthorizationReq('YOP-RSA2048-SHA256'));
        self::$authorizationReqRegistry->register('bindpayRequest', AuthorizationReqSupport::getAuthorizationReq('YOP-RSA2048-SHA256'));
        self::$authorizationReqRegistry->register('bindpaySendsms', AuthorizationReqSupport::getAuthorizationReq('YOP-RSA2048-SHA256'));
        self::$authorizationReqRegistry->register('getcardbin', AuthorizationReqSupport::getAuthorizationReq('YOP-RSA2048-SHA256'));
        self::$authorizationReqRegistry->register('yjzfBindpayrequest', AuthorizationReqSupport::getAuthorizationReq('YOP-RSA2048-SHA256'));
        self::$authorizationReqRegistry->register('yjzfFirstpayrequest', AuthorizationReqSupport::getAuthorizationReq('YOP-RSA2048-SHA256'));
        self::$authorizationReqRegistry->register('yjzfPaymentconfirm', AuthorizationReqSupport::getAuthorizationReq('YOP-RSA2048-SHA256'));
        self::$authorizationReqRegistry->register('yjzfSendsms', AuthorizationReqSupport::getAuthorizationReq('YOP-RSA2048-SHA256'));
    }

    /**
     * @var ClientParams
     */
    private $clientParams;

    /**
     * FrontcashierClientBuilder constructor.
     * @param ClientParams $clientParams
     */
    public function __construct(ClientParams $clientParams)
    {
        $this->clientParams = $clientParams;
    }

    public function build()
    {
        return new FrontcashierClient($this->clientParams);
    }

    /**
     * @param $config AppSdkConfig|array|AppSdkConfigProvider
     * @return FrontcashierClientBuilder
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
        return new FrontcashierClientBuilder($clientParams);
    }

}
FrontcashierClientBuilder::__init();
