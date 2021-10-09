# Yeepay\Yop\Sdk\Yop

All URIs are relative to *http://localhost:8080*

Method | HTTP request | Description
------------- | ------------- | -------------
[**oauth2ReportKey**](Yop.md#oauth2ReportKey) | **POST** /rest/v1.0/yop/oauth2/report-key | YOP报备临时公钥


# **oauth2ReportKey**
Oauth2ReportKeyResponse oauth2ReportKey(Oauth2ReportKeyRequest request)

YOP报备临时公钥

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Yop\YopClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Yop\Model\Oauth2ReportKeyRequest();
$request->setKeyType("keyType_example");
$request->setKey("key_example");

try {
    $response = $api_client->oauth2ReportKey($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling YopClient->oauth2ReportKey: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **keyType** | **string**|  | [optional]
 **key** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Yop\Model\Oauth2ReportKeyHandshakeResponseResult**](../Model/Oauth2ReportKeyHandshakeResponseResult.md)
### Authorization

YOP-OAUTH2


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

