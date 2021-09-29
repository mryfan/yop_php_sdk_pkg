# Yeepay\Yop\Sdk\Nccashierapi

All URIs are relative to *http://localhost:8080*

Method | HTTP request | Description
------------- | ------------- | -------------
[**apiPay**](Nccashierapi.md#apiPay) | **POST** /rest/v1.0/nccashierapi/api/pay | 聚合API收银台


# **apiPay**
ApiPayResponse apiPay(ApiPayRequest request)

聚合API收银台

<p>API收银台统一支付接口，支持主扫支付(微信/支付宝/京东)、被扫支付(微信/支付宝/京东)、微信公众号、小程序支付、微信SDK支付</p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Nccashierapi\NccashierapiClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Nccashierapi\Model\ApiPayRequest();
$request->setPayTool("SCCANPAY");
$request->setPayType("WECHAT");
$request->setToken("token_example");
$request->setAppId("appId_example");
$request->setOpenId("openId_example");
$request->setVersion("1.0");
$request->setPayEmpowerNo("payEmpowerNo_example");
$request->setMerchantTerminalId("merchantTerminalId_example");
$request->setMerchantStoreNo("merchantStoreNo_example");
$request->setUserIp("userIp_example");
$request->setExtParamMap("{\"reportFee\":\"XIANXIA\"}");
$request->setUserNo("userNo_example");
$request->setUserType("userType_example");

try {
    $response = $api_client->apiPay($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling NccashierapiClient->apiPay: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **payTool** | **string**|  | [optional]
 **payType** | **string**|  | [optional]
 **token** | **string**|  | [optional]
 **appId** | **string**|  | [optional]
 **openId** | **string**|  | [optional]
 **version** | **string**|  | [optional]
 **payEmpowerNo** | **string**|  | [optional]
 **merchantTerminalId** | **string**|  | [optional]
 **merchantStoreNo** | **string**|  | [optional]
 **userIp** | **string**|  | [optional]
 **extParamMap** | **string**|  | [optional]
 **userNo** | **string**|  | [optional]
 **userType** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Nccashierapi\Model\ApiPayUnifiedAPICashierResponseDTOResult**](../Model/ApiPayUnifiedAPICashierResponseDTOResult.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

