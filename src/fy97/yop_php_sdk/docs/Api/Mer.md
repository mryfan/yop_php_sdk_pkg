# Yeepay\Yop\Sdk\Mer

All URIs are relative to *http://localhost:8080*

Method | HTTP request | Description
------------- | ------------- | -------------
[**authStateQuery**](Mer.md#authStateQuery) | **GET** /rest/v2.0/mer/auth/state/query | 商户授权状态查询接口
[**authorizeRelieve**](Mer.md#authorizeRelieve) | **POST** /rest/v2.0/mer/authorize/relieve | 解除授权
[**authorizeSign**](Mer.md#authorizeSign) | **POST** /rest/v2.0/mer/authorize/sign | 授权
[**merchantDisposeQuery**](Mer.md#merchantDisposeQuery) | **GET** /rest/v1.0/mer/merchant/dispose/query | 沉默商户解冻申请进度查询
[**merchantDisposeUnfreeze**](Mer.md#merchantDisposeUnfreeze) | **POST** /rest/v1.0/mer/merchant/dispose/unfreeze | 沉默商户解冻申请
[**merchantWechatauthCancel**](Mer.md#merchantWechatauthCancel) | **POST** /rest/v1.0/mer/merchant/wechatauth/cancel | 撤销微信实名认证申请单
[**merchantWechatauthQuery**](Mer.md#merchantWechatauthQuery) | **GET** /rest/v1.0/mer/merchant/wechatauth/query | 查询微信实名认证状态
[**notifyRepeat**](Mer.md#notifyRepeat) | **POST** /rest/v2.0/mer/notify/repeat | 重复获取(短验/邮件/电子签章)
[**productFeeModify**](Mer.md#productFeeModify) | **POST** /rest/v2.0/mer/product/fee/modify | 商户产品费率变更
[**productFeeQuery**](Mer.md#productFeeQuery) | **GET** /rest/v2.0/mer/product/fee/query | 商户产品费率查询
[**productIncrementSettleOpen**](Mer.md#productIncrementSettleOpen) | **POST** /rest/v2.0/mer/product/increment-settle/open | 增值结算产品开通
[**registerQuery**](Mer.md#registerQuery) | **GET** /rest/v2.0/mer/register/query | 商户入网进度查询接口
[**registerSaasMerchant**](Mer.md#registerSaasMerchant) | **POST** /rest/v2.0/mer/register/saas/merchant | 特约商户入网(企业/个体)
[**registerSaasMicro**](Mer.md#registerSaasMicro) | **POST** /rest/v2.0/mer/register/saas/micro | 特约商户入网(小微)


# **authStateQuery**
AuthStateQueryResponse authStateQuery(AuthStateQueryRequest request)

商户授权状态查询接口

商户授权状态查询接口

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Mer\MerClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Mer\Model\AuthStateQueryRequest();
$request->setMerchantNo("merchantNo_example");
$request->setReportMerchantNo("reportMerchantNo_example");
$request->setFeeType("feeType_example");

try {
    $response = $api_client->authStateQuery($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling MerClient->authStateQuery: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **merchantNo** | **string**| 易宝商户编号 |
 **reportMerchantNo** | **string**| 报备商户编号 | [optional]
 **feeType** | **string**| 可选项如下：&lt;br&gt;GONGYI:微信公益&lt;br&gt;GONGJIAO:微信公缴&lt;br&gt;XIANXIA:微信线下&lt;br&gt;BAOXIAN:微信保险&lt;br&gt;XIANSHANG:微信线上&lt;br&gt;OLDLVZHOU:微信老绿洲&lt;br&gt;LVZHOU:微信绿洲&lt;br&gt;XIAOYUAN:微信校园 | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Mer\Model\AuthStateQueryIdentityAuthStateResDtoResult**](../Model/AuthStateQueryIdentityAuthStateResDtoResult.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **authorizeRelieve**
AuthorizeRelieveResponse authorizeRelieve(AuthorizeRelieveRequest request)

解除授权

商户调用解除授权服务解除已成功的授权关系

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Mer\MerClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Mer\Model\AuthorizeRelieveRequest();
$request->setAuthorizeMerchantNo("10040039111");
$request->setBizType("WITHDRAW");

try {
    $response = $api_client->authorizeRelieve($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling MerClient->authorizeRelieve: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorizeMerchantNo** | **string**|  | [optional]
 **bizType** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Mer\Model\AuthorizeRelieveMGRelieveAuthorizeRespDTOResult**](../Model/AuthorizeRelieveMGRelieveAuthorizeRespDTOResult.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **authorizeSign**
AuthorizeSignResponse authorizeSign(AuthorizeSignRequest request)

授权

商户交易前需做授权服务，提供次接口

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Mer\MerClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Mer\Model\AuthorizeSignRequest();
$request->setRequestNo("0adc579914d541f8baa3be75387846f1");
$request->setAuthorizeMerchantNo("10040039111");
$request->setBizType("WITHDRAW");
$request->setNotifyUrl("http://www.notifyUrl.com");

try {
    $response = $api_client->authorizeSign($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling MerClient->authorizeSign: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **requestNo** | **string**|  | [optional]
 **authorizeMerchantNo** | **string**|  | [optional]
 **bizType** | **string**|  | [optional]
 **notifyUrl** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Mer\Model\AuthorizeSignMGAuthorizeRespDTOResult**](../Model/AuthorizeSignMGAuthorizeRespDTOResult.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **merchantDisposeQuery**
MerchantDisposeQueryResponse merchantDisposeQuery(MerchantDisposeQueryRequest request)

沉默商户解冻申请进度查询

查询沉默商户解冻申请单进度

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Mer\MerClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Mer\Model\MerchantDisposeQueryRequest();
$request->setRequestNo("requestNo_example");
$request->setApplicationNo("applicationNo_example");

try {
    $response = $api_client->merchantDisposeQuery($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling MerClient->merchantDisposeQuery: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **requestNo** | **string**| 请求号与工单号二选一必填 | [optional]
 **applicationNo** | **string**| 请求号与工单号二选一必填 | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Mer\Model\MerchantDisposeQueryMerchantQueryDisposeNotifyRespDtoResult**](../Model/MerchantDisposeQueryMerchantQueryDisposeNotifyRespDtoResult.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **merchantDisposeUnfreeze**
MerchantDisposeUnfreezeResponse merchantDisposeUnfreeze(MerchantDisposeUnfreezeRequest request)

沉默商户解冻申请

支持自助发起沉默商户解冻

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Mer\MerClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Mer\Model\MerchantDisposeUnfreezeRequest();
$request->setRequestNo("requestNo_example");
$request->setNotifyUrl("notifyUrl_example");
$request->setMerchantNo("merchantNo_example");

try {
    $response = $api_client->merchantDisposeUnfreeze($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling MerClient->merchantDisposeUnfreeze: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **requestNo** | **string**|  | [optional]
 **notifyUrl** | **string**|  | [optional]
 **merchantNo** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Mer\Model\MerchantDisposeUnfreezeMerchantDisposeRespDtoResult**](../Model/MerchantDisposeUnfreezeMerchantDisposeRespDtoResult.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **merchantWechatauthCancel**
MerchantWechatauthCancelResponse merchantWechatauthCancel(MerchantWechatauthCancelRequest request)

撤销微信实名认证申请单

撤销微信实名认证申请单

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Mer\MerClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Mer\Model\MerchantWechatauthCancelRequest();
$request->setApplymentId("applymentId_example");
$request->setRequestNo("requestNo_example");
$request->setSubMerchantNo("subMerchantNo_example");
$request->setReportFee("reportFee_example");

try {
    $response = $api_client->merchantWechatauthCancel($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling MerClient->merchantWechatauthCancel: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **applymentId** | **string**|  | [optional]
 **requestNo** | **string**|  | [optional]
 **subMerchantNo** | **string**|  | [optional]
 **reportFee** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Mer\Model\MerchantWechatauthCancelApplymentCancelRespDtoResult**](../Model/MerchantWechatauthCancelApplymentCancelRespDtoResult.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **merchantWechatauthQuery**
MerchantWechatauthQueryResponse merchantWechatauthQuery(MerchantWechatauthQueryRequest request)

查询微信实名认证状态

查询微信实名认证状态

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Mer\MerClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Mer\Model\MerchantWechatauthQueryRequest();
$request->setApplymentId("applymentId_example");
$request->setSubMerchantNo("subMerchantNo_example");
$request->setReportFee("reportFee_example");
$request->setRequestNo("requestNo_example");

try {
    $response = $api_client->merchantWechatauthQuery($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling MerClient->merchantWechatauthQuery: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **applymentId** | **string**|  |
 **subMerchantNo** | **string**|  |
 **reportFee** | **string**| GONGYI 微信公益&lt;br&gt;GONGJIAO 微信公缴&lt;br&gt;XIANXIA 微信线下&lt;br&gt;BAOXIAN 微信保险&lt;br&gt;XIANSHANG 微信线上&lt;br&gt;OLDLVZHOU 微信老绿洲&lt;br&gt;LVZHOU 微信绿洲&lt;br&gt;XIAOYUAN 微信校园 |
 **requestNo** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Mer\Model\MerchantWechatauthQueryQueryCertificateResultRespDtoResult**](../Model/MerchantWechatauthQueryQueryCertificateResultRespDtoResult.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **notifyRepeat**
NotifyRepeatResponse notifyRepeat(NotifyRepeatRequest request)

重复获取(短验/邮件/电子签章)

重复获取(短验/邮件/电子签章)

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Mer\MerClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Mer\Model\NotifyRepeatRequest();
$request->setRequestNo("requestNo_example");
$request->setApplicationNo("applicationNo_example");
$request->setType("type_example");

try {
    $response = $api_client->notifyRepeat($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling MerClient->notifyRepeat: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **requestNo** | **string**|  | [optional]
 **applicationNo** | **string**|  | [optional]
 **type** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Mer\Model\NotifyRepeatMerchantNetInRepeatNotifyRespDtoResult**](../Model/NotifyRepeatMerchantNetInRepeatNotifyRespDtoResult.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **productFeeModify**
ProductFeeModifyResponse productFeeModify(ProductFeeModifyRequest request)

商户产品费率变更

商户产品费率变更

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Mer\MerClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Mer\Model\ProductFeeModifyRequest();
$request->setRequestNo("requestNo_example");
$request->setParentMerchantNo("parentMerchantNo_example");
$request->setMerchantNo("merchantNo_example");
$request->setNotifyUrl("notifyUrl_example");
$request->setProductInfo("[{\"productCode\":\"MERCHANT_SCAN_ALIPAY_OFFLINE\",\"rateType\":\"SINGLE_PERCENT\",\"percentRate\":\"0.1\",\"undertaker\":\"PLATFORM_MERCHANT\",\"paymentMethod\":\"REAL_TIME\"}]");

try {
    $response = $api_client->productFeeModify($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling MerClient->productFeeModify: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **requestNo** | **string**|  | [optional]
 **parentMerchantNo** | **string**|  | [optional]
 **merchantNo** | **string**|  | [optional]
 **notifyUrl** | **string**|  | [optional]
 **productInfo** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Mer\Model\ProductFeeModifyModifyProductFeeRespDtoResult**](../Model/ProductFeeModifyModifyProductFeeRespDtoResult.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **productFeeQuery**
ProductFeeQueryResponse productFeeQuery(ProductFeeQueryRequest request)

商户产品费率查询

商户产品费率查询

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Mer\MerClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Mer\Model\ProductFeeQueryRequest();
$request->setParentMerchantNo("parentMerchantNo_example");
$request->setMerchantNo("merchantNo_example");
$request->setProductCode("MERCHANT_SCAN_ALIPAY_OFFLINE");

try {
    $response = $api_client->productFeeQuery($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling MerClient->productFeeQuery: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **parentMerchantNo** | **string**| 如果为平台商拓展商户（入驻商户），此为平台商商户编号；&lt;br&gt;如为saas服务商拓展商户（平台商/标准商户），此为saas服务商商户编号。 |
 **merchantNo** | **string**| 需要查询产品的商户编号 |
 **productCode** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Mer\Model\ProductFeeQueryQueryProductFeeRespDtoResult**](../Model/ProductFeeQueryQueryProductFeeRespDtoResult.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **productIncrementSettleOpen**
ProductIncrementSettleOpenResponse productIncrementSettleOpen(ProductIncrementSettleOpenRequest request)

增值结算产品开通

增值结算产品开通

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Mer\MerClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Mer\Model\ProductIncrementSettleOpenRequest();
$request->setRequestNo("requestNo_example");
$request->setMerchantNo("merchantNo_example");
$request->setProductInfo("[{\"productCode\":\"S0\",\"rateType\":\"FIXED_MIX_PERCENT\",\"percentRate\":\"0.1\",\"fixedRate\":\"111\"}]");
$request->setNotifyUrl("notifyUrl_example");

try {
    $response = $api_client->productIncrementSettleOpen($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling MerClient->productIncrementSettleOpen: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **requestNo** | **string**|  | [optional]
 **merchantNo** | **string**|  | [optional]
 **productInfo** | **string**|  | [optional]
 **notifyUrl** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Mer\Model\ProductIncrementSettleOpenAddIncrementSettleProductRespDtoResult**](../Model/ProductIncrementSettleOpenAddIncrementSettleProductRespDtoResult.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **registerQuery**
RegisterQueryResponse registerQuery(RegisterQueryRequest request)

商户入网进度查询接口

商户入网进度查询接口

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Mer\MerClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Mer\Model\RegisterQueryRequest();
$request->setRequestNo("0adc579914d541f8baa3be75387846f1");

try {
    $response = $api_client->registerQuery($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling MerClient->registerQuery: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **requestNo** | **string**|  |

### Return type
[**\Yeepay\Yop\Sdk\Service\Mer\Model\RegisterQueryNetInProgressQueryRespDtoResult**](../Model/RegisterQueryNetInProgressQueryRespDtoResult.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **registerSaasMerchant**
RegisterSaasMerchantResponse registerSaasMerchant(RegisterSaasMerchantRequest request)

特约商户入网(企业/个体)

特约商户入网(企业/个体)

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Mer\MerClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Mer\Model\RegisterSaasMerchantRequest();
$request->setRequestNo("YBRWQQH20210622XXXXXX");
$request->setBusinessRole("ORDINARY_MERCHANT");
$request->setParentMerchantNo("parentMerchantNo_example");
$request->setMerchantSubjectInfo("{         \"licenceUrl\":\"商户证件照片地址\",         \"signName\":\"商户签约名\",         \"signType\":\"商户签约类型\",         \"licenceNo\":\"商户证件号码\",         \"shortName\":\"商户简称\"     }");
$request->setMerchantCorporationInfo("{ \"legalName\":\"法人名称\", \"legalLicenceType\":\"法人证件类型\", \"legalLicenceNo\":\"法人证件编号\", \"legalLicenceFrontUrl\":\"法人证件正面照片地址\", \"legalLicenceBackUrl\":\"法人证件背面照片地址\" }");
$request->setMerchantContactInfo("{ \"contactName\":\"联系人姓名\", \"contactMobile\":\"联系人手机号\", \"contactEmail\":\"联系人邮箱\", \"contactLicenceNo\":\"联系人证件号码\" }");
$request->setIndustryCategoryInfo("{ \"primaryIndustryCategory\":\"一级行业分类编码\", \"secondaryIndustryCategory\":\"二级行业分类编码\" }");
$request->setBusinessAddressInfo("{ \"province\":\"经营省\", \"city\":\"经营市\", \"district\":\"经营区\", \"address\":\"经营地址\" }");
$request->setSettlementAccountInfo("{ \"settlementDirection\":\"结算方向\", \"bankCode\":\"开户总行编码\", \"bankAccountType\":\"银行账户类型\", \"bankCardNo\":\"银行账户号码\" }");
$request->setNotifyUrl("https://notify.merchant.com/xxx");
$request->setProductInfo("[{\"productCode\":\"MERCHANT_SCAN_ALIPAY_OFFLINE\",\"rateType\":\"SINGLE_PERCENT\",\"percentRate\":\"0.1\"},{\"productCode\":\"MERCHANT_SCAN_UNIONPAY_CREDIT\",\"rateType\":\"SINGLE_FIXED\",\"fixedRate\":\"1\"},{\"productCode\":\"T1\",\"rateType\":\"SINGLE_PERCENT\",\"percentRate\":\"0.1\"}]");
$request->setProductQualificationInfo("{ \"paymentScene\": \"RLZYFW\",   \"systemScreenshotUrl\": \"https://staticres.yeepay.com/xxx.文件后缀\",   \"specialPermitProcessUrl\": \"https://staticres.yeepay.com/xxx.文件后缀\",   \"agreementPhotoUrl\": \"https://staticres.yeepay.com/xxx.文件后缀\" }");

try {
    $response = $api_client->registerSaasMerchant($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling MerClient->registerSaasMerchant: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **requestNo** | **string**|  | [optional]
 **businessRole** | **string**|  | [optional]
 **parentMerchantNo** | **string**|  | [optional]
 **merchantSubjectInfo** | **string**|  | [optional]
 **merchantCorporationInfo** | **string**|  | [optional]
 **merchantContactInfo** | **string**|  | [optional]
 **industryCategoryInfo** | **string**|  | [optional]
 **businessAddressInfo** | **string**|  | [optional]
 **settlementAccountInfo** | **string**|  | [optional]
 **notifyUrl** | **string**|  | [optional]
 **productInfo** | **string**|  | [optional]
 **productQualificationInfo** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Mer\Model\RegisterSaasMerchantContributeMerchantNetInRespDtoResult**](../Model/RegisterSaasMerchantContributeMerchantNetInRespDtoResult.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **registerSaasMicro**
RegisterSaasMicroResponse registerSaasMicro(RegisterSaasMicroRequest request)

特约商户入网(小微)

SaaS服务商下特约商户入网(小微)

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Mer\MerClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Mer\Model\RegisterSaasMicroRequest();
$request->setRequestNo("YBRWQQH20210622XXXXXX");
$request->setBusinessRole("SETTLED_MERCHANT");
$request->setParentMerchantNo("parentMerchantNo_example");
$request->setMerchantSubjectInfo("{ \"signName\":\"商户签约名\", \"shortName\":\"商户简称\" }");
$request->setBusinessAddressInfo("{ \"province\":\"经营省\", \"city\":\"经营市\", \"district\":\"经营区\", \"address\":\"经营地址\" }");
$request->setMerchantCorporationInfo("{ \"legalLicenceType\":\"法人证件类型\", \"legalLicenceNo\":\"法人证件编号\", \"legalLicenceFrontUrl\":\"法人证件正面照片地址\", \"legalLicenceBackUrl\":\"法人证件背面照片地址\",  \"mobile\":\"法人手机号\"  }");
$request->setAccountInfo("{\"bankAccountType\":\"银行账户类型\",\"bankCardNo\":\"银行账户号码\",\"bankCode\":\"开户总行编码\"}");
$request->setNotifyUrl("https://notify.merchant.com/xxx");
$request->setProductInfo("[{\"productCode\":\"MERCHANT_SCAN_ALIPAY_OFFLINE\",\"rateType\":\"SINGLE_PERCENT\",\"percentRate\":\"0.1\"},{\"productCode\":\"MERCHANT_SCAN_UNIONPAY_CREDIT\",\"rateType\":\"SINGLE_FIXED\",\"fixedRate\":\"1\"},{\"productCode\":\"T1\",\"rateType\":\"SINGLE_PERCENT\",\"percentRate\":\"0.1\"}]");
$request->setProductQualificationInfo("{\"paymentScene\": \"RLZYFW\",   \"systemScreenshotUrl\": \"https://staticres.yeepay.com/xxx.文件后缀\",   \"specialPermitProcessUrl\": \"https://staticres.yeepay.com/xxx.文件后缀\",   \"agreementPhotoUrl\": \"https://staticres.yeepay.com/xxx.文件后缀\" }");

try {
    $response = $api_client->registerSaasMicro($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling MerClient->registerSaasMicro: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **requestNo** | **string**|  | [optional]
 **businessRole** | **string**|  | [optional]
 **parentMerchantNo** | **string**|  | [optional]
 **merchantSubjectInfo** | **string**|  | [optional]
 **businessAddressInfo** | **string**|  | [optional]
 **merchantCorporationInfo** | **string**|  | [optional]
 **accountInfo** | **string**|  | [optional]
 **notifyUrl** | **string**|  | [optional]
 **productInfo** | **string**|  | [optional]
 **productQualificationInfo** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Mer\Model\RegisterSaasMicroContributeMicroMerchantNetInRespDtoResult**](../Model/RegisterSaasMicroContributeMicroMerchantNetInRespDtoResult.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

