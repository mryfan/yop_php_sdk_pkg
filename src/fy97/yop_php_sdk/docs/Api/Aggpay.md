# Yeepay\Yop\Sdk\Aggpay

All URIs are relative to *http://localhost:8080*

Method | HTTP request | Description
------------- | ------------- | -------------
[**pay**](Aggpay.md#pay) | **POST** /rest/v1.0/aggpay/pay | 付款码支付
[**prePay**](Aggpay.md#prePay) | **POST** /rest/v1.0/aggpay/pre-pay | 聚合支付统一下单
[**violationWechatChannel**](Aggpay.md#violationWechatChannel) | **GET** /rest/v1.0/aggpay/violation/wechat/channel | 微信违规查询接口(服务商/平台商版)
[**wechatConfigAdd**](Aggpay.md#wechatConfigAdd) | **POST** /rest/v1.0/aggpay/wechat-config/add | 公众号配置接口
[**wechatConfigAdd_0**](Aggpay.md#wechatConfigAdd_0) | **POST** /rest/v2.0/aggpay/wechat-config/add | 公众号配置接口
[**wechatConfigQuery**](Aggpay.md#wechatConfigQuery) | **GET** /rest/v1.0/aggpay/wechat-config/query | 公众号配置查询
[**wechatConfigQuery_0**](Aggpay.md#wechatConfigQuery_0) | **GET** /rest/v2.0/aggpay/wechat-config/query | 公众号配置查询


# **pay**
PayResponse pay(PayRequest request)

付款码支付

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Aggpay\AggpayClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Aggpay\Model\PayRequest();
$request->setParentMerchantNo("10040012345");
$request->setMerchantNo("10040054321");
$request->setOrderId("orderId12345");
$request->setOrderAmount(0.01);
$request->setExpiredTime("2021-09-13 19:24:33");
$request->setNotifyUrl("https://notify.merchant.com/xxx");
$request->setMemo("memo_example");
$request->setGoodsName("旺仔牛奶");
$request->setFundProcessType("REAL_TIME");
$request->setPayWay("MERCHANT_SCAN");
$request->setChannel("WECHAT");
$request->setScene("OFFLINE");
$request->setAuthCode("authCode123");
$request->setAppId("appId12345");
$request->setUserIp("123.123.123.123");
$request->setTerminalId("00000000");
$request->setTerminalSceneInfo("{\"storeId\":\"门店id\",\"storeName\":\"门店名称\",\"operatorId\":\"商户操作员编号\",\"alipayStoreId\":\"支付宝的店铺编号\",\"areaCode\":\"门店行政区划码\",\"address\":\"门店详细地址\"}");
$request->setChannelSpecifiedInfo("{\"hbFqNum\":\"3\",\"hbFqSellerPercent\":\"0\",\"sysServiceProviderId\":\"\"}");
$request->setChannelPromotionInfo("channelPromotionInfo_example");
$request->setIdentityInfo("{\"identityVerifyType\":\"Y\",\"payerIdType\":\"IDENTITY_CARD\",\"payerNumber\":\"234512198006252456\",\"payerName\":\"名字\",\"payerPhone\":\"15798765432\"}");
$request->setLimitCredit("N");
$request->setToken("83BCDF29CFACB4411533080B67864EF8C907CCDC5E10A707C285FEA10CDB8221");
$request->setUniqueOrderNo("1012202101070000001989946571");
$request->setCsUrl("csUrl_example");
$request->setEncryptedPINData("encryptedPINData_example");
$request->setPayerAccountNo("payerAccountNo_example");
$request->setAccountLinkInfo("{accountProvider\":\"BOL\",\"token\":\"xxx\"}");

try {
    $response = $api_client->pay($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling AggpayClient->pay: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **parentMerchantNo** | **string**|  | [optional]
 **merchantNo** | **string**|  | [optional]
 **orderId** | **string**|  | [optional]
 **orderAmount** | **float**|  | [optional]
 **expiredTime** | **string**|  | [optional]
 **notifyUrl** | **string**|  | [optional]
 **memo** | **string**|  | [optional]
 **goodsName** | **string**|  | [optional]
 **fundProcessType** | **string**|  | [optional]
 **payWay** | **string**|  | [optional]
 **channel** | **string**|  | [optional]
 **scene** | **string**|  | [optional]
 **authCode** | **string**|  | [optional]
 **appId** | **string**|  | [optional]
 **userIp** | **string**|  | [optional]
 **terminalId** | **string**|  | [optional]
 **terminalSceneInfo** | **string**|  | [optional]
 **channelSpecifiedInfo** | **string**|  | [optional]
 **channelPromotionInfo** | **string**|  | [optional]
 **identityInfo** | **string**|  | [optional]
 **limitCredit** | **string**|  | [optional]
 **token** | **string**|  | [optional]
 **uniqueOrderNo** | **string**|  | [optional]
 **csUrl** | **string**|  | [optional]
 **encryptedPINData** | **string**|  | [optional]
 **payerAccountNo** | **string**|  | [optional]
 **accountLinkInfo** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Aggpay\Model\PayPassiveOrderResponseDTOResult**](../Model/PayPassiveOrderResponseDTOResult.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **prePay**
PrePayResponse prePay(PrePayRequest request)

聚合支付统一下单

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Aggpay\AggpayClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Aggpay\Model\PrePayRequest();
$request->setParentMerchantNo("10040012345");
$request->setMerchantNo("10040054321");
$request->setOrderId("orderId12345");
$request->setOrderAmount(0.01);
$request->setExpiredTime("2021-09-13 19:24:33");
$request->setNotifyUrl("https://notify.merchant.com/xxx");
$request->setRedirectUrl("https://notify.merchant.com/xxx");
$request->setMemo("memo_example");
$request->setGoodsName("旺仔牛奶");
$request->setFundProcessType("REAL_TIME");
$request->setPayWay("USER_SCAN");
$request->setChannel("ALIPAY");
$request->setScene("OFFLINE");
$request->setAppId("appId12345");
$request->setUserId("userId12345");
$request->setUserIp("123.123.123.123");
$request->setChannelSpecifiedInfo("{\"hbFqNum\":\"3\",\"hbFqSellerPercent\":\"0\",\"sysServiceProviderId\":\"\"}");
$request->setChannelPromotionInfo("channelPromotionInfo_example");
$request->setIdentityInfo("{\"identityVerifyType\":\"Y\",\"payerIdType\":\"IDENTITY_CARD\",\"payerNumber\":\"234512198006252456\",\"payerName\":\"名字\",\"payerPhone\":\"15798765432\"}");
$request->setLimitCredit("N");
$request->setToken("83BCDF29CFACB4411533080B67864EF8C907CCDC5E10A707C285FEA10CDB8221");
$request->setUniqueOrderNo("1012202101070000001989946571");
$request->setCsUrl("csUrl_example");
$request->setAccountLinkInfo("{accountProvider\":\"BOL\",\"token\":\"xxx\"}");
$request->setYpPromotionInfo("[{\"amount\":\"0.01\",\"type\":\"CUSTOM_REDUCTION\"}]");

try {
    $response = $api_client->prePay($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling AggpayClient->prePay: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **parentMerchantNo** | **string**|  | [optional]
 **merchantNo** | **string**|  | [optional]
 **orderId** | **string**|  | [optional]
 **orderAmount** | **float**|  | [optional]
 **expiredTime** | **string**|  | [optional]
 **notifyUrl** | **string**|  | [optional]
 **redirectUrl** | **string**|  | [optional]
 **memo** | **string**|  | [optional]
 **goodsName** | **string**|  | [optional]
 **fundProcessType** | **string**|  | [optional]
 **payWay** | **string**|  | [optional]
 **channel** | **string**|  | [optional]
 **scene** | **string**|  | [optional]
 **appId** | **string**|  | [optional]
 **userId** | **string**|  | [optional]
 **userIp** | **string**|  | [optional]
 **channelSpecifiedInfo** | **string**|  | [optional]
 **channelPromotionInfo** | **string**|  | [optional]
 **identityInfo** | **string**|  | [optional]
 **limitCredit** | **string**|  | [optional]
 **token** | **string**|  | [optional]
 **uniqueOrderNo** | **string**|  | [optional]
 **csUrl** | **string**|  | [optional]
 **accountLinkInfo** | **string**|  | [optional]
 **ypPromotionInfo** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Aggpay\Model\PrePayOrderResponseDTOResult**](../Model/PrePayOrderResponseDTOResult.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **violationWechatChannel**
ViolationWechatChannelResponse violationWechatChannel(ViolationWechatChannelRequest request)

微信违规查询接口(服务商/平台商版)

查询商户在微信的违规信息(根据渠道号查询)

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Aggpay\AggpayClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Aggpay\Model\ViolationWechatChannelRequest();
$request->setParentMerchantNo("parentMerchantNo_example");
$request->setBeginTime("2021-09-13 19:24:33");
$request->setEndTime("2021-09-13 19:24:33");

try {
    $response = $api_client->violationWechatChannel($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling AggpayClient->violationWechatChannel: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **parentMerchantNo** | **string**| 服务商/平台商商编 |
 **beginTime** | **string**| 查询的开始时间&lt;br&gt;格式\&quot;yyyy-MM-dd HH:mm:ss\&quot; |
 **endTime** | **string**| 查询的结束时间&lt;br&gt;格式\&quot;yyyy-MM-dd HH:mm:ss\&quot;&lt;br&gt;（开始时间和结束时间间隔不得超过一小时） |

### Return type
[**\Yeepay\Yop\Sdk\Service\Aggpay\Model\ViolationWechatChannelWechatRiskQueryResponseDTOResult**](../Model/ViolationWechatChannelWechatRiskQueryResponseDTOResult.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **wechatConfigAdd**
WechatConfigAddResponse wechatConfigAdd(WechatConfigAddRequest request)

公众号配置接口

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Aggpay\AggpayClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Aggpay\Model\WechatConfigAddRequest();
$request->setBody(new \Yeepay\Yop\Sdk\Service\Aggpay\Model\WechatConfigAddWechatConfigRequestDTOParam());

try {
    $response = $api_client->wechatConfigAdd($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling AggpayClient->wechatConfigAdd: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Yeepay\Yop\Sdk\Service\Aggpay\Model\WechatConfigAddWechatConfigRequestDTOParam**](../Model/WechatConfigAddWechatConfigRequestDTOParam.md)|  |

### Return type
[**\Yeepay\Yop\Sdk\Service\Aggpay\Model\WechatConfigAddWechatConfigResponseDTOResult**](../Model/WechatConfigAddWechatConfigResponseDTOResult.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

# **wechatConfigAdd_0**
WechatConfigAdd0Response wechatConfigAdd_0(WechatConfigAdd0Request request)

公众号配置接口

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Aggpay\AggpayClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Aggpay\Model\WechatConfigAdd0Request();
$request->setParentMerchantNo("parentMerchantNo_example");
$request->setMerchantNo("merchantNo_example");
$request->setTradeAuthDirList("[\"http://www.yeepay.com/\",\"http://www.yeepay.com/\"]");
$request->setAppIdList("[{\"appId\":\"appId\",\"appSecret\":\"appSecret\",\"appIdType\":\"OFFICIAL_ACCOUNT\",\"subscribeAppId\":\"subscribeAppId\"},{\"appId\":\"appId\",\"appSecret\":\"appSecret\",\"appIdType\":\"MINI_PROGRAM\",\"subscribeAppId\":\"subscribeAppId\"}]");

try {
    $response = $api_client->wechatConfigAdd_0($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling AggpayClient->wechatConfigAdd_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **parentMerchantNo** | **string**|  | [optional]
 **merchantNo** | **string**|  | [optional]
 **tradeAuthDirList** | **string**|  | [optional]
 **appIdList** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Aggpay\Model\WechatConfigAddWechatConfigFlatResponseDTOResult**](../Model/WechatConfigAddWechatConfigFlatResponseDTOResult.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **wechatConfigQuery**
WechatConfigQueryResponse wechatConfigQuery(WechatConfigQueryRequest request)

公众号配置查询

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Aggpay\AggpayClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Aggpay\Model\WechatConfigQueryRequest();
$request->setParentMerchantNo("parentMerchantNo_example");
$request->setMerchantNo("merchantNo_example");
$request->setAppIdType("appIdType_example");

try {
    $response = $api_client->wechatConfigQuery($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling AggpayClient->wechatConfigQuery: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **parentMerchantNo** | **string**|  |
 **merchantNo** | **string**|  |
 **appIdType** | **string**| OFFICIAL_ACCOUNT:公众号&lt;br&gt;MINI_PROGRAM:小程序 | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Aggpay\Model\WechatConfigQueryWechatConfigResponseDTOResult**](../Model/WechatConfigQueryWechatConfigResponseDTOResult.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **wechatConfigQuery_0**
WechatConfigQuery0Response wechatConfigQuery_0(WechatConfigQuery0Request request)

公众号配置查询

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Aggpay\AggpayClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Aggpay\Model\WechatConfigQuery0Request();
$request->setParentMerchantNo("parentMerchantNo_example");
$request->setMerchantNo("merchantNo_example");
$request->setAppIdType("appIdType_example");

try {
    $response = $api_client->wechatConfigQuery_0($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling AggpayClient->wechatConfigQuery_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **parentMerchantNo** | **string**|  |
 **merchantNo** | **string**|  |
 **appIdType** | **string**| appId类型&lt;br&gt;OFFICIAL_ACCOUNT:公众号&lt;br&gt;MINI_PROGRAM:小程序 | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Aggpay\Model\WechatConfigQueryWechatConfigFlatResponseDTOResult**](../Model/WechatConfigQueryWechatConfigFlatResponseDTOResult.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

