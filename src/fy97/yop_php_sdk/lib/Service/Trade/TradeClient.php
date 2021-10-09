<?php


namespace Fy\Yeepay\Yop\Sdk\Service\Trade;


use Fy\Yeepay\Yop\Sdk\Client\ClientExecutionParams;
use Fy\Yeepay\Yop\Sdk\Client\ClientHandler;
use Fy\Yeepay\Yop\Sdk\Client\ClientParams;
use Fy\Yeepay\Yop\Sdk\Exception\YopClientException;
use Fy\Yeepay\Yop\Sdk\Service\Trade\Model as Model;

class TradeClient
{
    /**
     * @var ClientHandler
     */
    private $clientHandler;

    /**
     * TradeClient constructor.
     * @param ClientParams $clientParams
     */
    function __construct(ClientParams $clientParams)
    {
        $this->clientHandler = new ClientHandler($clientParams);
    }

    /**
     * @param Model\OrderRequest $request
     * @return Model\OrderResponse
     * @throws YopClientException
     */
    public function order(Model\OrderRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\OrderRequestMarshaller::getInstance(),
            Model\OrderResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\OrderCloseRequest $request
     * @return Model\OrderCloseResponse
     * @throws YopClientException
     */
    public function orderClose(Model\OrderCloseRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\OrderCloseRequestMarshaller::getInstance(),
            Model\OrderCloseResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\OrderCombineQueryRequest $request
     * @return Model\OrderCombineQueryResponse
     * @throws YopClientException
     */
    public function orderCombineQuery(Model\OrderCombineQueryRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        if ($request->getParentMerchantNo() == null) {
            throw new YopClientException("request.parentMerchantNo is required.");
        }
        if ($request->getOrderId() == null) {
            throw new YopClientException("request.orderId is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\OrderCombineQueryRequestMarshaller::getInstance(),
            Model\OrderCombineQueryResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\OrderQueryRequest $request
     * @return Model\OrderQueryResponse
     * @throws YopClientException
     */
    public function orderQuery(Model\OrderQueryRequest $request)
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
        if ($request->getOrderId() == null) {
            throw new YopClientException("request.orderId is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\OrderQueryRequestMarshaller::getInstance(),
            Model\OrderQueryResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\ReceiptDownloadRequest $request
     * @return Model\ReceiptDownloadResponse
     * @throws YopClientException
     */
    public function receiptDownload(Model\ReceiptDownloadRequest $request)
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
        if ($request->getOrderId() == null) {
            throw new YopClientException("request.orderId is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\ReceiptDownloadRequestMarshaller::getInstance(),
            Model\ReceiptDownloadResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\RefundRequest $request
     * @return Model\RefundResponse
     * @throws YopClientException
     */
    public function refund(Model\RefundRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\RefundRequestMarshaller::getInstance(),
            Model\RefundResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\RefundEndRequest $request
     * @return Model\RefundEndResponse
     * @throws YopClientException
     */
    public function refundEnd(Model\RefundEndRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\RefundEndRequestMarshaller::getInstance(),
            Model\RefundEndResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\RefundFastRequest $request
     * @return Model\RefundFastResponse
     * @throws YopClientException
     */
    public function refundFast(Model\RefundFastRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\RefundFastRequestMarshaller::getInstance(),
            Model\RefundFastResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\RefundQueryRequest $request
     * @return Model\RefundQueryResponse
     * @throws YopClientException
     */
    public function refundQuery(Model\RefundQueryRequest $request)
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
        if ($request->getOrderId() == null) {
            throw new YopClientException("request.orderId is required.");
        }
        if ($request->getRefundRequestId() == null) {
            throw new YopClientException("request.refundRequestId is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\RefundQueryRequestMarshaller::getInstance(),
            Model\RefundQueryResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\RefundSupplyRequest $request
     * @return Model\RefundSupplyResponse
     * @throws YopClientException
     */
    public function refundSupply(Model\RefundSupplyRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\RefundSupplyRequestMarshaller::getInstance(),
            Model\RefundSupplyResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
}
