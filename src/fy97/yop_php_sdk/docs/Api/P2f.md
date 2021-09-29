# Yeepay\Yop\Sdk\P2f

All URIs are relative to *http://localhost:8080*

Method | HTTP request | Description
------------- | ------------- | -------------
[**companyFinanceAccount**](P2f.md#companyFinanceAccount) | **POST** /rest/v1.0/p2f/company-finance/account | 对公开户
[**companyFinanceAccountQuery**](P2f.md#companyFinanceAccountQuery) | **GET** /rest/v1.0/p2f/company-finance/account/query | 对公开户查询
[**companyFinanceAssetsQuery**](P2f.md#companyFinanceAssetsQuery) | **GET** /rest/v1.0/p2f/company-finance/assets/query | 对公资产查询
[**companyFinanceOrderQuery**](P2f.md#companyFinanceOrderQuery) | **GET** /rest/v1.0/p2f/company-finance/order/query | 对公申购赎回订单状态查询
[**companyFinancePurchaseOrder**](P2f.md#companyFinancePurchaseOrder) | **POST** /rest/v1.0/p2f/company-finance/purchase-order | 对公申购
[**companyFinanceRedeemOrder**](P2f.md#companyFinanceRedeemOrder) | **POST** /rest/v1.0/p2f/company-finance/redeem-order | 对公赎回
[**companyFinanceSmallPayment**](P2f.md#companyFinanceSmallPayment) | **POST** /rest/v1.0/p2f/company-finance/small-payment | 小额打款鉴权
[**companyFinanceTransactionQuery**](P2f.md#companyFinanceTransactionQuery) | **GET** /rest/v1.0/p2f/company-finance/transaction/query | 对公交易明细查询
[**fileUpload**](P2f.md#fileUpload) | **POST** /yos/v1.0/p2f/file-upload | 文件上传


# **companyFinanceAccount**
CompanyFinanceAccountResponse companyFinanceAccount(CompanyFinanceAccountRequest request)

对公开户

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\P2f\P2fClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\P2f\Model\CompanyFinanceAccountRequest();
$request->setCompName("compName_example");
$request->setCompNo("compNo_example");
$request->setCustomerCertExpiry("customerCertExpiry_example");
$request->setRegSerialNoExpired("regSerialNoExpired_example");
$request->setCompTelephone("compTelephone_example");
$request->setOrgSMSMobile("orgSMSMobile_example");
$request->setUniteCreditCode("uniteCreditCode_example");
$request->setCompEmail("compEmail_example");
$request->setCompAddr("compAddr_example");
$request->setZipCode("zipCode_example");
$request->setBizScope("bizScope_example");
$request->setLegalName("legalName_example");
$request->setLegalIdNo("legalIdNo_example");
$request->setLegalStartDate("legalStartDate_example");
$request->setLegalExpiredDate("legalExpiredDate_example");
$request->setLegalMobile("legalMobile_example");
$request->setBankCode("bankCode_example");
$request->setBankName("bankName_example");
$request->setBankCardNo("bankCardNo_example");
$request->setBindType("bindType_example");
$request->setBindAcctBranch("bindAcctBranch_example");
$request->setThreeInOneFlag("threeInOneFlag_example");
$request->setUniteCreditCodePath("uniteCreditCodePath_example");
$request->setFrontPhotoPath("frontPhotoPath_example");
$request->setBackPhotoPath("backPhotoPath_example");
$request->setOpenAcctPermitCodePath("openAcctPermitCodePath_example");
$request->setChannelCode("channelCode_example");
$request->setRequestNo("requestNo_example");
$request->setMerchantNo("merchantNo_example");

try {
    $response = $api_client->companyFinanceAccount($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling P2fClient->companyFinanceAccount: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **compName** | **string**|  | [optional]
 **compNo** | **string**|  | [optional]
 **customerCertExpiry** | **string**|  | [optional]
 **regSerialNoExpired** | **string**|  | [optional]
 **compTelephone** | **string**|  | [optional]
 **orgSMSMobile** | **string**|  | [optional]
 **uniteCreditCode** | **string**|  | [optional]
 **compEmail** | **string**|  | [optional]
 **compAddr** | **string**|  | [optional]
 **zipCode** | **string**|  | [optional]
 **bizScope** | **string**|  | [optional]
 **legalName** | **string**|  | [optional]
 **legalIdNo** | **string**|  | [optional]
 **legalStartDate** | **string**|  | [optional]
 **legalExpiredDate** | **string**|  | [optional]
 **legalMobile** | **string**|  | [optional]
 **bankCode** | **string**|  | [optional]
 **bankName** | **string**|  | [optional]
 **bankCardNo** | **string**|  | [optional]
 **bindType** | **string**|  | [optional]
 **bindAcctBranch** | **string**|  | [optional]
 **threeInOneFlag** | **string**|  | [optional]
 **uniteCreditCodePath** | **string**|  | [optional]
 **frontPhotoPath** | **string**|  | [optional]
 **backPhotoPath** | **string**|  | [optional]
 **openAcctPermitCodePath** | **string**|  | [optional]
 **channelCode** | **string**|  | [optional]
 **requestNo** | **string**|  | [optional]
 **merchantNo** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\P2f\Model\CompanyFinanceAccountCompCustOpenAcctRspDTOResult**](../Model/CompanyFinanceAccountCompCustOpenAcctRspDTOResult.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **companyFinanceAccountQuery**
CompanyFinanceAccountQueryResponse companyFinanceAccountQuery(CompanyFinanceAccountQueryRequest request)

对公开户查询

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\P2f\P2fClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\P2f\Model\CompanyFinanceAccountQueryRequest();
$request->setChannelCode("channelCode_example");
$request->setRequestNo("requestNo_example");
$request->setMerchantNo("merchantNo_example");

try {
    $response = $api_client->companyFinanceAccountQuery($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling P2fClient->companyFinanceAccountQuery: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **channelCode** | **string**|  |
 **requestNo** | **string**|  |
 **merchantNo** | **string**|  |

### Return type
[**\Yeepay\Yop\Sdk\Service\P2f\Model\CompanyFinanceAccountQueryCompCustOpenAcctRspDTOResult**](../Model/CompanyFinanceAccountQueryCompCustOpenAcctRspDTOResult.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **companyFinanceAssetsQuery**
CompanyFinanceAssetsQueryResponse companyFinanceAssetsQuery(CompanyFinanceAssetsQueryRequest request)

对公资产查询

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\P2f\P2fClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\P2f\Model\CompanyFinanceAssetsQueryRequest();
$request->setChannelCode("channelCode_example");
$request->setRequestNo("requestNo_example");
$request->setMerchantNo("merchantNo_example");

try {
    $response = $api_client->companyFinanceAssetsQuery($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling P2fClient->companyFinanceAssetsQuery: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **channelCode** | **string**|  |
 **requestNo** | **string**|  |
 **merchantNo** | **string**|  |

### Return type
[**\Yeepay\Yop\Sdk\Service\P2f\Model\CompanyFinanceAssetsQueryCompQueryAssetsResponseDTOResult**](../Model/CompanyFinanceAssetsQueryCompQueryAssetsResponseDTOResult.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **companyFinanceOrderQuery**
CompanyFinanceOrderQueryResponse companyFinanceOrderQuery(CompanyFinanceOrderQueryRequest request)

对公申购赎回订单状态查询

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\P2f\P2fClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\P2f\Model\CompanyFinanceOrderQueryRequest();
$request->setBizType("bizType_example");
$request->setChannelCode("channelCode_example");
$request->setRequestNo("requestNo_example");
$request->setMerchantNo("merchantNo_example");

try {
    $response = $api_client->companyFinanceOrderQuery($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling P2fClient->companyFinanceOrderQuery: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **bizType** | **string**| 可选项如下:&lt;br&gt;PURCHASE:申购&lt;br&gt;REDEEM:赎回 |
 **channelCode** | **string**|  |
 **requestNo** | **string**|  |
 **merchantNo** | **string**|  |

### Return type
[**\Yeepay\Yop\Sdk\Service\P2f\Model\CompanyFinanceOrderQueryCompQueryOrderStatusResponseDTOResult**](../Model/CompanyFinanceOrderQueryCompQueryOrderStatusResponseDTOResult.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **companyFinancePurchaseOrder**
CompanyFinancePurchaseOrderResponse companyFinancePurchaseOrder(CompanyFinancePurchaseOrderRequest request)

对公申购

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\P2f\P2fClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\P2f\Model\CompanyFinancePurchaseOrderRequest();
$request->setProdCode("prodCode_example");
$request->setAmount(1.2);
$request->setChannelCode("channelCode_example");
$request->setRequestNo("requestNo_example");
$request->setMerchantNo("merchantNo_example");
$request->setP2fOpenAcctNo("p2fOpenAcctNo_example");

try {
    $response = $api_client->companyFinancePurchaseOrder($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling P2fClient->companyFinancePurchaseOrder: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **prodCode** | **string**|  | [optional]
 **amount** | **float**|  | [optional]
 **channelCode** | **string**|  | [optional]
 **requestNo** | **string**|  | [optional]
 **merchantNo** | **string**|  | [optional]
 **p2fOpenAcctNo** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\P2f\Model\CompanyFinancePurchaseOrderCompTranPurchaseRspDTOResult**](../Model/CompanyFinancePurchaseOrderCompTranPurchaseRspDTOResult.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **companyFinanceRedeemOrder**
CompanyFinanceRedeemOrderResponse companyFinanceRedeemOrder(CompanyFinanceRedeemOrderRequest request)

对公赎回

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\P2f\P2fClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\P2f\Model\CompanyFinanceRedeemOrderRequest();
$request->setP2fOpenAcctNo("p2fOpenAcctNo_example");
$request->setProdCode("prodCode_example");
$request->setAmount(1.2);
$request->setRemark("remark_example");
$request->setChannelCode("channelCode_example");
$request->setRequestNo("requestNo_example");
$request->setMerchantNo("merchantNo_example");

try {
    $response = $api_client->companyFinanceRedeemOrder($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling P2fClient->companyFinanceRedeemOrder: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **p2fOpenAcctNo** | **string**|  | [optional]
 **prodCode** | **string**|  | [optional]
 **amount** | **float**|  | [optional]
 **remark** | **string**|  | [optional]
 **channelCode** | **string**|  | [optional]
 **requestNo** | **string**|  | [optional]
 **merchantNo** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\P2f\Model\CompanyFinanceRedeemOrderCompTranRedeemRspDTOResult**](../Model/CompanyFinanceRedeemOrderCompTranRedeemRspDTOResult.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **companyFinanceSmallPayment**
CompanyFinanceSmallPaymentResponse companyFinanceSmallPayment(CompanyFinanceSmallPaymentRequest request)

小额打款鉴权

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\P2f\P2fClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\P2f\Model\CompanyFinanceSmallPaymentRequest();
$request->setConfirmCheckCode("confirmCheckCode_example");
$request->setChannelCode("channelCode_example");
$request->setRequestNo("requestNo_example");
$request->setMerchantNo("merchantNo_example");

try {
    $response = $api_client->companyFinanceSmallPayment($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling P2fClient->companyFinanceSmallPayment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **confirmCheckCode** | **string**|  | [optional]
 **channelCode** | **string**|  | [optional]
 **requestNo** | **string**|  | [optional]
 **merchantNo** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\P2f\Model\CompanyFinanceSmallPaymentCompCustOpenAcctConfirmRspDTOResult**](../Model/CompanyFinanceSmallPaymentCompCustOpenAcctConfirmRspDTOResult.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **companyFinanceTransactionQuery**
CompanyFinanceTransactionQueryResponse companyFinanceTransactionQuery(CompanyFinanceTransactionQueryRequest request)

对公交易明细查询

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\P2f\P2fClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\P2f\Model\CompanyFinanceTransactionQueryRequest();
$request->setStartDate("startDate_example");
$request->setEndDate("endDate_example");
$request->setChannelCode("channelCode_example");
$request->setRequestNo("requestNo_example");
$request->setMerchantNo("merchantNo_example");

try {
    $response = $api_client->companyFinanceTransactionQuery($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling P2fClient->companyFinanceTransactionQuery: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **startDate** | **string**| 起始日期，格式yyyyMMdd |
 **endDate** | **string**| 结束日期，格式yyyyMMdd |
 **channelCode** | **string**|  |
 **requestNo** | **string**|  |
 **merchantNo** | **string**|  |

### Return type
[**\Yeepay\Yop\Sdk\Service\P2f\Model\CompanyFinanceTransactionQueryCompQueryTransactionListResponseDTOResult**](../Model/CompanyFinanceTransactionQueryCompQueryTransactionListResponseDTOResult.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **fileUpload**
FileUploadResponse fileUpload(FileUploadRequest request)

文件上传

文件上传

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\P2f\P2fClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\P2f\Model\FileUploadRequest();
$request->setRequestNo("requestNo_example");
$request->setIdentityType("identityType_example");
$request->setIdentityId("identityId_example");
$request->setIdType("ID");
$request->setIdNO("idNO_example");
$request->setFileType("fileType_example");
$request->setImage(fopen("/path/to/file", "r"));

try {
    $response = $api_client->fileUpload($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling P2fClient->fileUpload: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **requestNo** | **string**|  | [optional]
 **identityType** | **string**|  | [optional]
 **identityId** | **string**|  | [optional]
 **idType** | **string**|  | [optional]
 **idNO** | **string**|  | [optional]
 **fileType** | **string**|  | [optional]
 **image** | **Resource****Resource**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\P2f\Model\FileUploadCustFileUploadResponseDTOResult**](../Model/FileUploadCustFileUploadResponseDTOResult.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/json

