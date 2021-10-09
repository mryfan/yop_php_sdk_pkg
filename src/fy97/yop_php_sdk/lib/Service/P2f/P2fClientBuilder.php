<?php


namespace Fy\Yeepay\Yop\Sdk\Service\P2f;


use Fy\Yeepay\Yop\Sdk\Auth\AuthorityReqRegistryImpl;
use Fy\Yeepay\Yop\Sdk\Auth\AuthorizationReqRegistry;
use Fy\Yeepay\Yop\Sdk\Auth\AuthorizationReqSupport;
use Fy\Yeepay\Yop\Sdk\Client\ClientParams;
use Fy\Yeepay\Yop\Sdk\Client\Support\ClientParamsSupport;
use Fy\Yeepay\Yop\Sdk\Config\AppSdkConfig;
use Fy\Yeepay\Yop\Sdk\Config\AppSdkConfigProvider;
use Fy\Yeepay\Yop\Sdk\Config\DefaultAppSdkConfigProvider;
use Fy\Yeepay\Yop\Sdk\Exception\YopClientException;

class P2fClientBuilder
{
    /**
     * @var AuthorizationReqRegistry
     */
    private static $authorizationReqRegistry;

    public static function __init()
    {
        self::$authorizationReqRegistry = new AuthorityReqRegistryImpl();
        self::$authorizationReqRegistry->register('companyFinanceAccount', AuthorizationReqSupport::getAuthorizationReq('YOP-RSA2048-SHA256'));
        self::$authorizationReqRegistry->register('companyFinanceAccountQuery', AuthorizationReqSupport::getAuthorizationReq('YOP-RSA2048-SHA256'));
        self::$authorizationReqRegistry->register('companyFinanceAssetsQuery', AuthorizationReqSupport::getAuthorizationReq('YOP-RSA2048-SHA256'));
        self::$authorizationReqRegistry->register('companyFinanceOrderQuery', AuthorizationReqSupport::getAuthorizationReq('YOP-RSA2048-SHA256'));
        self::$authorizationReqRegistry->register('companyFinancePurchaseOrder', AuthorizationReqSupport::getAuthorizationReq('YOP-RSA2048-SHA256'));
        self::$authorizationReqRegistry->register('companyFinanceRedeemOrder', AuthorizationReqSupport::getAuthorizationReq('YOP-RSA2048-SHA256'));
        self::$authorizationReqRegistry->register('companyFinanceSmallPayment', AuthorizationReqSupport::getAuthorizationReq('YOP-RSA2048-SHA256'));
        self::$authorizationReqRegistry->register('companyFinanceTransactionQuery', AuthorizationReqSupport::getAuthorizationReq('YOP-RSA2048-SHA256'));
        self::$authorizationReqRegistry->register('fileUpload', AuthorizationReqSupport::getAuthorizationReq('YOP-RSA2048-SHA256'));
    }

    /**
     * @var ClientParams
     */
    private $clientParams;

    /**
     * P2fClientBuilder constructor.
     * @param ClientParams $clientParams
     */
    public function __construct(ClientParams $clientParams)
    {
        $this->clientParams = $clientParams;
    }

    public function build()
    {
        return new P2fClient($this->clientParams);
    }

    /**
     * @param $config AppSdkConfig|array|AppSdkConfigProvider
     * @return P2fClientBuilder
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
        return new P2fClientBuilder($clientParams);
    }

}
P2fClientBuilder::__init();
