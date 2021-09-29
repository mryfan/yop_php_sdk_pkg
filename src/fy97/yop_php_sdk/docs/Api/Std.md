# Yeepay\Yop\Sdk\Std

All URIs are relative to *http://localhost:8080*

Method | HTTP request | Description
------------- | ------------- | -------------
[**billDividedaydownload**](Std.md#billDividedaydownload) | **GET** /yos/v1.0/std/bill/dividedaydownload | 分账日对账下载
[**billFundbillApply**](Std.md#billFundbillApply) | **POST** /rest/v1.0/std/bill/fundbill/apply | 资金账单申请
[**billFundbillDownload**](Std.md#billFundbillDownload) | **GET** /yos/v1.0/std/bill/fundbill/download | 资金账单下载
[**billTradedaydownload**](Std.md#billTradedaydownload) | **POST** /yos/v1.0/std/bill/tradedaydownload | 交易日对账下载


# **billDividedaydownload**
YosDownloadResponse billDividedaydownload(BillDividedaydownloadRequest request)

分账日对账下载

<p>强调：获取对账文件时请以行号来获取对账文件信息，后期易宝可能在后追加参表头参数<br />分账日对账下载，9点后下载前一天的对账文件，具体请参考<a href=\"https://open.yeepay.com/docs/v2/products/ptssfk/others/5f9a6ea1f8301e001b1a870f/index.html\">对账文件说明</a></p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Std\StdClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Std\Model\BillDividedaydownloadRequest();
$request->setMerchantNo("merchantNo_example");
$request->setDayString("dayString_example");

try {
    $response = $api_client->billDividedaydownload($request);
    $response->save('targetFilePath');
}catch (\Exception $e) {
    echo 'Exception when calling StdClient->billDividedaydownload: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **merchantNo** | **string**|  | [optional]
 **dayString** | **string**| e.g.: 2017-09-09 | [optional]

### Return type
[**Resource**](../Model/Resource.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/octet-stream

# **billFundbillApply**
BillFundbillApplyResponse billFundbillApply(BillFundbillApplyRequest request)

资金账单申请

资金账单申请

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Std\StdClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Std\Model\BillFundbillApplyRequest();
$request->setStartDate("startDate_example");
$request->setEndDate("endDate_example");
$request->setMerchantNo("merchantNo_example");
$request->setAccountType("accountType_example");
$request->setNotifyUrl("notifyUrl_example");

try {
    $response = $api_client->billFundbillApply($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling StdClient->billFundbillApply: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **startDate** | **string**|  | [optional]
 **endDate** | **string**|  | [optional]
 **merchantNo** | **string**|  | [optional]
 **accountType** | **string**|  | [optional]
 **notifyUrl** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Std\Model\BillFundbillApplyManualGenerationResponseDTOResult**](../Model/BillFundbillApplyManualGenerationResponseDTOResult.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **billFundbillDownload**
YosDownloadResponse billFundbillDownload(BillFundbillDownloadRequest request)

资金账单下载

资金账单下载

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Std\StdClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Std\Model\BillFundbillDownloadRequest();
$request->setMerchantNo("merchantNo_example");
$request->setFileId("fileId_example");

try {
    $response = $api_client->billFundbillDownload($request);
    $response->save('targetFilePath');
}catch (\Exception $e) {
    echo 'Exception when calling StdClient->billFundbillDownload: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **merchantNo** | **string**|  |
 **fileId** | **string**|  |

### Return type
[**Resource**](../Model/Resource.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/octet-stream

# **billTradedaydownload**
YosDownloadResponse billTradedaydownload(BillTradedaydownloadRequest request)

交易日对账下载

交易日对账下载，具体请参考<a href=\"https://open.yeepay.com/docs/v2/products/ptssfk/others/5f9a6ea1f8301e001b1a870f/index.html\">对账文件说明</a>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Std\StdClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Std\Model\BillTradedaydownloadRequest();
$request->setMerchantNo("merchantNo_example");
$request->setDayString("dayString_example");
$request->setDataType("dataType_example");

try {
    $response = $api_client->billTradedaydownload($request);
    $response->save('targetFilePath');
}catch (\Exception $e) {
    echo 'Exception when calling StdClient->billTradedaydownload: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **merchantNo** | **string**|  | [optional]
 **dayString** | **string**|  | [optional]
 **dataType** | **string**|  | [optional]

### Return type
[**Resource**](../Model/Resource.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/octet-stream

