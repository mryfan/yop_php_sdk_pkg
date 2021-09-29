# Yeepay\Yop\Sdk\Bill

All URIs are relative to *http://localhost:8080*

Method | HTTP request | Description
------------- | ------------- | -------------
[**download**](Bill.md#download) | **GET** /yos/v1.0/bill/download | 账户对账单-下载


# **download**
YosDownloadResponse download(DownloadRequest request)

账户对账单-下载

<p>请求成功返回的是一个数据流，把数据流处理后进行对账。获取对账文件时请不要以表头长度来截取对账文件信息，后期可能会新增表头参数，每天凌晨定时生成前一天的对账文件，故请商户9:00 之后下载前一天的对账文件,具体请参考<a href=\"https://open.yeepay.com/docs/v2/products/ptssfk/others/5f9a6ea1f8301e001b1a870f/index.html\">对账文件说明</a></p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Bill\BillClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Bill\Model\DownloadRequest();
$request->setBizType("bizType_example");
$request->setBillDate("2020-07-01");

try {
    $response = $api_client->download($request);
    $response->save('targetFilePath');
}catch (\Exception $e) {
    echo 'Exception when calling BillClient->download: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **bizType** | **string**| 账单类型&lt;br&gt;UA_PAY:企业付款 &lt;br&gt;UA_PAY_REFUND:企业付款冲退 &lt;br&gt;UA_WITHDRAW:企业账户提现 &lt;br&gt;UA_WITHDRAW_REFUND:企业账户提现冲退 &lt;br&gt;UA_TRANSFER:企业账户转账 &lt;br&gt;UA_RECHARGE:企业账户充值 &lt;br&gt;TOGETHERANDALLOCATE:集团资金划拨 |
 **billDate** | **string**| 账单日期&lt;br&gt;不填默认昨日 | [optional]

### Return type
[**Resource**](../Model/Resource.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/octet-stream

