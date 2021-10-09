# Yeepay\Yop\Sdk\Facepay

All URIs are relative to *http://localhost:8080*

Method | HTTP request | Description
------------- | ------------- | -------------
[**facepayProxyBindConfirmSms**](Facepay.md#facepayProxyBindConfirmSms) | **POST** /rest/v1.0/facepay/facepay-proxy/bind-confirm-sms | 绑卡确认短信
[**facepayProxyBindFirstCard**](Facepay.md#facepayProxyBindFirstCard) | **POST** /rest/v1.0/facepay/facepay-proxy/bind-first-card | 首次绑卡
[**facepayProxyBindSendSms**](Facepay.md#facepayProxyBindSendSms) | **POST** /rest/v1.0/facepay/facepay-proxy/bind-send-sms | 绑卡发送短验
[**facepayProxyCertificateNoAuth**](Facepay.md#facepayProxyCertificateNoAuth) | **POST** /rest/v1.0/facepay/facepay-proxy/certificate-no-auth | 身份认证验证
[**facepayProxyCheckLogonSmscode**](Facepay.md#facepayProxyCheckLogonSmscode) | **POST** /rest/v1.0/facepay/facepay-proxy/check-logon-smscode | 检查登录短信验证
[**facepayProxyConfirmFirstCardSmscode**](Facepay.md#facepayProxyConfirmFirstCardSmscode) | **POST** /rest/v1.0/facepay/facepay-proxy/confirm-first-card-smscode | 第一张卡确认短验
[**facepayProxyConfirmVerifySmscode**](Facepay.md#facepayProxyConfirmVerifySmscode) | **POST** /rest/v1.0/facepay/facepay-proxy/confirm-verify-smscode | 确认验证短验
[**facepayProxyCreateBindCard**](Facepay.md#facepayProxyCreateBindCard) | **POST** /rest/v1.0/facepay/facepay-proxy/create-bind-card | 创建绑卡记录
[**facepayProxyCreateOrder**](Facepay.md#facepayProxyCreateOrder) | **POST** /rest/v1.0/facepay/facepay-proxy/create-order | 创建订单
[**facepayProxyFaceLogon**](Facepay.md#facepayProxyFaceLogon) | **POST** /rest/v1.0/facepay/facepay-proxy/face-logon | 人脸登录
[**facepayProxyOpenFaceAccount**](Facepay.md#facepayProxyOpenFaceAccount) | **POST** /rest/v1.0/facepay/facepay-proxy/open-face-account | 开通人脸账号
[**facepayProxyPaySendSms**](Facepay.md#facepayProxyPaySendSms) | **POST** /rest/v1.0/facepay/facepay-proxy/pay-send-sms | 支付发送短验
[**facepayProxyQueryBindCardInfo**](Facepay.md#facepayProxyQueryBindCardInfo) | **POST** /rest/v1.0/facepay/facepay-proxy/query-bind-card-info | 检查卡bin
[**facepayProxyQueryOrderAfter**](Facepay.md#facepayProxyQueryOrderAfter) | **POST** /rest/v1.0/facepay/facepay-proxy/query-order-after | 后查订单
[**facepayProxyQueryOrderBefore**](Facepay.md#facepayProxyQueryOrderBefore) | **POST** /rest/v1.0/facepay/facepay-proxy/query-order-before | 查询订单
[**facepayProxySendFirstCardSmscode**](Facepay.md#facepayProxySendFirstCardSmscode) | **POST** /rest/v1.0/facepay/facepay-proxy/send-first-card-smscode | 第一张绑卡发送短验
[**facepayProxySendLogonSmscode**](Facepay.md#facepayProxySendLogonSmscode) | **POST** /rest/v1.0/facepay/facepay-proxy/send-logon-smscode | 发送登录短信验证
[**facepayProxySendVerifySmscode**](Facepay.md#facepayProxySendVerifySmscode) | **POST** /rest/v1.0/facepay/facepay-proxy/send-verify-smscode | 发送验证短验
[**facepayProxyVerifyUserInfo**](Facepay.md#facepayProxyVerifyUserInfo) | **POST** /rest/v1.0/facepay/facepay-proxy/verify-user-info | 验证用户基本信息
[**oAuth2TokenGenerateToken**](Facepay.md#oAuth2TokenGenerateToken) | **POST** /rest/v1.0/facepay/o-auth2-token/generate-token | 生成token
[**sosDeleteBindNo**](Facepay.md#sosDeleteBindNo) | **POST** /rest/v1.0/facepay/sos/delete-bind-no | 删除绑卡编号


# **facepayProxyBindConfirmSms**
FacepayProxyBindConfirmSmsResponse facepayProxyBindConfirmSms(FacepayProxyBindConfirmSmsRequest request)

绑卡确认短信

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Facepay\FacepayClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Facepay\Model\FacepayProxyBindConfirmSmsRequest();
$request->setBindBizNo("bindBizNo_example");
$request->setSmsCode("smsCode_example");
$request->setBizNo("bizNo_example");
$request->setBizToken("bizToken_example");
$request->setBizSystem("bizSystem_example");
$request->setMtToken("mtToken_example");
$request->setMemberNo("memberNo_example");

try {
    $response = $api_client->facepayProxyBindConfirmSms($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling FacepayClient->facepayProxyBindConfirmSms: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **bindBizNo** | **string**|  | [optional]
 **smsCode** | **string**|  | [optional]
 **bizNo** | **string**|  | [optional]
 **bizToken** | **string**|  | [optional]
 **bizSystem** | **string**|  | [optional]
 **mtToken** | **string**|  | [optional]
 **memberNo** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Facepay\Model\FacepayProxyBindConfirmSmsBindCardResponseResult**](../Model/FacepayProxyBindConfirmSmsBindCardResponseResult.md)
### Authorization

YOP-OAUTH2


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **facepayProxyBindFirstCard**
FacepayProxyBindFirstCardResponse facepayProxyBindFirstCard(FacepayProxyBindFirstCardRequest request)

首次绑卡

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Facepay\FacepayClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Facepay\Model\FacepayProxyBindFirstCardRequest();
$request->setBankCardNo("bankCardNo_example");
$request->setPhoneNumber("phoneNumber_example");
$request->setCvv2("cvv2_example");
$request->setExpireDate("expireDate_example");
$request->setBizNo("bizNo_example");
$request->setBizToken("bizToken_example");
$request->setBizSystem("bizSystem_example");
$request->setMtToken("mtToken_example");
$request->setMemberNo("memberNo_example");

try {
    $response = $api_client->facepayProxyBindFirstCard($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling FacepayClient->facepayProxyBindFirstCard: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **bankCardNo** | **string**|  | [optional]
 **phoneNumber** | **string**|  | [optional]
 **cvv2** | **string**|  | [optional]
 **expireDate** | **string**|  | [optional]
 **bizNo** | **string**|  | [optional]
 **bizToken** | **string**|  | [optional]
 **bizSystem** | **string**|  | [optional]
 **mtToken** | **string**|  | [optional]
 **memberNo** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Facepay\Model\FacepayProxyBindFirstCardBindCardResponseResult**](../Model/FacepayProxyBindFirstCardBindCardResponseResult.md)
### Authorization

YOP-OAUTH2


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **facepayProxyBindSendSms**
FacepayProxyBindSendSmsResponse facepayProxyBindSendSms(FacepayProxyBindSendSmsRequest request)

绑卡发送短验

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Facepay\FacepayClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Facepay\Model\FacepayProxyBindSendSmsRequest();
$request->setBindBizNo("bindBizNo_example");
$request->setBizNo("bizNo_example");
$request->setBizToken("bizToken_example");
$request->setBizSystem("bizSystem_example");
$request->setMtToken("mtToken_example");
$request->setMemberNo("memberNo_example");

try {
    $response = $api_client->facepayProxyBindSendSms($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling FacepayClient->facepayProxyBindSendSms: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **bindBizNo** | **string**|  | [optional]
 **bizNo** | **string**|  | [optional]
 **bizToken** | **string**|  | [optional]
 **bizSystem** | **string**|  | [optional]
 **mtToken** | **string**|  | [optional]
 **memberNo** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Facepay\Model\FacepayProxyBindSendSmsBindCardResponseResult**](../Model/FacepayProxyBindSendSmsBindCardResponseResult.md)
### Authorization

YOP-OAUTH2


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **facepayProxyCertificateNoAuth**
FacepayProxyCertificateNoAuthResponse facepayProxyCertificateNoAuth(FacepayProxyCertificateNoAuthRequest request)

身份认证验证

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Facepay\FacepayClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Facepay\Model\FacepayProxyCertificateNoAuthRequest();
$request->setOrderToken("orderToken_example");
$request->setFaceRequestNo("faceRequestNo_example");
$request->setCertificateNoLastN("certificateNoLastN_example");
$request->setBizSystem("bizSystem_example");
$request->setMtToken("mtToken_example");
$request->setMemberNo("memberNo_example");

try {
    $response = $api_client->facepayProxyCertificateNoAuth($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling FacepayClient->facepayProxyCertificateNoAuth: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **orderToken** | **string**|  | [optional]
 **faceRequestNo** | **string**|  | [optional]
 **certificateNoLastN** | **string**|  | [optional]
 **bizSystem** | **string**|  | [optional]
 **mtToken** | **string**|  | [optional]
 **memberNo** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Facepay\Model\FacepayProxyCertificateNoAuthFaceLogonResponseResult**](../Model/FacepayProxyCertificateNoAuthFaceLogonResponseResult.md)
### Authorization

YOP-OAUTH2


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **facepayProxyCheckLogonSmscode**
FacepayProxyCheckLogonSmscodeResponse facepayProxyCheckLogonSmscode(FacepayProxyCheckLogonSmscodeRequest request)

检查登录短信验证

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Facepay\FacepayClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Facepay\Model\FacepayProxyCheckLogonSmscodeRequest();
$request->setOrderToken("orderToken_example");
$request->setFaceRequestNo("faceRequestNo_example");
$request->setSmsCode("smsCode_example");
$request->setBizSystem("bizSystem_example");
$request->setMtToken("mtToken_example");
$request->setMemberNo("memberNo_example");

try {
    $response = $api_client->facepayProxyCheckLogonSmscode($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling FacepayClient->facepayProxyCheckLogonSmscode: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **orderToken** | **string**|  | [optional]
 **faceRequestNo** | **string**|  | [optional]
 **smsCode** | **string**|  | [optional]
 **bizSystem** | **string**|  | [optional]
 **mtToken** | **string**|  | [optional]
 **memberNo** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Facepay\Model\FacepayProxyCheckLogonSmscodeBaseUserResponseResult**](../Model/FacepayProxyCheckLogonSmscodeBaseUserResponseResult.md)
### Authorization

YOP-OAUTH2


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **facepayProxyConfirmFirstCardSmscode**
FacepayProxyConfirmFirstCardSmscodeResponse facepayProxyConfirmFirstCardSmscode(FacepayProxyConfirmFirstCardSmscodeRequest request)

第一张卡确认短验

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Facepay\FacepayClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Facepay\Model\FacepayProxyConfirmFirstCardSmscodeRequest();
$request->setBindBizNo("bindBizNo_example");
$request->setSmsCode("smsCode_example");
$request->setBizNo("bizNo_example");
$request->setBizToken("bizToken_example");
$request->setBizSystem("bizSystem_example");
$request->setMtToken("mtToken_example");
$request->setMemberNo("memberNo_example");

try {
    $response = $api_client->facepayProxyConfirmFirstCardSmscode($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling FacepayClient->facepayProxyConfirmFirstCardSmscode: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **bindBizNo** | **string**|  | [optional]
 **smsCode** | **string**|  | [optional]
 **bizNo** | **string**|  | [optional]
 **bizToken** | **string**|  | [optional]
 **bizSystem** | **string**|  | [optional]
 **mtToken** | **string**|  | [optional]
 **memberNo** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Facepay\Model\FacepayProxyConfirmFirstCardSmscodeBaseResponseResult**](../Model/FacepayProxyConfirmFirstCardSmscodeBaseResponseResult.md)
### Authorization

YOP-OAUTH2


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **facepayProxyConfirmVerifySmscode**
FacepayProxyConfirmVerifySmscodeResponse facepayProxyConfirmVerifySmscode(FacepayProxyConfirmVerifySmscodeRequest request)

确认验证短验

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Facepay\FacepayClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Facepay\Model\FacepayProxyConfirmVerifySmscodeRequest();
$request->setSmsCode("smsCode_example");
$request->setBizSystem("bizSystem_example");
$request->setMtToken("mtToken_example");
$request->setMemberNo("memberNo_example");

try {
    $response = $api_client->facepayProxyConfirmVerifySmscode($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling FacepayClient->facepayProxyConfirmVerifySmscode: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **smsCode** | **string**|  | [optional]
 **bizSystem** | **string**|  | [optional]
 **mtToken** | **string**|  | [optional]
 **memberNo** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Facepay\Model\FacepayProxyConfirmVerifySmscodeUserInfoResponseResult**](../Model/FacepayProxyConfirmVerifySmscodeUserInfoResponseResult.md)
### Authorization

YOP-OAUTH2


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **facepayProxyCreateBindCard**
FacepayProxyCreateBindCardResponse facepayProxyCreateBindCard(FacepayProxyCreateBindCardRequest request)

创建绑卡记录

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Facepay\FacepayClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Facepay\Model\FacepayProxyCreateBindCardRequest();
$request->setBankCardNo("bankCardNo_example");
$request->setPhoneNumber("phoneNumber_example");
$request->setCvv2("cvv2_example");
$request->setExpireDate("expireDate_example");
$request->setBizNo("bizNo_example");
$request->setBizToken("bizToken_example");
$request->setBizSystem("bizSystem_example");
$request->setMtToken("mtToken_example");
$request->setMemberNo("memberNo_example");

try {
    $response = $api_client->facepayProxyCreateBindCard($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling FacepayClient->facepayProxyCreateBindCard: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **bankCardNo** | **string**|  | [optional]
 **phoneNumber** | **string**|  | [optional]
 **cvv2** | **string**|  | [optional]
 **expireDate** | **string**|  | [optional]
 **bizNo** | **string**|  | [optional]
 **bizToken** | **string**|  | [optional]
 **bizSystem** | **string**|  | [optional]
 **mtToken** | **string**|  | [optional]
 **memberNo** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Facepay\Model\FacepayProxyCreateBindCardBindCardResponseResult**](../Model/FacepayProxyCreateBindCardBindCardResponseResult.md)
### Authorization

YOP-OAUTH2


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **facepayProxyCreateOrder**
FacepayProxyCreateOrderResponse facepayProxyCreateOrder(FacepayProxyCreateOrderRequest request)

创建订单

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Facepay\FacepayClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Facepay\Model\FacepayProxyCreateOrderRequest();
$request->setOrderToken("orderToken_example");
$request->setOrderAmount("orderAmount_example");
$request->setUniquePayNo("uniquePayNo_example");
$request->setBindBizNo("bindBizNo_example");
$request->setExpireDate("expireDate_example");
$request->setCvv2("cvv2_example");
$request->setSmsCode("smsCode_example");
$request->setBizNo("bizNo_example");
$request->setBizToken("bizToken_example");
$request->setBizSystem("bizSystem_example");
$request->setMtToken("mtToken_example");
$request->setMemberNo("memberNo_example");

try {
    $response = $api_client->facepayProxyCreateOrder($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling FacepayClient->facepayProxyCreateOrder: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **orderToken** | **string**|  | [optional]
 **orderAmount** | **string**|  | [optional]
 **uniquePayNo** | **string**|  | [optional]
 **bindBizNo** | **string**|  | [optional]
 **expireDate** | **string**|  | [optional]
 **cvv2** | **string**|  | [optional]
 **smsCode** | **string**|  | [optional]
 **bizNo** | **string**|  | [optional]
 **bizToken** | **string**|  | [optional]
 **bizSystem** | **string**|  | [optional]
 **mtToken** | **string**|  | [optional]
 **memberNo** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Facepay\Model\FacepayProxyCreateOrderPayOrderResponseResult**](../Model/FacepayProxyCreateOrderPayOrderResponseResult.md)
### Authorization

YOP-OAUTH2


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **facepayProxyFaceLogon**
FacepayProxyFaceLogonResponse facepayProxyFaceLogon(FacepayProxyFaceLogonRequest request)

人脸登录

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Facepay\FacepayClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Facepay\Model\FacepayProxyFaceLogonRequest();
$request->setOrderToken("orderToken_example");
$request->setFaceImage("faceImage_example");
$request->setCollectType("collectType_example");
$request->setCollectDevice("collectDevice_example");
$request->setBizSystem("bizSystem_example");
$request->setMtToken("mtToken_example");
$request->setMemberNo("memberNo_example");

try {
    $response = $api_client->facepayProxyFaceLogon($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling FacepayClient->facepayProxyFaceLogon: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **orderToken** | **string**|  | [optional]
 **faceImage** | **string**|  | [optional]
 **collectType** | **string**|  | [optional]
 **collectDevice** | **string**|  | [optional]
 **bizSystem** | **string**|  | [optional]
 **mtToken** | **string**|  | [optional]
 **memberNo** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Facepay\Model\FacepayProxyFaceLogonFaceLogonResponseResult**](../Model/FacepayProxyFaceLogonFaceLogonResponseResult.md)
### Authorization

YOP-OAUTH2


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **facepayProxyOpenFaceAccount**
FacepayProxyOpenFaceAccountResponse facepayProxyOpenFaceAccount(FacepayProxyOpenFaceAccountRequest request)

开通人脸账号

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Facepay\FacepayClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Facepay\Model\FacepayProxyOpenFaceAccountRequest();
$request->setFaceImageFirst("faceImageFirst_example");
$request->setFaceImageSecond("faceImageSecond_example");
$request->setFaceImageThird("faceImageThird_example");
$request->setCollectType("collectType_example");
$request->setCollectDevice("collectDevice_example");
$request->setOrderToken("orderToken_example");
$request->setBizSystem("bizSystem_example");
$request->setMtToken("mtToken_example");
$request->setMemberNo("memberNo_example");

try {
    $response = $api_client->facepayProxyOpenFaceAccount($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling FacepayClient->facepayProxyOpenFaceAccount: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **faceImageFirst** | **string**|  | [optional]
 **faceImageSecond** | **string**|  | [optional]
 **faceImageThird** | **string**|  | [optional]
 **collectType** | **string**|  | [optional]
 **collectDevice** | **string**|  | [optional]
 **orderToken** | **string**|  | [optional]
 **bizSystem** | **string**|  | [optional]
 **mtToken** | **string**|  | [optional]
 **memberNo** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Facepay\Model\FacepayProxyOpenFaceAccountBaseUserResponseResult**](../Model/FacepayProxyOpenFaceAccountBaseUserResponseResult.md)
### Authorization

YOP-OAUTH2


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **facepayProxyPaySendSms**
FacepayProxyPaySendSmsResponse facepayProxyPaySendSms(FacepayProxyPaySendSmsRequest request)

支付发送短验

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Facepay\FacepayClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Facepay\Model\FacepayProxyPaySendSmsRequest();
$request->setUniquePayNo("uniquePayNo_example");
$request->setBindBizNo("bindBizNo_example");
$request->setCvv2("cvv2_example");
$request->setExpireDate("expireDate_example");
$request->setBizNo("bizNo_example");
$request->setBizToken("bizToken_example");
$request->setBizSystem("bizSystem_example");
$request->setMtToken("mtToken_example");
$request->setMemberNo("memberNo_example");

try {
    $response = $api_client->facepayProxyPaySendSms($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling FacepayClient->facepayProxyPaySendSms: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **uniquePayNo** | **string**|  | [optional]
 **bindBizNo** | **string**|  | [optional]
 **cvv2** | **string**|  | [optional]
 **expireDate** | **string**|  | [optional]
 **bizNo** | **string**|  | [optional]
 **bizToken** | **string**|  | [optional]
 **bizSystem** | **string**|  | [optional]
 **mtToken** | **string**|  | [optional]
 **memberNo** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Facepay\Model\FacepayProxyPaySendSmsBaseUserResponseResult**](../Model/FacepayProxyPaySendSmsBaseUserResponseResult.md)
### Authorization

YOP-OAUTH2


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **facepayProxyQueryBindCardInfo**
FacepayProxyQueryBindCardInfoResponse facepayProxyQueryBindCardInfo(FacepayProxyQueryBindCardInfoRequest request)

检查卡bin

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Facepay\FacepayClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Facepay\Model\FacepayProxyQueryBindCardInfoRequest();
$request->setBizNo("bizNo_example");
$request->setBizToken("bizToken_example");
$request->setBizSystem("bizSystem_example");
$request->setMtToken("mtToken_example");
$request->setMemberNo("memberNo_example");

try {
    $response = $api_client->facepayProxyQueryBindCardInfo($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling FacepayClient->facepayProxyQueryBindCardInfo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **bizNo** | **string**|  | [optional]
 **bizToken** | **string**|  | [optional]
 **bizSystem** | **string**|  | [optional]
 **mtToken** | **string**|  | [optional]
 **memberNo** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Facepay\Model\FacepayProxyQueryBindCardInfoBindCardInfoResponseResult**](../Model/FacepayProxyQueryBindCardInfoBindCardInfoResponseResult.md)
### Authorization

YOP-OAUTH2


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **facepayProxyQueryOrderAfter**
FacepayProxyQueryOrderAfterResponse facepayProxyQueryOrderAfter(FacepayProxyQueryOrderAfterRequest request)

后查订单

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Facepay\FacepayClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Facepay\Model\FacepayProxyQueryOrderAfterRequest();
$request->setOrderToken("orderToken_example");
$request->setBizNo("bizNo_example");
$request->setBizToken("bizToken_example");
$request->setBizSystem("bizSystem_example");
$request->setMtToken("mtToken_example");
$request->setMemberNo("memberNo_example");

try {
    $response = $api_client->facepayProxyQueryOrderAfter($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling FacepayClient->facepayProxyQueryOrderAfter: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **orderToken** | **string**|  | [optional]
 **bizNo** | **string**|  | [optional]
 **bizToken** | **string**|  | [optional]
 **bizSystem** | **string**|  | [optional]
 **mtToken** | **string**|  | [optional]
 **memberNo** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Facepay\Model\FacepayProxyQueryOrderAfterOrderAfterResponseResult**](../Model/FacepayProxyQueryOrderAfterOrderAfterResponseResult.md)
### Authorization

YOP-OAUTH2


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **facepayProxyQueryOrderBefore**
FacepayProxyQueryOrderBeforeResponse facepayProxyQueryOrderBefore(FacepayProxyQueryOrderBeforeRequest request)

查询订单

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Facepay\FacepayClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Facepay\Model\FacepayProxyQueryOrderBeforeRequest();
$request->setBody(new \Yeepay\Yop\Sdk\Service\Facepay\Model\FacepayProxyQueryOrderBeforeOrderBeforeRequestParam());

try {
    $response = $api_client->facepayProxyQueryOrderBefore($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling FacepayClient->facepayProxyQueryOrderBefore: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Yeepay\Yop\Sdk\Service\Facepay\Model\FacepayProxyQueryOrderBeforeOrderBeforeRequestParam**](../Model/FacepayProxyQueryOrderBeforeOrderBeforeRequestParam.md)|  |

### Return type
[**\Yeepay\Yop\Sdk\Service\Facepay\Model\FacepayProxyQueryOrderBeforeOrderBeforeResponseResult**](../Model/FacepayProxyQueryOrderBeforeOrderBeforeResponseResult.md)
### Authorization

YOP-OAUTH2


### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

# **facepayProxySendFirstCardSmscode**
FacepayProxySendFirstCardSmscodeResponse facepayProxySendFirstCardSmscode(FacepayProxySendFirstCardSmscodeRequest request)

第一张绑卡发送短验

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Facepay\FacepayClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Facepay\Model\FacepayProxySendFirstCardSmscodeRequest();
$request->setBindBizNo("bindBizNo_example");
$request->setBizNo("bizNo_example");
$request->setBizToken("bizToken_example");
$request->setBizSystem("bizSystem_example");
$request->setMtToken("mtToken_example");
$request->setMemberNo("memberNo_example");

try {
    $response = $api_client->facepayProxySendFirstCardSmscode($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling FacepayClient->facepayProxySendFirstCardSmscode: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **bindBizNo** | **string**|  | [optional]
 **bizNo** | **string**|  | [optional]
 **bizToken** | **string**|  | [optional]
 **bizSystem** | **string**|  | [optional]
 **mtToken** | **string**|  | [optional]
 **memberNo** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Facepay\Model\FacepayProxySendFirstCardSmscodeBaseResponseResult**](../Model/FacepayProxySendFirstCardSmscodeBaseResponseResult.md)
### Authorization

YOP-OAUTH2


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **facepayProxySendLogonSmscode**
FacepayProxySendLogonSmscodeResponse facepayProxySendLogonSmscode(FacepayProxySendLogonSmscodeRequest request)

发送登录短信验证

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Facepay\FacepayClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Facepay\Model\FacepayProxySendLogonSmscodeRequest();
$request->setBizNo("bizNo_example");
$request->setBizToken("bizToken_example");
$request->setBizSystem("bizSystem_example");
$request->setMtToken("mtToken_example");
$request->setMemberNo("memberNo_example");

try {
    $response = $api_client->facepayProxySendLogonSmscode($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling FacepayClient->facepayProxySendLogonSmscode: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **bizNo** | **string**|  | [optional]
 **bizToken** | **string**|  | [optional]
 **bizSystem** | **string**|  | [optional]
 **mtToken** | **string**|  | [optional]
 **memberNo** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Facepay\Model\FacepayProxySendLogonSmscodeBaseResponseResult**](../Model/FacepayProxySendLogonSmscodeBaseResponseResult.md)
### Authorization

YOP-OAUTH2


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **facepayProxySendVerifySmscode**
FacepayProxySendVerifySmscodeResponse facepayProxySendVerifySmscode(FacepayProxySendVerifySmscodeRequest request)

发送验证短验

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Facepay\FacepayClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Facepay\Model\FacepayProxySendVerifySmscodeRequest();
$request->setBizNo("bizNo_example");
$request->setBizToken("bizToken_example");
$request->setBizSystem("bizSystem_example");
$request->setMtToken("mtToken_example");
$request->setMemberNo("memberNo_example");

try {
    $response = $api_client->facepayProxySendVerifySmscode($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling FacepayClient->facepayProxySendVerifySmscode: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **bizNo** | **string**|  | [optional]
 **bizToken** | **string**|  | [optional]
 **bizSystem** | **string**|  | [optional]
 **mtToken** | **string**|  | [optional]
 **memberNo** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Facepay\Model\FacepayProxySendVerifySmscodeBaseResponseResult**](../Model/FacepayProxySendVerifySmscodeBaseResponseResult.md)
### Authorization

YOP-OAUTH2


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **facepayProxyVerifyUserInfo**
FacepayProxyVerifyUserInfoResponse facepayProxyVerifyUserInfo(FacepayProxyVerifyUserInfoRequest request)

验证用户基本信息

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Facepay\FacepayClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Facepay\Model\FacepayProxyVerifyUserInfoRequest();
$request->setName("name_example");
$request->setCertificateNo("certificateNo_example");
$request->setBizSystem("bizSystem_example");
$request->setMtToken("mtToken_example");
$request->setMemberNo("memberNo_example");

try {
    $response = $api_client->facepayProxyVerifyUserInfo($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling FacepayClient->facepayProxyVerifyUserInfo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**|  | [optional]
 **certificateNo** | **string**|  | [optional]
 **bizSystem** | **string**|  | [optional]
 **mtToken** | **string**|  | [optional]
 **memberNo** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Facepay\Model\FacepayProxyVerifyUserInfoUserInfoResponseResult**](../Model/FacepayProxyVerifyUserInfoUserInfoResponseResult.md)
### Authorization

YOP-OAUTH2


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **oAuth2TokenGenerateToken**
OAuth2TokenGenerateTokenResponse oAuth2TokenGenerateToken(OAuth2TokenGenerateTokenRequest request)

生成token

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Facepay\FacepayClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Facepay\Model\OAuth2TokenGenerateTokenRequest();
$request->setUserId("userId_example");

try {
    $response = $api_client->oAuth2TokenGenerateToken($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling FacepayClient->oAuth2TokenGenerateToken: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **userId** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Facepay\Model\OAuth2TokenGenerateTokenOAuth2TokenResponseResult**](../Model/OAuth2TokenGenerateTokenOAuth2TokenResponseResult.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **sosDeleteBindNo**
SosDeleteBindNoResponse sosDeleteBindNo(SosDeleteBindNoRequest request)

删除绑卡编号

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Facepay\FacepayClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Facepay\Model\SosDeleteBindNoRequest();
$request->setString0("string0_example");
$request->setString1("string1_example");

try {
    $response = $api_client->sosDeleteBindNo($request);
}catch (\Exception $e) {
    echo 'Exception when calling FacepayClient->sosDeleteBindNo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **string0** | **string**|  | [optional]
 **string1** | **string**|  | [optional]

### Return type
void (empty response body)
### Authorization

YOP-OAUTH2


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: Not defined

