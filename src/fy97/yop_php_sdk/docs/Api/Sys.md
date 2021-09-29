# Yeepay\Yop\Sdk\Sys

All URIs are relative to *http://localhost:8080*

Method | HTTP request | Description
------------- | ------------- | -------------
[**merchantQualUpload**](Sys.md#merchantQualUpload) | **POST** /yos/v1.0/sys/merchant/qual/upload | 子商户入网资质文件上传


# **merchantQualUpload**
MerchantQualUploadResponse merchantQualUpload(MerchantQualUploadRequest request)

子商户入网资质文件上传

<p>子商户入网资质文件上传，程序实现方式请参考，<a href=\"https://open.yeepay.com/docs/v2/products/opr/others/5e941bd9c73481001a17bd85/index.html\">文件上传程序实现样例</a ></p > <p>银行卡图片、身份证正反面不能超过1M</p > <p class=\"p1\">营业执照图片 不能超过2.5M</p > <p class=\"p1\">格式为 JPG（JPEG），BMP，PNG，GIF，TIFF，PDF</p >

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Sys\SysClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Sys\Model\MerchantQualUploadRequest();
$request->setMerQual(fopen("/path/to/file", "r"));

try {
    $response = $api_client->merchantQualUpload($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling SysClient->merchantQualUpload: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **merQual** | **Resource****Resource**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Sys\Model\MerchantQualUploadMerFileUploadRespDtoResult**](../Model/MerchantQualUploadMerFileUploadRespDtoResult.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/json

