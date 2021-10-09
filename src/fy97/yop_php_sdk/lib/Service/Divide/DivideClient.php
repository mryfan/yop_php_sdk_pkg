<?php


namespace Fy\Yeepay\Yop\Sdk\Service\Divide;


use Fy\Yeepay\Yop\Sdk\Client\ClientExecutionParams;
use Fy\Yeepay\Yop\Sdk\Client\ClientHandler;
use Fy\Yeepay\Yop\Sdk\Client\ClientParams;
use Fy\Yeepay\Yop\Sdk\Exception\YopClientException;
use Fy\Yeepay\Yop\Sdk\Service\Divide\Model as Model;

class DivideClient
{
    /**
     * @var ClientHandler
     */
    private $clientHandler;

    /**
     * DivideClient constructor.
     * @param ClientParams $clientParams
     */
    function __construct(ClientParams $clientParams)
    {
        $this->clientHandler = new ClientHandler($clientParams);
    }

    /**
     * @param Model\ApplyRequest $request
     * @return Model\ApplyResponse
     * @throws YopClientException
     */
    public function apply(Model\ApplyRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\ApplyRequestMarshaller::getInstance(),
            Model\ApplyResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\BackRequest $request
     * @return Model\BackResponse
     * @throws YopClientException
     */
    public function back(Model\BackRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\BackRequestMarshaller::getInstance(),
            Model\BackResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\BackQueryRequest $request
     * @return Model\BackQueryResponse
     * @throws YopClientException
     */
    public function backQuery(Model\BackQueryRequest $request)
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
        if ($request->getUniqueOrderNo() == null) {
            throw new YopClientException("request.uniqueOrderNo is required.");
        }
        if ($request->getDivideBackRequestId() == null) {
            throw new YopClientException("request.divideBackRequestId is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\BackQueryRequestMarshaller::getInstance(),
            Model\BackQueryResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\CompleteRequest $request
     * @return Model\CompleteResponse
     * @throws YopClientException
     */
    public function complete(Model\CompleteRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\CompleteRequestMarshaller::getInstance(),
            Model\CompleteResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\QueryRequest $request
     * @return Model\QueryResponse
     * @throws YopClientException
     */
    public function query(Model\QueryRequest $request)
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
        if ($request->getDivideRequestId() == null) {
            throw new YopClientException("request.divideRequestId is required.");
        }
        if ($request->getOrderId() == null) {
            throw new YopClientException("request.orderId is required.");
        }
        if ($request->getUniqueOrderNo() == null) {
            throw new YopClientException("request.uniqueOrderNo is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\QueryRequestMarshaller::getInstance(),
            Model\QueryResponseUnMarshaller::getInstance());
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
        if ($request->getUniqueOrderNo() == null) {
            throw new YopClientException("request.uniqueOrderNo is required.");
        }
        if ($request->getDivideRequestId() == null) {
            throw new YopClientException("request.divideRequestId is required.");
        }
        if ($request->getLedgerNo() == null) {
            throw new YopClientException("request.ledgerNo is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\ReceiptDownloadRequestMarshaller::getInstance(),
            Model\ReceiptDownloadResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
}
