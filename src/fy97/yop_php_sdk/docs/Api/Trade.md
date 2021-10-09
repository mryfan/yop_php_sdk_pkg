# Yeepay\Yop\Sdk\Trade

All URIs are relative to *http://localhost:8080*

Method | HTTP request | Description
------------- | ------------- | -------------
[**order**](Trade.md#order) | **POST** /rest/v1.0/trade/order | 交易下单
[**orderClose**](Trade.md#orderClose) | **POST** /rest/v1.0/trade/order/close | 关闭订单
[**orderCombineQuery**](Trade.md#orderCombineQuery) | **GET** /rest/v1.0/trade/order/combine-query | 查询合并订单
[**orderQuery**](Trade.md#orderQuery) | **GET** /rest/v1.0/trade/order/query | 查询订单
[**receiptDownload**](Trade.md#receiptDownload) | **GET** /yos/v1.0/trade/receipt/download | 交易回单
[**refund**](Trade.md#refund) | **POST** /rest/v1.0/trade/refund | 申请退款
[**refundEnd**](Trade.md#refundEnd) | **POST** /rest/v1.0/trade/refund/end | 结束退款
[**refundFast**](Trade.md#refundFast) | **POST** /rest/v1.0/trade/refund/fast | 申请极速退款
[**refundQuery**](Trade.md#refundQuery) | **GET** /rest/v1.0/trade/refund/query | 查询退款
[**refundSupply**](Trade.md#refundSupply) | **POST** /rest/v1.0/trade/refund/supply | 上送卡信息退款


# **order**
OrderResponse order(OrderRequest request)

交易下单

交易下单

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Trade\TradeClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Trade\Model\OrderRequest();
$request->setParentMerchantNo("parentMerchantNo_example");
$request->setMerchantNo("merchantNo_example");
$request->setOrderId("orderId_example");
$request->setOrderAmount("100.50");
$request->setGoodsName("goodsName_example");
$request->setFundProcessType("fundProcessType_example");
$request->setNotifyUrl("notifyUrl_example");
$request->setMemo("memo_example");
$request->setSubOrderDetail("subOrderDetail_example");
$request->setExpiredTime("expiredTime_example");
$request->setRedirectUrl("redirectUrl_example");
$request->setCsUrl("csUrl_example");
$request->setBusinessInfo("businessInfo_example");

try {
    $response = $api_client->order($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling TradeClient->order: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **parentMerchantNo** | **string**|  | [optional]
 **merchantNo** | **string**|  | [optional]
 **orderId** | **string**|  | [optional]
 **orderAmount** | **string**|  | [optional]
 **goodsName** | **string**|  | [optional]
 **fundProcessType** | **string**|  | [optional]
 **notifyUrl** | **string**|  | [optional]
 **memo** | **string**|  | [optional]
 **subOrderDetail** | **string**|  | [optional]
 **expiredTime** | **string**|  | [optional]
 **redirectUrl** | **string**|  | [optional]
 **csUrl** | **string**|  | [optional]
 **businessInfo** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Trade\Model\OrderYopCreateOrderV2ResDTOResult**](../Model/OrderYopCreateOrderV2ResDTOResult.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **orderClose**
OrderCloseResponse orderClose(OrderCloseRequest request)

关闭订单

关闭订单

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Trade\TradeClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Trade\Model\OrderCloseRequest();
$request->setOrderId("orderId_example");
$request->setUniqueOrderNo("uniqueOrderNo_example");
$request->setParentMerchantNo("parentMerchantNo_example");
$request->setMerchantNo("merchantNo_example");

try {
    $response = $api_client->orderClose($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling TradeClient->orderClose: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **orderId** | **string**|  | [optional]
 **uniqueOrderNo** | **string**|  | [optional]
 **parentMerchantNo** | **string**|  | [optional]
 **merchantNo** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Trade\Model\OrderCloseResponseOrderCloseDTOResult**](../Model/OrderCloseResponseOrderCloseDTOResult.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **orderCombineQuery**
OrderCombineQueryResponse orderCombineQuery(OrderCombineQueryRequest request)

查询合并订单

查询合并订单

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Trade\TradeClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Trade\Model\OrderCombineQueryRequest();
$request->setParentMerchantNo("parentMerchantNo_example");
$request->setOrderId("orderId_example");

try {
    $response = $api_client->orderCombineQuery($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling TradeClient->orderCombineQuery: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **parentMerchantNo** | **string**| 交易发起方商编，此处为平台商商户编号 |
 **orderId** | **string**| 交易下单时传入的合单收款请求号 |

### Return type
[**\Yeepay\Yop\Sdk\Service\Trade\Model\OrderCombineQueryYopQueryCombineOrderResDTOResult**](../Model/OrderCombineQueryYopQueryCombineOrderResDTOResult.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **orderQuery**
OrderQueryResponse orderQuery(OrderQueryRequest request)

查询订单

查询订单

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Trade\TradeClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Trade\Model\OrderQueryRequest();
$request->setParentMerchantNo("parentMerchantNo_example");
$request->setMerchantNo("merchantNo_example");
$request->setOrderId("orderId_example");

try {
    $response = $api_client->orderQuery($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling TradeClient->orderQuery: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **parentMerchantNo** | **string**| 发起方商户编号。与交易下单传入的保持一致 |
 **merchantNo** | **string**| 收款商户编号 |
 **orderId** | **string**| 交易下单传入的商户收款请求号。&lt;br&gt;(合单收款场景请传入子单的商户收款请求号) |

### Return type
[**\Yeepay\Yop\Sdk\Service\Trade\Model\OrderQueryYopQueryOrderResDTOResult**](../Model/OrderQueryYopQueryOrderResDTOResult.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **receiptDownload**
ReceiptDownloadResponse receiptDownload(ReceiptDownloadRequest request)

交易回单

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Trade\TradeClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Trade\Model\ReceiptDownloadRequest();
$request->setParentMerchantNo("parentMerchantNo_example");
$request->setMerchantNo("merchantNo_example");
$request->setOrderId("orderId_example");

try {
    $response = $api_client->receiptDownload($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling TradeClient->receiptDownload: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **parentMerchantNo** | **string**| *标准商户收付款方案中此参数与收款商户编号一致；&lt;br&gt;*平台商户收付款方案中此参数为平台商商户编号；&lt;br&gt;*服务商解决方案中，①标准商户收款时，该参数为标准商户商编 ②平台商收款或平台商入驻商户收款时，该参数为平台商商编。 |
 **merchantNo** | **string**| 收款商户商编。单笔收款必传，合单收款场景中上传子单域信息subOrderDetail里的merchantNo |
 **orderId** | **string**|  |

### Return type
[**\Yeepay\Yop\Sdk\Service\Trade\Model\ReceiptDownloadReceiptResponseDTOResult**](../Model/ReceiptDownloadReceiptResponseDTOResult.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **refund**
RefundResponse refund(RefundRequest request)

申请退款

<p>* 订单状态为“SUCCESS”时才能发起退款。</p> <p>* 退款支持单笔交易分多次退款，多次退款需要提交原支付订单的商户订单号和不同的退款单号，总退款金额不能超过用户实际支付金额。</p> <p>* 一笔退款失败后重新提交，请不要更换退款单号，请使用相同的商户退款请求号请求退款。</p> * 申请退款接口的响应参数code仅代表业务的受理情况，具体退款是否成功，需要通过申请退款或查询退款接口返回的status获取退款结果。</br>   <span>（1）当响应参数code=OPR00000时,说明易宝已受理该笔退款,此时需要根据status来判断退款状态；</span>   （2）当响应参数code≠OPR00000时,说明易宝没有受理该笔退款，可根据返回的message进行相应处理。

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Trade\TradeClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Trade\Model\RefundRequest();
$request->setParentMerchantNo("10012426723");
$request->setMerchantNo("10012426723");
$request->setOrderId("order123456789");
$request->setRefundRequestId("refundorder987654");
$request->setUniqueOrderNo("1001201612070000000000000565");
$request->setRefundAmount("88.88");
$request->setDescription("用户申请退货并退款");
$request->setMemo("memo_example");
$request->setRefundAccountType("FUND_ACCOUNT");
$request->setNotifyUrl("notifyUrl_example");
$request->setYpPromotionRefundInfo("ypPromotionRefundInfo_example");

try {
    $response = $api_client->refund($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling TradeClient->refund: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **parentMerchantNo** | **string**|  | [optional]
 **merchantNo** | **string**|  | [optional]
 **orderId** | **string**|  | [optional]
 **refundRequestId** | **string**|  | [optional]
 **uniqueOrderNo** | **string**|  | [optional]
 **refundAmount** | **string**|  | [optional]
 **description** | **string**|  | [optional]
 **memo** | **string**|  | [optional]
 **refundAccountType** | **string**|  | [optional]
 **notifyUrl** | **string**|  | [optional]
 **ypPromotionRefundInfo** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Trade\Model\RefundResponseRefundDTOResult**](../Model/RefundResponseRefundDTOResult.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **refundEnd**
RefundEndResponse refundEnd(RefundEndRequest request)

结束退款

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Trade\TradeClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Trade\Model\RefundEndRequest();
$request->setOrderId("orderId123456");
$request->setRefundRequestId("refund123456");
$request->setParentMerchantNo("10012426723");
$request->setMerchantNo("10012426723");

try {
    $response = $api_client->refundEnd($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling TradeClient->refundEnd: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **orderId** | **string**|  | [optional]
 **refundRequestId** | **string**|  | [optional]
 **parentMerchantNo** | **string**|  | [optional]
 **merchantNo** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Trade\Model\RefundEndYopEndRefundResponseDTOResult**](../Model/RefundEndYopEndRefundResponseDTOResult.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **refundFast**
RefundFastResponse refundFast(RefundFastRequest request)

申请极速退款

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Trade\TradeClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Trade\Model\RefundFastRequest();
$request->setOrderId("order123456789");
$request->setRefundRequestId("refundorder987654321");
$request->setRefundAmount("88.88");
$request->setDescription("用户申请退货");
$request->setRefundAccountType("FUND_ACCOUNT");
$request->setNotifyUrl("notifyUrl_example");
$request->setMemo("memo_example");
$request->setCardInfo("{\"remitBankCardNo\":\"上送持卡人卡号\", \"remitCardName\":\"上送持卡人姓名\", \"remitCardType\":\"上送卡类型\"}");
$request->setParentMerchantNo("10012426723");
$request->setMerchantNo("10012426723");

try {
    $response = $api_client->refundFast($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling TradeClient->refundFast: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **orderId** | **string**|  | [optional]
 **refundRequestId** | **string**|  | [optional]
 **refundAmount** | **string**|  | [optional]
 **description** | **string**|  | [optional]
 **refundAccountType** | **string**|  | [optional]
 **notifyUrl** | **string**|  | [optional]
 **memo** | **string**|  | [optional]
 **cardInfo** | **string**|  | [optional]
 **parentMerchantNo** | **string**|  | [optional]
 **merchantNo** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Trade\Model\RefundFastYopFastRefundResponseDTOResult**](../Model/RefundFastYopFastRefundResponseDTOResult.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **refundQuery**
RefundQueryResponse refundQuery(RefundQueryRequest request)

查询退款

<p>提交退款申请后，通过调用该接口查询退款状态</p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Trade\TradeClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Trade\Model\RefundQueryRequest();
$request->setParentMerchantNo("10012426723");
$request->setMerchantNo("10012426723");
$request->setOrderId("orderId_example");
$request->setRefundRequestId("refundRequestId_example");
$request->setUniqueRefundNo("uniqueRefundNo_example");

try {
    $response = $api_client->refundQuery($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling TradeClient->refundQuery: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **parentMerchantNo** | **string**| 发起方商户编号。与交易下单传入的保持一致 |
 **merchantNo** | **string**| 收款商户编号 |
 **orderId** | **string**| 收款交易对应的商户收款请求号 |
 **refundRequestId** | **string**| 商户退款请求号。可包含字母、数字、下划线；需要保证在商户端不重复。 |
 **uniqueRefundNo** | **string**| 商户退款请求对应在易宝的退款单号 | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Trade\Model\RefundQueryQueryRefundResponseDTOResult**](../Model/RefundQueryQueryRefundResponseDTOResult.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **refundSupply**
RefundSupplyResponse refundSupply(RefundSupplyRequest request)

上送卡信息退款

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Trade\TradeClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Trade\Model\RefundSupplyRequest();
$request->setOrderId("order123456789");
$request->setRefundRequestId("refundorder987654321");
$request->setCardInfo("{\"remitBankCardNo\":\"上送持卡人卡号\", \"remitCardName\":\"上送持卡人姓名\", \"remitCardType\":\"上送卡类型\"}");
$request->setParentMerchantNo("10012426723");
$request->setMerchantNo("10012426723");

try {
    $response = $api_client->refundSupply($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling TradeClient->refundSupply: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **orderId** | **string**|  | [optional]
 **refundRequestId** | **string**|  | [optional]
 **cardInfo** | **string**|  | [optional]
 **parentMerchantNo** | **string**|  | [optional]
 **merchantNo** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Trade\Model\RefundSupplyYopSupplyCardInfoRefundResponseDTOResult**](../Model/RefundSupplyYopSupplyCardInfoRefundResponseDTOResult.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

