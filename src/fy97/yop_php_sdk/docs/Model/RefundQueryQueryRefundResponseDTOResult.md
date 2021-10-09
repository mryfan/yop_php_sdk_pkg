# RefundQueryQueryRefundResponseDTOResult

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**code** | **string** | 返回码 | [optional] 
**message** | **string** | 返回信息 | [optional] 
**parentMerchantNo** | **string** | 发起方商编 | [optional] 
**merchantNo** | **string** | 商户编号 | [optional] 
**orderId** | **string** | 商户收款请求号 | [optional] 
**refundRequestId** | **string** | 商户退款请求号 | [optional] 
**uniqueOrderNo** | **string** | 易宝收款订单号 | [optional] 
**uniqueRefundNo** | **string** | 易宝退款订单号 | [optional] 
**refundAmount** | **float** | 退款申请金额 | [optional] 
**returnMerchantFee** | **float** | 退回商户手续费 | [optional] 
**status** | **string** | 退款状态 | [optional] 
**description** | **string** | 退款原因 | [optional] 
**refundRequestDate** | **string** | 退款受理时间 | [optional] 
**refundSuccessDate** | **string** | 退款成功日期 | [optional] 
**failReason** | **string** | 退款失败原因 | [optional] 
**realRefundAmount** | **float** | 实际退款金额 | [optional] 
**cashRefundFee** | **float** | 用户实退金额 | [optional] 
**bankPromotionInfoDTOList** | [**\Yeepay\Yop\Sdk\Service\Trade\Model\RefundQueryBankPromotionInfoDTOResult[]**](RefundQueryBankPromotionInfoDTOResult.md) | 渠道侧优惠退回列表 | [optional] 
**ypPromotionInfoDTOList** | [**\Yeepay\Yop\Sdk\Service\Trade\Model\RefundQueryYpPromotionRefundInfoDTOResult[]**](RefundQueryYpPromotionRefundInfoDTOResult.md) | 易宝侧优惠退回列表 | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


