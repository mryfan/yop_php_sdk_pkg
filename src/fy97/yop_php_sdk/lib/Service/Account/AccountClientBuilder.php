<?php


namespace Fy\Yeepay\Yop\Sdk\Service\Account;


use Fy\Yeepay\Yop\Sdk\Auth\AuthorityReqRegistryImpl;
use Fy\Yeepay\Yop\Sdk\Auth\AuthorizationReqRegistry;
use Fy\Yeepay\Yop\Sdk\Auth\AuthorizationReqSupport;
use Fy\Yeepay\Yop\Sdk\Client\ClientParams;
use Fy\Yeepay\Yop\Sdk\Client\Support\ClientParamsSupport;
use Fy\Yeepay\Yop\Sdk\Config\AppSdkConfig;
use Fy\Yeepay\Yop\Sdk\Config\AppSdkConfigProvider;
use Fy\Yeepay\Yop\Sdk\Config\DefaultAppSdkConfigProvider;
use Fy\Yeepay\Yop\Sdk\Exception\YopClientException;

class AccountClientBuilder
{
    /**
     * @var AuthorizationReqRegistry
     */
    private static $authorizationReqRegistry;

    public static function __init()
    {
        self::$authorizationReqRegistry = new AuthorityReqRegistryImpl();
        self::$authorizationReqRegistry->register('accountinfosQuery', AuthorizationReqSupport::getAuthorizationReq('YOP-RSA2048-SHA256'));
        self::$authorizationReqRegistry->register('autoWithdrawRuleCancel', AuthorizationReqSupport::getAuthorizationReq('YOP-RSA2048-SHA256'));
        self::$authorizationReqRegistry->register('autoWithdrawRuleQuery', AuthorizationReqSupport::getAuthorizationReq('YOP-RSA2048-SHA256'));
        self::$authorizationReqRegistry->register('autoWithdrawRuleSet', AuthorizationReqSupport::getAuthorizationReq('YOP-RSA2048-SHA256'));
        self::$authorizationReqRegistry->register('balanceQuery', AuthorizationReqSupport::getAuthorizationReq('YOP-RSA2048-SHA256'));
        self::$authorizationReqRegistry->register('enterpriseAccountPayOrder', AuthorizationReqSupport::getAuthorizationReq('YOP-RSA2048-SHA256'));
        self::$authorizationReqRegistry->register('enterpriseAutoPaymentOrder', AuthorizationReqSupport::getAuthorizationReq('YOP-RSA2048-SHA256'));
        self::$authorizationReqRegistry->register('enterpriseAutoPaymentQuery', AuthorizationReqSupport::getAuthorizationReq('YOP-RSA2048-SHA256'));
        self::$authorizationReqRegistry->register('enterpriseWithholdingOrder', AuthorizationReqSupport::getAuthorizationReq('YOP-RSA2048-SHA256'));
        self::$authorizationReqRegistry->register('payBatchOrder', AuthorizationReqSupport::getAuthorizationReq('YOP-RSA2048-SHA256'));
        self::$authorizationReqRegistry->register('payBatchQuery', AuthorizationReqSupport::getAuthorizationReq('YOP-RSA2048-SHA256'));
        self::$authorizationReqRegistry->register('payCancel', AuthorizationReqSupport::getAuthorizationReq('YOP-RSA2048-SHA256'));
        self::$authorizationReqRegistry->register('payOrder', AuthorizationReqSupport::getAuthorizationReq('YOP-RSA2048-SHA256'));
        self::$authorizationReqRegistry->register('payQuery', AuthorizationReqSupport::getAuthorizationReq('YOP-RSA2048-SHA256'));
        self::$authorizationReqRegistry->register('receiptGet', AuthorizationReqSupport::getAuthorizationReq('YOP-RSA2048-SHA256'));
        self::$authorizationReqRegistry->register('rechargeBatchQuery', AuthorizationReqSupport::getAuthorizationReq('YOP-RSA2048-SHA256'));
        self::$authorizationReqRegistry->register('rechargeOnlinebankOrder', AuthorizationReqSupport::getAuthorizationReq('YOP-RSA2048-SHA256'));
        self::$authorizationReqRegistry->register('rechargeOrder', AuthorizationReqSupport::getAuthorizationReq('YOP-RSA2048-SHA256'));
        self::$authorizationReqRegistry->register('rechargeQuery', AuthorizationReqSupport::getAuthorizationReq('YOP-RSA2048-SHA256'));
        self::$authorizationReqRegistry->register('supplierApply', AuthorizationReqSupport::getAuthorizationReq('YOP-RSA2048-SHA256'));
        self::$authorizationReqRegistry->register('supplierPayOrder', AuthorizationReqSupport::getAuthorizationReq('YOP-RSA2048-SHA256'));
        self::$authorizationReqRegistry->register('supplierQuery', AuthorizationReqSupport::getAuthorizationReq('YOP-RSA2048-SHA256'));
        self::$authorizationReqRegistry->register('supplierQueryProgress', AuthorizationReqSupport::getAuthorizationReq('YOP-RSA2048-SHA256'));
        self::$authorizationReqRegistry->register('transferB2bOrder', AuthorizationReqSupport::getAuthorizationReq('YOP-RSA2048-SHA256'));
        self::$authorizationReqRegistry->register('transferB2bQuery', AuthorizationReqSupport::getAuthorizationReq('YOP-RSA2048-SHA256'));
        self::$authorizationReqRegistry->register('withdrawCardBind', AuthorizationReqSupport::getAuthorizationReq('YOP-RSA2048-SHA256'));
        self::$authorizationReqRegistry->register('withdrawCardModify', AuthorizationReqSupport::getAuthorizationReq('YOP-RSA2048-SHA256'));
        self::$authorizationReqRegistry->register('withdrawCardQuery', AuthorizationReqSupport::getAuthorizationReq('YOP-RSA2048-SHA256'));
        self::$authorizationReqRegistry->register('withdrawOrder', AuthorizationReqSupport::getAuthorizationReq('YOP-RSA2048-SHA256'));
        self::$authorizationReqRegistry->register('withdrawQuery', AuthorizationReqSupport::getAuthorizationReq('YOP-RSA2048-SHA256'));
    }

    /**
     * @var ClientParams
     */
    private $clientParams;

    /**
     * AccountClientBuilder constructor.
     * @param ClientParams $clientParams
     */
    public function __construct(ClientParams $clientParams)
    {
        $this->clientParams = $clientParams;
    }

    public function build()
    {
        return new AccountClient($this->clientParams);
    }

    /**
     * @param $config AppSdkConfig|array|AppSdkConfigProvider
     * @return AccountClientBuilder
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
        return new AccountClientBuilder($clientParams);
    }

}
AccountClientBuilder::__init();
