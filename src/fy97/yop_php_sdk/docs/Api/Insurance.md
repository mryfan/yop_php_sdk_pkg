# Yeepay\Yop\Sdk\Insurance

All URIs are relative to *http://localhost:8080*

Method | HTTP request | Description
------------- | ------------- | -------------
[**realnameAuth**](Insurance.md#realnameAuth) | **POST** /rest/v1.0/insurance/realname/auth | 实名缴费认证
[**realnameNotify**](Insurance.md#realnameNotify) | **POST** /rest/v1.0/insurance/realname/notify | 交易通知


# **realnameAuth**
RealnameAuthResponse realnameAuth(RealnameAuthRequest request)

实名缴费认证

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Insurance\InsuranceClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Insurance\Model\RealnameAuthRequest();
$request->setBody(new \Yeepay\Yop\Sdk\Service\Insurance\Model\RealnameAuthCommonInsurRequestDTOParam());

try {
    $response = $api_client->realnameAuth($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling InsuranceClient->realnameAuth: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Yeepay\Yop\Sdk\Service\Insurance\Model\RealnameAuthCommonInsurRequestDTOParam**](../Model/RealnameAuthCommonInsurRequestDTOParam.md)|  |

### Return type
[**\Yeepay\Yop\Sdk\Service\Insurance\Model\RealnameAuthCommonInsurResponseDTOResult**](../Model/RealnameAuthCommonInsurResponseDTOResult.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

# **realnameNotify**
RealnameNotifyResponse realnameNotify(RealnameNotifyRequest request)

交易通知

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Insurance\InsuranceClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Insurance\Model\RealnameNotifyRequest();
$request->setRequestNo("requestNo_example");
$request->setQueryNo("queryNo_example");
$request->setCustomrNo("customrNo_example");
$request->setCode("code_example");
$request->setAmount("amount_example");
$request->setCardNo("cardNo_example");
$request->setTradeNo("tradeNo_example");
$request->setDate("date_example");
$request->setSystemNo("systemNo_example");
$request->setTerminalNo("terminalNo_example");
$request->setPaNo("paNo_example");
$request->setValidateSequenceNo("validateSequenceNo_example");
$request->setRequestType("requestType_example");
$request->setWarrantBank("warrantBank_example");
$request->setAesKey("aesKey_example");
$request->setUser("user_example");
$request->setPassword("password_example");
$request->setProdId("prodId_example");
$request->setReqType("reqType_example");
$request->setSysId("sysId_example");
$request->setRequestUrl("requestUrl_example");
$request->setMacKey("macKey_example");
$request->setEnvironment("environment_example");
$request->setTpdu("tpdu_example");

try {
    $response = $api_client->realnameNotify($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling InsuranceClient->realnameNotify: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **requestNo** | **string**|  | [optional]
 **queryNo** | **string**|  | [optional]
 **customrNo** | **string**|  | [optional]
 **code** | **string**|  | [optional]
 **amount** | **string**|  | [optional]
 **cardNo** | **string**|  | [optional]
 **tradeNo** | **string**|  | [optional]
 **date** | **string**|  | [optional]
 **systemNo** | **string**|  | [optional]
 **terminalNo** | **string**|  | [optional]
 **paNo** | **string**|  | [optional]
 **validateSequenceNo** | **string**|  | [optional]
 **requestType** | **string**|  | [optional]
 **warrantBank** | **string**|  | [optional]
 **aesKey** | **string**|  | [optional]
 **user** | **string**|  | [optional]
 **password** | **string**|  | [optional]
 **prodId** | **string**|  | [optional]
 **reqType** | **string**|  | [optional]
 **sysId** | **string**|  | [optional]
 **requestUrl** | **string**|  | [optional]
 **macKey** | **string**|  | [optional]
 **environment** | **string**|  | [optional]
 **tpdu** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Insurance\Model\RealnameNotifyCommonNoticeResponseDTOResult**](../Model/RealnameNotifyCommonNoticeResponseDTOResult.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

