# Yeepay\Yop\Sdk\Frontcashier

All URIs are relative to *http://localhost:8080*

Method | HTTP request | Description
------------- | ------------- | -------------
[**bankTransferPay**](Frontcashier.md#bankTransferPay) | **POST** /rest/v1.0/frontcashier/bank-transfer/pay | 银行转账支付
[**bankTransferQuery**](Frontcashier.md#bankTransferQuery) | **GET** /rest/v1.0/frontcashier/bank-transfer/query | 银行转账查询
[**bindcardConfirm**](Frontcashier.md#bindcardConfirm) | **POST** /rest/v1.0/frontcashier/bindcard/confirm | 绑卡-短验确认
[**bindcardConfirm_0**](Frontcashier.md#bindcardConfirm_0) | **POST** /rest/v2.0/frontcashier/bindcard/confirm | 中台绑卡-短验确认
[**bindcardGetcardbin**](Frontcashier.md#bindcardGetcardbin) | **POST** /rest/v1.0/frontcashier/bindcard/getcardbin | 银行卡卡bin识别
[**bindcardQueryorder**](Frontcashier.md#bindcardQueryorder) | **POST** /rest/v1.0/frontcashier/bindcard/queryorder | 查询签约/绑卡请求
[**bindcardRequest**](Frontcashier.md#bindcardRequest) | **POST** /rest/v1.0/frontcashier/bindcard/request | 绑卡-绑卡请求
[**bindcardRequest_0**](Frontcashier.md#bindcardRequest_0) | **POST** /rest/v2.0/frontcashier/bindcard/request | 中台绑卡-绑卡请求
[**bindpayConfirm**](Frontcashier.md#bindpayConfirm) | **POST** /rest/v1.0/frontcashier/bindpay/confirm | 绑卡支付-确认支付
[**bindpayRequest**](Frontcashier.md#bindpayRequest) | **POST** /rest/v1.0/frontcashier/bindpay/request | 绑卡支付-支付下单
[**bindpaySendsms**](Frontcashier.md#bindpaySendsms) | **POST** /rest/v1.0/frontcashier/bindpay/sendsms | 绑卡支付-请求发短验
[**getcardbin**](Frontcashier.md#getcardbin) | **POST** /rest/v1.0/frontcashier/getcardbin | 银行卡bin识别
[**yjzfBindpayrequest**](Frontcashier.md#yjzfBindpayrequest) | **POST** /rest/v1.0/frontcashier/yjzf/bindpayrequest | 一键支付-二次支付下单
[**yjzfFirstpayrequest**](Frontcashier.md#yjzfFirstpayrequest) | **POST** /rest/v1.0/frontcashier/yjzf/firstpayrequest | 一键支付-首次支付下单
[**yjzfPaymentconfirm**](Frontcashier.md#yjzfPaymentconfirm) | **POST** /rest/v1.0/frontcashier/yjzf/paymentconfirm | 一键支付-确认支付
[**yjzfSendsms**](Frontcashier.md#yjzfSendsms) | **POST** /rest/v1.0/frontcashier/yjzf/sendsms | 一键支付-请求发验证码


# **bankTransferPay**
BankTransferPayResponse bankTransferPay(BankTransferPayRequest request)

银行转账支付

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Frontcashier\FrontcashierClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Frontcashier\Model\BankTransferPayRequest();
$request->setParentMerchantNo("parentMerchantNo_example");
$request->setMerchantNo("merchantNo_example");
$request->setOrderId("orderId_example");
$request->setOrderAmount(1.2);
$request->setExpiredTime("2021-09-13 19:24:33");
$request->setNotifyUrl("notifyUrl_example");
$request->setMemo("memo_example");
$request->setGoodsName("goodsName_example");
$request->setFundProcessType("fundProcessType_example");
$request->setCsUrl("csUrl_example");

try {
    $response = $api_client->bankTransferPay($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling FrontcashierClient->bankTransferPay: ', $e->getMessage(), PHP_EOL;
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
 **csUrl** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Frontcashier\Model\BankTransferPayAPIOfflineTransferResponseDTOResult**](../Model/BankTransferPayAPIOfflineTransferResponseDTOResult.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **bankTransferQuery**
BankTransferQueryResponse bankTransferQuery(BankTransferQueryRequest request)

银行转账查询

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Frontcashier\FrontcashierClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Frontcashier\Model\BankTransferQueryRequest();
$request->setParentMerchantNo("parentMerchantNo_example");
$request->setMerchantNo("merchantNo_example");
$request->setOrderId("orderId_example");

try {
    $response = $api_client->bankTransferQuery($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling FrontcashierClient->bankTransferQuery: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **parentMerchantNo** | **string**|  |
 **merchantNo** | **string**|  |
 **orderId** | **string**| 商户系统内部生成的订单号，需要保持在同一个商户下唯一 |

### Return type
[**\Yeepay\Yop\Sdk\Service\Frontcashier\Model\BankTransferQueryAPIOfflineTransferQueryResponseDTOResult**](../Model/BankTransferQueryAPIOfflineTransferQueryResponseDTOResult.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **bindcardConfirm**
BindcardConfirmResponse bindcardConfirm(BindcardConfirmRequest request)

绑卡-短验确认

<p>该接口提供鉴权绑卡请求短信验证</p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Frontcashier\FrontcashierClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Frontcashier\Model\BindcardConfirmRequest();
$request->setParentMerchantNo("parentMerchantNo_example");
$request->setMerchantNo("merchantNo_example");
$request->setMerchantFlowId("merchantFlowId_example");
$request->setEmpower(true);
$request->setSmsCode("smsCode_example");

try {
    $response = $api_client->bindcardConfirm($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling FrontcashierClient->bindcardConfirm: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **parentMerchantNo** | **string**|  | [optional]
 **merchantNo** | **string**|  | [optional]
 **merchantFlowId** | **string**|  | [optional]
 **empower** | **bool**|  | [optional]
 **smsCode** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Frontcashier\Model\BindcardConfirmOpenAuthBindCardConfirmResponseDTOResult**](../Model/BindcardConfirmOpenAuthBindCardConfirmResponseDTOResult.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **bindcardConfirm_0**
BindcardConfirm0Response bindcardConfirm_0(BindcardConfirm0Request request)

中台绑卡-短验确认

<p>该接口提供鉴权绑卡请求短信验证</p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Frontcashier\FrontcashierClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Frontcashier\Model\BindcardConfirm0Request();
$request->setParentMerchantNo("parentMerchantNo_example");
$request->setMerchantFlowId("merchantFlowId_example");
$request->setSmsCode("smsCode_example");

try {
    $response = $api_client->bindcardConfirm_0($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling FrontcashierClient->bindcardConfirm_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **parentMerchantNo** | **string**|  | [optional]
 **merchantFlowId** | **string**|  | [optional]
 **smsCode** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Frontcashier\Model\BindcardConfirmOpenAuthBindCardConfirmResponseDTOResult**](../Model/BindcardConfirmOpenAuthBindCardConfirmResponseDTOResult.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **bindcardGetcardbin**
BindcardGetcardbinResponse bindcardGetcardbin(BindcardGetcardbinRequest request)

银行卡卡bin识别

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Frontcashier\FrontcashierClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Frontcashier\Model\BindcardGetcardbinRequest();
$request->setParentMerchantNo("10012426723");
$request->setMerchantNo("10012426723");
$request->setBankCardNo("688888888888");
$request->setCardType("cardType_example");

try {
    $response = $api_client->bindcardGetcardbin($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling FrontcashierClient->bindcardGetcardbin: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **parentMerchantNo** | **string**|  | [optional]
 **merchantNo** | **string**|  | [optional]
 **bankCardNo** | **string**|  | [optional]
 **cardType** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Frontcashier\Model\BindcardGetcardbinOpenQueryCardbinResponseDTOResult**](../Model/BindcardGetcardbinOpenQueryCardbinResponseDTOResult.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **bindcardQueryorder**
BindcardQueryorderResponse bindcardQueryorder(BindcardQueryorderRequest request)

查询签约/绑卡请求

查询签约/绑卡请求

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Frontcashier\FrontcashierClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Frontcashier\Model\BindcardQueryorderRequest();
$request->setMerchantNo("merchantNo_example");
$request->setMerchantFlowId("merchantFlowId_example");
$request->setNopOrderId("nopOrderId_example");
$request->setPhone("phone_example");

try {
    $response = $api_client->bindcardQueryorder($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling FrontcashierClient->bindcardQueryorder: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **merchantNo** | **string**|  | [optional]
 **merchantFlowId** | **string**|  | [optional]
 **nopOrderId** | **string**|  | [optional]
 **phone** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Frontcashier\Model\BindcardQueryorderOpenQueryOrderResponseDTOResult**](../Model/BindcardQueryorderOpenQueryOrderResponseDTOResult.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **bindcardRequest**
BindcardRequestResponse bindcardRequest(BindcardRequestRequest request)

绑卡-绑卡请求

<p>该接口提供绑卡请求,该接口请求成功后需调求短验确认接口完成整个绑卡动作</p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Frontcashier\FrontcashierClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Frontcashier\Model\BindcardRequestRequest();
$request->setParentMerchantNo("parentMerchantNo_example");
$request->setMerchantNo("merchantNo_example");
$request->setMerchantFlowId("merchantFlowId_example");
$request->setUserNo("userNo_example");
$request->setUserType("userType_example");
$request->setBankCardNo("bankCardNo_example");
$request->setUserName("userName_example");
$request->setIdCardNo("idCardNo_example");
$request->setPhone("phone_example");
$request->setCvv2("cvv2_example");
$request->setValidthru("validthru_example");
$request->setRiskParamExt("riskParamExt_example");
$request->setOrderValidate(56);
$request->setAuthType("authType_example");
$request->setEmpower(true);
$request->setCardType("cardType_example");
$request->setIsSMS(true);

try {
    $response = $api_client->bindcardRequest($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling FrontcashierClient->bindcardRequest: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **parentMerchantNo** | **string**|  | [optional]
 **merchantNo** | **string**|  | [optional]
 **merchantFlowId** | **string**|  | [optional]
 **userNo** | **string**|  | [optional]
 **userType** | **string**|  | [optional]
 **bankCardNo** | **string**|  | [optional]
 **userName** | **string**|  | [optional]
 **idCardNo** | **string**|  | [optional]
 **phone** | **string**|  | [optional]
 **cvv2** | **string**|  | [optional]
 **validthru** | **string**|  | [optional]
 **riskParamExt** | **string**|  | [optional]
 **orderValidate** | **int**|  | [optional]
 **authType** | **string**|  | [optional]
 **empower** | **bool**|  | [optional]
 **cardType** | **string**|  | [optional]
 **isSMS** | **bool**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Frontcashier\Model\BindcardRequestOpenAuthBindCardResponseDTOResult**](../Model/BindcardRequestOpenAuthBindCardResponseDTOResult.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **bindcardRequest_0**
BindcardRequest0Response bindcardRequest_0(BindcardRequest0Request request)

中台绑卡-绑卡请求

<p>该接口提供绑卡请求,该接口请求成功后需调求短验确认接口完成整个绑卡动作</p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Frontcashier\FrontcashierClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Frontcashier\Model\BindcardRequest0Request();
$request->setParentMerchantNo("parentMerchantNo_example");
$request->setMerchantFlowId("merchantFlowId_example");
$request->setUserNo("userNo_example");
$request->setUserType("userType_example");
$request->setBankCardNo("bankCardNo_example");
$request->setUserName("userName_example");
$request->setIdCardNo("idCardNo_example");
$request->setPhone("phone_example");
$request->setCvv2("cvv2_example");
$request->setValidthru("validthru_example");
$request->setOrderValidate(56);
$request->setAuthType("authType_example");
$request->setCardType("cardType_example");
$request->setIsSMS("isSMS_example");

try {
    $response = $api_client->bindcardRequest_0($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling FrontcashierClient->bindcardRequest_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **parentMerchantNo** | **string**|  | [optional]
 **merchantFlowId** | **string**|  | [optional]
 **userNo** | **string**|  | [optional]
 **userType** | **string**|  | [optional]
 **bankCardNo** | **string**|  | [optional]
 **userName** | **string**|  | [optional]
 **idCardNo** | **string**|  | [optional]
 **phone** | **string**|  | [optional]
 **cvv2** | **string**|  | [optional]
 **validthru** | **string**|  | [optional]
 **orderValidate** | **int**|  | [optional]
 **authType** | **string**|  | [optional]
 **cardType** | **string**|  | [optional]
 **isSMS** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Frontcashier\Model\BindcardRequestOpenAuthBindCardResponseDTOResult**](../Model/BindcardRequestOpenAuthBindCardResponseDTOResult.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **bindpayConfirm**
BindpayConfirmResponse bindpayConfirm(BindpayConfirmRequest request)

绑卡支付-确认支付

<p>API收银台，绑卡支付，确认支付</p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Frontcashier\FrontcashierClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Frontcashier\Model\BindpayConfirmRequest();
$request->setToken("token_example");
$request->setVersion("version_example");
$request->setVerifyCode("verifyCode_example");
$request->setCardno("cardno_example");
$request->setOwner("owner_example");
$request->setIdno("idno_example");
$request->setPhoneNo("phoneNo_example");
$request->setYpMobile("ypMobile_example");
$request->setAvlidDate("avlidDate_example");
$request->setCvv2("cvv2_example");
$request->setIdCardType("idCardType_example");
$request->setBankPWD("bankPWD_example");

try {
    $response = $api_client->bindpayConfirm($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling FrontcashierClient->bindpayConfirm: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**|  | [optional]
 **version** | **string**|  | [optional]
 **verifyCode** | **string**|  | [optional]
 **cardno** | **string**|  | [optional]
 **owner** | **string**|  | [optional]
 **idno** | **string**|  | [optional]
 **phoneNo** | **string**|  | [optional]
 **ypMobile** | **string**|  | [optional]
 **avlidDate** | **string**|  | [optional]
 **cvv2** | **string**|  | [optional]
 **idCardType** | **string**|  | [optional]
 **bankPWD** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Frontcashier\Model\BindpayConfirmApiBindPayConfirmResponseDTOResult**](../Model/BindpayConfirmApiBindPayConfirmResponseDTOResult.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **bindpayRequest**
BindpayRequestResponse bindpayRequest(BindpayRequestRequest request)

绑卡支付-支付下单



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Frontcashier\FrontcashierClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Frontcashier\Model\BindpayRequestRequest();
$request->setToken("token_example");
$request->setBindId("bindId_example");
$request->setUserNo("userNo_example");
$request->setUserType("userType_example");
$request->setUserIp("userIp_example");
$request->setVersion("version_example");
$request->setExtParamMap("extParamMap_example");
$request->setPayMerchantNo("payMerchantNo_example");

try {
    $response = $api_client->bindpayRequest($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling FrontcashierClient->bindpayRequest: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**|  | [optional]
 **bindId** | **string**|  | [optional]
 **userNo** | **string**|  | [optional]
 **userType** | **string**|  | [optional]
 **userIp** | **string**|  | [optional]
 **version** | **string**|  | [optional]
 **extParamMap** | **string**|  | [optional]
 **payMerchantNo** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Frontcashier\Model\BindpayRequestApiBindPayPaymentResponseDTOResult**](../Model/BindpayRequestApiBindPayPaymentResponseDTOResult.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **bindpaySendsms**
BindpaySendsmsResponse bindpaySendsms(BindpaySendsmsRequest request)

绑卡支付-请求发短验

<p>API收银台，绑卡支付，请求发送验证码</p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Frontcashier\FrontcashierClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Frontcashier\Model\BindpaySendsmsRequest();
$request->setToken("token_example");
$request->setVersion("version_example");
$request->setCardno("cardno_example");
$request->setOwner("owner_example");
$request->setIdno("idno_example");
$request->setPhoneNo("phoneNo_example");
$request->setYpMobile("ypMobile_example");
$request->setAvlidDate("avlidDate_example");
$request->setCvv2("cvv2_example");
$request->setIdCardType("idCardType_example");
$request->setBankPWD("bankPWD_example");

try {
    $response = $api_client->bindpaySendsms($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling FrontcashierClient->bindpaySendsms: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**|  | [optional]
 **version** | **string**|  | [optional]
 **cardno** | **string**|  | [optional]
 **owner** | **string**|  | [optional]
 **idno** | **string**|  | [optional]
 **phoneNo** | **string**|  | [optional]
 **ypMobile** | **string**|  | [optional]
 **avlidDate** | **string**|  | [optional]
 **cvv2** | **string**|  | [optional]
 **idCardType** | **string**|  | [optional]
 **bankPWD** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Frontcashier\Model\BindpaySendsmsApiBindPaySendSmsResponseDTOResult**](../Model/BindpaySendsmsApiBindPaySendSmsResponseDTOResult.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **getcardbin**
GetcardbinResponse getcardbin(GetcardbinRequest request)

银行卡bin识别

银行卡bin识别

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Frontcashier\FrontcashierClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Frontcashier\Model\GetcardbinRequest();
$request->setBankCardNo("bankCardNo_example");

try {
    $response = $api_client->getcardbin($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling FrontcashierClient->getcardbin: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **bankCardNo** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Frontcashier\Model\GetcardbinRecognizeCardBinResponseDTOResult**](../Model/GetcardbinRecognizeCardBinResponseDTOResult.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **yjzfBindpayrequest**
YjzfBindpayrequestResponse yjzfBindpayrequest(YjzfBindpayrequestRequest request)

一键支付-二次支付下单

API收银台-一键支付-二次支付下单

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Frontcashier\FrontcashierClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Frontcashier\Model\YjzfBindpayrequestRequest();
$request->setBindId("bindId_example");
$request->setUserNo("userNo_example");
$request->setUserType("userType_example");
$request->setUserIp("userIp_example");
$request->setPaymentExt("paymentExt_example");
$request->setToken("token_example");
$request->setVersion("version_example");

try {
    $response = $api_client->yjzfBindpayrequest($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling FrontcashierClient->yjzfBindpayrequest: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **bindId** | **string**|  | [optional]
 **userNo** | **string**|  | [optional]
 **userType** | **string**|  | [optional]
 **userIp** | **string**|  | [optional]
 **paymentExt** | **string**|  | [optional]
 **token** | **string**|  | [optional]
 **version** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Frontcashier\Model\YjzfBindpayrequestAPIYJZFBindPaymentResponseDTOResult**](../Model/YjzfBindpayrequestAPIYJZFBindPaymentResponseDTOResult.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **yjzfFirstpayrequest**
YjzfFirstpayrequestResponse yjzfFirstpayrequest(YjzfFirstpayrequestRequest request)

一键支付-首次支付下单

API收银台-一键支付-首次支付下单

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Frontcashier\FrontcashierClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Frontcashier\Model\YjzfFirstpayrequestRequest();
$request->setUserNo("userNo_example");
$request->setUserType("userType_example");
$request->setUserIp("userIp_example");
$request->setCardNo("cardNo_example");
$request->setOwner("owner_example");
$request->setIdNo("idNo_example");
$request->setPhoneNo("phoneNo_example");
$request->setCvv("cvv_example");
$request->setAvlidDate("avlidDate_example");
$request->setPaymentExt("paymentExt_example");
$request->setToken("token_example");
$request->setVersion("version_example");

try {
    $response = $api_client->yjzfFirstpayrequest($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling FrontcashierClient->yjzfFirstpayrequest: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **userNo** | **string**|  | [optional]
 **userType** | **string**|  | [optional]
 **userIp** | **string**|  | [optional]
 **cardNo** | **string**|  | [optional]
 **owner** | **string**|  | [optional]
 **idNo** | **string**|  | [optional]
 **phoneNo** | **string**|  | [optional]
 **cvv** | **string**|  | [optional]
 **avlidDate** | **string**|  | [optional]
 **paymentExt** | **string**|  | [optional]
 **token** | **string**|  | [optional]
 **version** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Frontcashier\Model\YjzfFirstpayrequestAPIYJZFFirstPaymentResponseDTOResult**](../Model/YjzfFirstpayrequestAPIYJZFFirstPaymentResponseDTOResult.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **yjzfPaymentconfirm**
YjzfPaymentconfirmResponse yjzfPaymentconfirm(YjzfPaymentconfirmRequest request)

一键支付-确认支付

API收银台-一键支付-确认支付

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Frontcashier\FrontcashierClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Frontcashier\Model\YjzfPaymentconfirmRequest();
$request->setRecordId("recordId_example");
$request->setVerifyCode("verifyCode_example");
$request->setOwner("owner_example");
$request->setIdNo("idNo_example");
$request->setPhoneNo("phoneNo_example");
$request->setCvv("cvv_example");
$request->setAvlidDate("avlidDate_example");
$request->setBankPWD("bankPWD_example");
$request->setPaymentExt("paymentExt_example");
$request->setToken("token_example");
$request->setVersion("version_example");

try {
    $response = $api_client->yjzfPaymentconfirm($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling FrontcashierClient->yjzfPaymentconfirm: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **recordId** | **string**|  | [optional]
 **verifyCode** | **string**|  | [optional]
 **owner** | **string**|  | [optional]
 **idNo** | **string**|  | [optional]
 **phoneNo** | **string**|  | [optional]
 **cvv** | **string**|  | [optional]
 **avlidDate** | **string**|  | [optional]
 **bankPWD** | **string**|  | [optional]
 **paymentExt** | **string**|  | [optional]
 **token** | **string**|  | [optional]
 **version** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Frontcashier\Model\YjzfPaymentconfirmAPIYJZFConfirmPayResponseDTOResult**](../Model/YjzfPaymentconfirmAPIYJZFConfirmPayResponseDTOResult.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **yjzfSendsms**
YjzfSendsmsResponse yjzfSendsms(YjzfSendsmsRequest request)

一键支付-请求发验证码

API收银台-一键支付-请求发验证码

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Frontcashier\FrontcashierClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Frontcashier\Model\YjzfSendsmsRequest();
$request->setRecordId("recordId_example");
$request->setOwner("owner_example");
$request->setIdNo("idNo_example");
$request->setPhoneNo("phoneNo_example");
$request->setCvv("cvv_example");
$request->setAvlidDate("avlidDate_example");
$request->setBankPWD("bankPWD_example");
$request->setPaymentExt("paymentExt_example");
$request->setToken("token_example");
$request->setVersion("version_example");

try {
    $response = $api_client->yjzfSendsms($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling FrontcashierClient->yjzfSendsms: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **recordId** | **string**|  | [optional]
 **owner** | **string**|  | [optional]
 **idNo** | **string**|  | [optional]
 **phoneNo** | **string**|  | [optional]
 **cvv** | **string**|  | [optional]
 **avlidDate** | **string**|  | [optional]
 **bankPWD** | **string**|  | [optional]
 **paymentExt** | **string**|  | [optional]
 **token** | **string**|  | [optional]
 **version** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Frontcashier\Model\YjzfSendsmsAPIBasicResponseDTOResult**](../Model/YjzfSendsmsAPIBasicResponseDTOResult.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

