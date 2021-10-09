# Yeepay\Yop\Sdk\Settle

All URIs are relative to *http://localhost:8080*

Method | HTTP request | Description
------------- | ------------- | -------------
[**balanceQuery**](Settle.md#balanceQuery) | **GET** /rest/v1.0/settle/balance/query | 待结算金额查询
[**fileGet**](Settle.md#fileGet) | **GET** /yos/v1.0/settle/file/get | 结算对账文件获取接口
[**recordsQuery**](Settle.md#recordsQuery) | **GET** /rest/v1.0/settle/records/query | 结算记录查询
[**selfSettleApply**](Settle.md#selfSettleApply) | **POST** /rest/v1.0/settle/self-settle/apply | 自助结算申请
[**settleCardAdd**](Settle.md#settleCardAdd) | **POST** /rest/v1.0/settle/settle-card/add | 新增结算卡
[**settleCardModify**](Settle.md#settleCardModify) | **POST** /rest/v1.0/settle/settle-card/modify | 修改结算卡


# **balanceQuery**
BalanceQueryResponse balanceQuery(BalanceQueryRequest request)

待结算金额查询

查询商户自助结算下未结算的交易统计信息。

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Settle\SettleClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Settle\Model\BalanceQueryRequest();
$request->setParentMerchantNo("parentMerchantNo_example");
$request->setMerchantNo("merchantNo_example");
$request->setOperatePeriod("operatePeriod_example");
$request->setEndTime("2021-10-09 10:09:45");

try {
    $response = $api_client->balanceQuery($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling SettleClient->balanceQuery: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **parentMerchantNo** | **string**| 发起方商户编号。&lt;br&gt;*标准商户收付款方案中此参数与收款商户编号一致；&lt;br&gt;*平台商户收付款方案中此参数为平台商商户编号；&lt;br&gt;*服务商解决方案中，①标准商户收款时，该参数为标准商户商编 ②平台商收款或平台商入驻商户收款时，该参数为平台商商编。 |
 **merchantNo** | **string**|  |
 **operatePeriod** | **string**| 查询时间范围。&lt;br&gt;PERIOD:指定时间范围，按照传入的统计截止时间查询未结算可结算金额&lt;br&gt;ALL:查询当前全部 |
 **endTime** | **string**| 统计截止时间。当查询范围按PERIOD时，需要必填此参数。 | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Settle\Model\BalanceQuerySelfSettleQueryResponseDtoResult**](../Model/BalanceQuerySelfSettleQueryResponseDtoResult.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **fileGet**
YosDownloadResponse fileGet(FileGetRequest request)

结算对账文件获取接口

支持商户进行对账文件下载。 受理失败，返回响应错误码；受理成功，返回文件

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Settle\SettleClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Settle\Model\FileGetRequest();
$request->setMerchantNo("merchantNo_example");
$request->setParentMerchantNo("parentMerchantNo_example");
$request->setSettleRequestNo("settleRequestNo_example");
$request->setSettleDate("settleDate_example");

try {
    $response = $api_client->fileGet($request);
    $response->save('targetFilePath');
}catch (\Exception $e) {
    echo 'Exception when calling SettleClient->fileGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **merchantNo** | **string**|  |
 **parentMerchantNo** | **string**|  |
 **settleRequestNo** | **string**| 商户发起自助结算时的请求号，当结算日期为空时，此参数必填 | [optional]
 **settleDate** | **string**| 需要获取的结算文件对应的结算日期，当结算订单号为空时，此参数必填 | [optional]

### Return type
[**Resource**](../Model/Resource.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/octet-stream

# **recordsQuery**
RecordsQueryResponse recordsQuery(RecordsQueryRequest request)

结算记录查询

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Settle\SettleClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Settle\Model\RecordsQueryRequest();
$request->setParentMerchantNo("parentMerchantNo_example");
$request->setMerchantNo("merchantNo_example");
$request->setSettleRequestNo("settleRequestNo_example");
$request->setSettleRequestBeginTime("2021-10-09 10:09:45");
$request->setSettleRequestEndTime("2021-10-09 10:09:45");

try {
    $response = $api_client->recordsQuery($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling SettleClient->recordsQuery: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **parentMerchantNo** | **string**|  |
 **merchantNo** | **string**|  |
 **settleRequestNo** | **string**| 结算请求号(结算请求号与结算申请起止时间二选一必填) | [optional]
 **settleRequestBeginTime** | **string**| 结算申请起始时间（结算申请起止时间与结算请求号二选一必填） | [optional]
 **settleRequestEndTime** | **string**| 结算申请截止时间（结算申请起止时间与结算请求号二选一必填） | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Settle\Model\RecordsQuerySettleRecordQueryResponseDtoResult**](../Model/RecordsQuerySettleRecordQueryResponseDtoResult.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **selfSettleApply**
SelfSettleApplyResponse selfSettleApply(SelfSettleApplyRequest request)

自助结算申请

支持商户发起自助结算申请。

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Settle\SettleClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Settle\Model\SelfSettleApplyRequest();
$request->setParentMerchantNo("parentMerchantNo_example");
$request->setMerchantNo("merchantNo_example");
$request->setSettleRequestNo("settleRequestNo_example");
$request->setOperatePeriod("operatePeriod_example");
$request->setEndTime("2021-10-09 10:09:45");
$request->setNotifyUrl("notifyUrl_example");

try {
    $response = $api_client->selfSettleApply($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling SettleClient->selfSettleApply: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **parentMerchantNo** | **string**|  | [optional]
 **merchantNo** | **string**|  | [optional]
 **settleRequestNo** | **string**|  | [optional]
 **operatePeriod** | **string**|  | [optional]
 **endTime** | **string**|  | [optional]
 **notifyUrl** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Settle\Model\SelfSettleApplySelfSettleResponseDtoResult**](../Model/SelfSettleApplySelfSettleResponseDtoResult.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **settleCardAdd**
SettleCardAddResponse settleCardAdd(SettleCardAddRequest request)

新增结算卡

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Settle\SettleClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Settle\Model\SettleCardAddRequest();
$request->setParentMerchantNo("parentMerchantNo_example");
$request->setMerchantNo("10040062484");
$request->setBankCardNo("bankCardNo_example");
$request->setBankCardType("bankCardType_example");
$request->setBankCode("bankCode_example");
$request->setDefaultSettleCard(true);

try {
    $response = $api_client->settleCardAdd($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling SettleClient->settleCardAdd: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **parentMerchantNo** | **string**|  | [optional]
 **merchantNo** | **string**|  | [optional]
 **bankCardNo** | **string**|  | [optional]
 **bankCardType** | **string**|  | [optional]
 **bankCode** | **string**|  | [optional]
 **defaultSettleCard** | **bool**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Settle\Model\SettleCardAddMerchantSettleCardResponseDTOResult**](../Model/SettleCardAddMerchantSettleCardResponseDTOResult.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **settleCardModify**
SettleCardModifyResponse settleCardModify(SettleCardModifyRequest request)

修改结算卡

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Settle\SettleClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Settle\Model\SettleCardModifyRequest();
$request->setParentMerchantNo("parentMerchantNo_example");
$request->setMerchantNo("10040062484");
$request->setBankCardNo("bankCardNo_example");
$request->setBankCardType("bankCardType_example");
$request->setBankCode("bankCode_example");
$request->setBrancgCode("brancgCode_example");
$request->setDefaultSettleCard(true);

try {
    $response = $api_client->settleCardModify($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling SettleClient->settleCardModify: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **parentMerchantNo** | **string**|  | [optional]
 **merchantNo** | **string**|  | [optional]
 **bankCardNo** | **string**|  | [optional]
 **bankCardType** | **string**|  | [optional]
 **bankCode** | **string**|  | [optional]
 **brancgCode** | **string**|  | [optional]
 **defaultSettleCard** | **bool**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Settle\Model\SettleCardModifyMerchantSettleCardResponseDTOResult**](../Model/SettleCardModifyMerchantSettleCardResponseDTOResult.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

