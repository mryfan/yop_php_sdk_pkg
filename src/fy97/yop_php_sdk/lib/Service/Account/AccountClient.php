<?php


namespace Fy\Yeepay\Yop\Sdk\Service\Account;


use Fy\Yeepay\Yop\Sdk\Client\ClientExecutionParams;
use Fy\Yeepay\Yop\Sdk\Client\ClientHandler;
use Fy\Yeepay\Yop\Sdk\Client\ClientParams;
use Fy\Yeepay\Yop\Sdk\Exception\YopClientException;
use Fy\Yeepay\Yop\Sdk\Service\Account\Model as Model;

class AccountClient
{
    /**
     * @var ClientHandler
     */
    private $clientHandler;

    /**
     * AccountClient constructor.
     * @param ClientParams $clientParams
     */
    function __construct(ClientParams $clientParams)
    {
        $this->clientHandler = new ClientHandler($clientParams);
    }

    /**
     * @param Model\AccountinfosQueryRequest $request
     * @return Model\AccountinfosQueryResponse
     * @throws YopClientException
     */
    public function accountinfosQuery(Model\AccountinfosQueryRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        if ($request->getMerchantNo() == null) {
            throw new YopClientException("request.merchantNo is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\AccountinfosQueryRequestMarshaller::getInstance(),
            Model\AccountinfosQueryResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\AutoWithdrawRuleCancelRequest $request
     * @return Model\AutoWithdrawRuleCancelResponse
     * @throws YopClientException
     */
    public function autoWithdrawRuleCancel(Model\AutoWithdrawRuleCancelRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\AutoWithdrawRuleCancelRequestMarshaller::getInstance(),
            Model\AutoWithdrawRuleCancelResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\AutoWithdrawRuleQueryRequest $request
     * @return Model\AutoWithdrawRuleQueryResponse
     * @throws YopClientException
     */
    public function autoWithdrawRuleQuery(Model\AutoWithdrawRuleQueryRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        if ($request->getParentMerchantNo() == null) {
            throw new YopClientException("request.parentMerchantNo is required.");
        }
        if ($request->getMerchantNo() == null) {
            throw new YopClientException("request.merchantNo is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\AutoWithdrawRuleQueryRequestMarshaller::getInstance(),
            Model\AutoWithdrawRuleQueryResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\AutoWithdrawRuleSetRequest $request
     * @return Model\AutoWithdrawRuleSetResponse
     * @throws YopClientException
     */
    public function autoWithdrawRuleSet(Model\AutoWithdrawRuleSetRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\AutoWithdrawRuleSetRequestMarshaller::getInstance(),
            Model\AutoWithdrawRuleSetResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\BalanceQueryRequest $request
     * @return Model\BalanceQueryResponse
     * @throws YopClientException
     */
    public function balanceQuery(Model\BalanceQueryRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        if ($request->getMerchantNo() == null) {
            throw new YopClientException("request.merchantNo is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\BalanceQueryRequestMarshaller::getInstance(),
            Model\BalanceQueryResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\EnterpriseAccountPayOrderRequest $request
     * @return Model\EnterpriseAccountPayOrderResponse
     * @throws YopClientException
     */
    public function enterpriseAccountPayOrder(Model\EnterpriseAccountPayOrderRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        if ($request->getBody() == null) {
            throw new YopClientException("request.body is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\EnterpriseAccountPayOrderRequestMarshaller::getInstance(),
            Model\EnterpriseAccountPayOrderResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\EnterpriseAutoPaymentOrderRequest $request
     * @return Model\EnterpriseAutoPaymentOrderResponse
     * @throws YopClientException
     */
    public function enterpriseAutoPaymentOrder(Model\EnterpriseAutoPaymentOrderRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\EnterpriseAutoPaymentOrderRequestMarshaller::getInstance(),
            Model\EnterpriseAutoPaymentOrderResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\EnterpriseAutoPaymentQueryRequest $request
     * @return Model\EnterpriseAutoPaymentQueryResponse
     * @throws YopClientException
     */
    public function enterpriseAutoPaymentQuery(Model\EnterpriseAutoPaymentQueryRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        if ($request->getMerchantNo() == null) {
            throw new YopClientException("request.merchantNo is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\EnterpriseAutoPaymentQueryRequestMarshaller::getInstance(),
            Model\EnterpriseAutoPaymentQueryResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\EnterpriseWithholdingOrderRequest $request
     * @return Model\EnterpriseWithholdingOrderResponse
     * @throws YopClientException
     */
    public function enterpriseWithholdingOrder(Model\EnterpriseWithholdingOrderRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\EnterpriseWithholdingOrderRequestMarshaller::getInstance(),
            Model\EnterpriseWithholdingOrderResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\PayBatchOrderRequest $request
     * @return Model\PayBatchOrderResponse
     * @throws YopClientException
     */
    public function payBatchOrder(Model\PayBatchOrderRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        if ($request->getBody() == null) {
            throw new YopClientException("request.body is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\PayBatchOrderRequestMarshaller::getInstance(),
            Model\PayBatchOrderResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\PayBatchQueryRequest $request
     * @return Model\PayBatchQueryResponse
     * @throws YopClientException
     */
    public function payBatchQuery(Model\PayBatchQueryRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        if ($request->getBatchNo() == null) {
            throw new YopClientException("request.batchNo is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\PayBatchQueryRequestMarshaller::getInstance(),
            Model\PayBatchQueryResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\PayCancelRequest $request
     * @return Model\PayCancelResponse
     * @throws YopClientException
     */
    public function payCancel(Model\PayCancelRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\PayCancelRequestMarshaller::getInstance(),
            Model\PayCancelResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\PayOrderRequest $request
     * @return Model\PayOrderResponse
     * @throws YopClientException
     */
    public function payOrder(Model\PayOrderRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\PayOrderRequestMarshaller::getInstance(),
            Model\PayOrderResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\PayQueryRequest $request
     * @return Model\PayQueryResponse
     * @throws YopClientException
     */
    public function payQuery(Model\PayQueryRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        if ($request->getParentMerchantNo() == null) {
            throw new YopClientException("request.parentMerchantNo is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\PayQueryRequestMarshaller::getInstance(),
            Model\PayQueryResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\ReceiptGetRequest $request
     * @return Model\ReceiptGetResponse
     * @throws YopClientException
     */
    public function receiptGet(Model\ReceiptGetRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        if ($request->getParentMerchantNo() == null) {
            throw new YopClientException("request.parentMerchantNo is required.");
        }
        if ($request->getOrderNo() == null) {
            throw new YopClientException("request.orderNo is required.");
        }
        if ($request->getTradeType() == null) {
            throw new YopClientException("request.tradeType is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\ReceiptGetRequestMarshaller::getInstance(),
            Model\ReceiptGetResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\RechargeBatchQueryRequest $request
     * @return Model\RechargeBatchQueryResponse
     * @throws YopClientException
     */
    public function rechargeBatchQuery(Model\RechargeBatchQueryRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\RechargeBatchQueryRequestMarshaller::getInstance(),
            Model\RechargeBatchQueryResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\RechargeOnlinebankOrderRequest $request
     * @return Model\RechargeOnlinebankOrderResponse
     * @throws YopClientException
     */
    public function rechargeOnlinebankOrder(Model\RechargeOnlinebankOrderRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\RechargeOnlinebankOrderRequestMarshaller::getInstance(),
            Model\RechargeOnlinebankOrderResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\RechargeOrderRequest $request
     * @return Model\RechargeOrderResponse
     * @throws YopClientException
     */
    public function rechargeOrder(Model\RechargeOrderRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\RechargeOrderRequestMarshaller::getInstance(),
            Model\RechargeOrderResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\RechargeQueryRequest $request
     * @return Model\RechargeQueryResponse
     * @throws YopClientException
     */
    public function rechargeQuery(Model\RechargeQueryRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        if ($request->getParentMerchantNo() == null) {
            throw new YopClientException("request.parentMerchantNo is required.");
        }
        if ($request->getMerchantNo() == null) {
            throw new YopClientException("request.merchantNo is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\RechargeQueryRequestMarshaller::getInstance(),
            Model\RechargeQueryResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\SupplierApplyRequest $request
     * @return Model\SupplierApplyResponse
     * @throws YopClientException
     */
    public function supplierApply(Model\SupplierApplyRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        if ($request->getBody() == null) {
            throw new YopClientException("request.body is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\SupplierApplyRequestMarshaller::getInstance(),
            Model\SupplierApplyResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\SupplierPayOrderRequest $request
     * @return Model\SupplierPayOrderResponse
     * @throws YopClientException
     */
    public function supplierPayOrder(Model\SupplierPayOrderRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\SupplierPayOrderRequestMarshaller::getInstance(),
            Model\SupplierPayOrderResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\SupplierQueryRequest $request
     * @return Model\SupplierQueryResponse
     * @throws YopClientException
     */
    public function supplierQuery(Model\SupplierQueryRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        if ($request->getMerchantNo() == null) {
            throw new YopClientException("request.merchantNo is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\SupplierQueryRequestMarshaller::getInstance(),
            Model\SupplierQueryResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\SupplierQueryProgressRequest $request
     * @return Model\SupplierQueryProgressResponse
     * @throws YopClientException
     */
    public function supplierQueryProgress(Model\SupplierQueryProgressRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        if ($request->getRequestNo() == null) {
            throw new YopClientException("request.requestNo is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\SupplierQueryProgressRequestMarshaller::getInstance(),
            Model\SupplierQueryProgressResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\TransferB2bOrderRequest $request
     * @return Model\TransferB2bOrderResponse
     * @throws YopClientException
     */
    public function transferB2bOrder(Model\TransferB2bOrderRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\TransferB2bOrderRequestMarshaller::getInstance(),
            Model\TransferB2bOrderResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\TransferB2bQueryRequest $request
     * @return Model\TransferB2bQueryResponse
     * @throws YopClientException
     */
    public function transferB2bQuery(Model\TransferB2bQueryRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        if ($request->getParentMerchantNo() == null) {
            throw new YopClientException("request.parentMerchantNo is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\TransferB2bQueryRequestMarshaller::getInstance(),
            Model\TransferB2bQueryResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\WithdrawCardBindRequest $request
     * @return Model\WithdrawCardBindResponse
     * @throws YopClientException
     */
    public function withdrawCardBind(Model\WithdrawCardBindRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\WithdrawCardBindRequestMarshaller::getInstance(),
            Model\WithdrawCardBindResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\WithdrawCardModifyRequest $request
     * @return Model\WithdrawCardModifyResponse
     * @throws YopClientException
     */
    public function withdrawCardModify(Model\WithdrawCardModifyRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\WithdrawCardModifyRequestMarshaller::getInstance(),
            Model\WithdrawCardModifyResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\WithdrawCardQueryRequest $request
     * @return Model\WithdrawCardQueryResponse
     * @throws YopClientException
     */
    public function withdrawCardQuery(Model\WithdrawCardQueryRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        if ($request->getMerchantNo() == null) {
            throw new YopClientException("request.merchantNo is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\WithdrawCardQueryRequestMarshaller::getInstance(),
            Model\WithdrawCardQueryResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\WithdrawOrderRequest $request
     * @return Model\WithdrawOrderResponse
     * @throws YopClientException
     */
    public function withdrawOrder(Model\WithdrawOrderRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\WithdrawOrderRequestMarshaller::getInstance(),
            Model\WithdrawOrderResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\WithdrawQueryRequest $request
     * @return Model\WithdrawQueryResponse
     * @throws YopClientException
     */
    public function withdrawQuery(Model\WithdrawQueryRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        if ($request->getParentMerchantNo() == null) {
            throw new YopClientException("request.parentMerchantNo is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\WithdrawQueryRequestMarshaller::getInstance(),
            Model\WithdrawQueryResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
}
