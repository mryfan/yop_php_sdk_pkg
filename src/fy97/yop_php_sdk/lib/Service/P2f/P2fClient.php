<?php


namespace Fy\Yeepay\Yop\Sdk\Service\P2f;


use Fy\Yeepay\Yop\Sdk\Client\ClientExecutionParams;
use Fy\Yeepay\Yop\Sdk\Client\ClientHandler;
use Fy\Yeepay\Yop\Sdk\Client\ClientParams;
use Fy\Yeepay\Yop\Sdk\Exception\YopClientException;
use Fy\Yeepay\Yop\Sdk\Service\P2f\Model as Model;

class P2fClient
{
    /**
     * @var ClientHandler
     */
    private $clientHandler;

    /**
     * P2fClient constructor.
     * @param ClientParams $clientParams
     */
    function __construct(ClientParams $clientParams)
    {
        $this->clientHandler = new ClientHandler($clientParams);
    }

    /**
     * @param Model\CompanyFinanceAccountRequest $request
     * @return Model\CompanyFinanceAccountResponse
     * @throws YopClientException
     */
    public function companyFinanceAccount(Model\CompanyFinanceAccountRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\CompanyFinanceAccountRequestMarshaller::getInstance(),
            Model\CompanyFinanceAccountResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\CompanyFinanceAccountQueryRequest $request
     * @return Model\CompanyFinanceAccountQueryResponse
     * @throws YopClientException
     */
    public function companyFinanceAccountQuery(Model\CompanyFinanceAccountQueryRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        if ($request->getChannelCode() == null) {
            throw new YopClientException("request.channelCode is required.");
        }
        if ($request->getRequestNo() == null) {
            throw new YopClientException("request.requestNo is required.");
        }
        if ($request->getMerchantNo() == null) {
            throw new YopClientException("request.merchantNo is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\CompanyFinanceAccountQueryRequestMarshaller::getInstance(),
            Model\CompanyFinanceAccountQueryResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\CompanyFinanceAssetsQueryRequest $request
     * @return Model\CompanyFinanceAssetsQueryResponse
     * @throws YopClientException
     */
    public function companyFinanceAssetsQuery(Model\CompanyFinanceAssetsQueryRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        if ($request->getChannelCode() == null) {
            throw new YopClientException("request.channelCode is required.");
        }
        if ($request->getRequestNo() == null) {
            throw new YopClientException("request.requestNo is required.");
        }
        if ($request->getMerchantNo() == null) {
            throw new YopClientException("request.merchantNo is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\CompanyFinanceAssetsQueryRequestMarshaller::getInstance(),
            Model\CompanyFinanceAssetsQueryResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\CompanyFinanceOrderQueryRequest $request
     * @return Model\CompanyFinanceOrderQueryResponse
     * @throws YopClientException
     */
    public function companyFinanceOrderQuery(Model\CompanyFinanceOrderQueryRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        if ($request->getBizType() == null) {
            throw new YopClientException("request.bizType is required.");
        }
        if ($request->getChannelCode() == null) {
            throw new YopClientException("request.channelCode is required.");
        }
        if ($request->getRequestNo() == null) {
            throw new YopClientException("request.requestNo is required.");
        }
        if ($request->getMerchantNo() == null) {
            throw new YopClientException("request.merchantNo is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\CompanyFinanceOrderQueryRequestMarshaller::getInstance(),
            Model\CompanyFinanceOrderQueryResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\CompanyFinancePurchaseOrderRequest $request
     * @return Model\CompanyFinancePurchaseOrderResponse
     * @throws YopClientException
     */
    public function companyFinancePurchaseOrder(Model\CompanyFinancePurchaseOrderRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\CompanyFinancePurchaseOrderRequestMarshaller::getInstance(),
            Model\CompanyFinancePurchaseOrderResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\CompanyFinanceRedeemOrderRequest $request
     * @return Model\CompanyFinanceRedeemOrderResponse
     * @throws YopClientException
     */
    public function companyFinanceRedeemOrder(Model\CompanyFinanceRedeemOrderRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\CompanyFinanceRedeemOrderRequestMarshaller::getInstance(),
            Model\CompanyFinanceRedeemOrderResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\CompanyFinanceSmallPaymentRequest $request
     * @return Model\CompanyFinanceSmallPaymentResponse
     * @throws YopClientException
     */
    public function companyFinanceSmallPayment(Model\CompanyFinanceSmallPaymentRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\CompanyFinanceSmallPaymentRequestMarshaller::getInstance(),
            Model\CompanyFinanceSmallPaymentResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\CompanyFinanceTransactionQueryRequest $request
     * @return Model\CompanyFinanceTransactionQueryResponse
     * @throws YopClientException
     */
    public function companyFinanceTransactionQuery(Model\CompanyFinanceTransactionQueryRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        if ($request->getStartDate() == null) {
            throw new YopClientException("request.startDate is required.");
        }
        if ($request->getEndDate() == null) {
            throw new YopClientException("request.endDate is required.");
        }
        if ($request->getChannelCode() == null) {
            throw new YopClientException("request.channelCode is required.");
        }
        if ($request->getRequestNo() == null) {
            throw new YopClientException("request.requestNo is required.");
        }
        if ($request->getMerchantNo() == null) {
            throw new YopClientException("request.merchantNo is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\CompanyFinanceTransactionQueryRequestMarshaller::getInstance(),
            Model\CompanyFinanceTransactionQueryResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\FileUploadRequest $request
     * @return Model\FileUploadResponse
     * @throws YopClientException
     */
    public function fileUpload(Model\FileUploadRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\FileUploadRequestMarshaller::getInstance(),
            Model\FileUploadResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
}
