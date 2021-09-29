# Yeepay\Yop\Sdk\Cashier

All URIs are relative to *http://localhost:8080*

Method | HTTP request | Description
------------- | ------------- | -------------
[**payLinkOrder**](Cashier.md#payLinkOrder) | **POST** /rest/v1.0/cashier/pay-link/order | 生成聚合订单码


# **payLinkOrder**
PayLinkOrderResponse payLinkOrder(PayLinkOrderRequest request)

生成聚合订单码

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Cashier\CashierClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Cashier\Model\PayLinkOrderRequest();
$request->setParentMerchantNo("parentMerchantNo_example");
$request->setMerchantNo("merchantNo_example");
$request->setOrderId("orderId_example");
$request->setGoodsName("goodsName_example");
$request->setAmount(1.2);
$request->setExpiredTime("2021-09-13 19:24:35");
$request->setNotifyUrl("https://notify.merchant.com/xxx");
$request->setScene("scene_example");
$request->setFundProcessType("fundProcessType_example");
$request->setAppId("appId_example");

try {
    $response = $api_client->payLinkOrder($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling CashierClient->payLinkOrder: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **parentMerchantNo** | **string**|  | [optional]
 **merchantNo** | **string**|  | [optional]
 **orderId** | **string**|  | [optional]
 **goodsName** | **string**|  | [optional]
 **amount** | **float**|  | [optional]
 **expiredTime** | **string**|  | [optional]
 **notifyUrl** | **string**|  | [optional]
 **scene** | **string**|  | [optional]
 **fundProcessType** | **string**|  | [optional]
 **appId** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Cashier\Model\PayLinkOrderAggregationPayLinkResponseDTOResult**](../Model/PayLinkOrderAggregationPayLinkResponseDTOResult.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

