<?php


namespace Fy\Yeepay\Yop\Sdk\Service\Mer;


use Fy\Yeepay\Yop\Sdk\Client\ClientExecutionParams;
use Fy\Yeepay\Yop\Sdk\Client\ClientHandler;
use Fy\Yeepay\Yop\Sdk\Client\ClientParams;
use Fy\Yeepay\Yop\Sdk\Exception\YopClientException;
use Fy\Yeepay\Yop\Sdk\Service\Mer\Model as Model;

class MerClient
{
    /**
     * @var ClientHandler
     */
    private $clientHandler;

    /**
     * MerClient constructor.
     * @param ClientParams $clientParams
     */
    function __construct(ClientParams $clientParams)
    {
        $this->clientHandler = new ClientHandler($clientParams);
    }

    /**
     * @param Model\AuthStateQueryRequest $request
     * @return Model\AuthStateQueryResponse
     * @throws YopClientException
     */
    public function authStateQuery(Model\AuthStateQueryRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        if ($request->getMerchantNo() == null) {
            throw new YopClientException("request.merchantNo is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\AuthStateQueryRequestMarshaller::getInstance(),
            Model\AuthStateQueryResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\AuthorizeRelieveRequest $request
     * @return Model\AuthorizeRelieveResponse
     * @throws YopClientException
     */
    public function authorizeRelieve(Model\AuthorizeRelieveRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\AuthorizeRelieveRequestMarshaller::getInstance(),
            Model\AuthorizeRelieveResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\AuthorizeSignRequest $request
     * @return Model\AuthorizeSignResponse
     * @throws YopClientException
     */
    public function authorizeSign(Model\AuthorizeSignRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\AuthorizeSignRequestMarshaller::getInstance(),
            Model\AuthorizeSignResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\MerchantDisposeQueryRequest $request
     * @return Model\MerchantDisposeQueryResponse
     * @throws YopClientException
     */
    public function merchantDisposeQuery(Model\MerchantDisposeQueryRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\MerchantDisposeQueryRequestMarshaller::getInstance(),
            Model\MerchantDisposeQueryResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\MerchantDisposeUnfreezeRequest $request
     * @return Model\MerchantDisposeUnfreezeResponse
     * @throws YopClientException
     */
    public function merchantDisposeUnfreeze(Model\MerchantDisposeUnfreezeRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\MerchantDisposeUnfreezeRequestMarshaller::getInstance(),
            Model\MerchantDisposeUnfreezeResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\MerchantWechatauthCancelRequest $request
     * @return Model\MerchantWechatauthCancelResponse
     * @throws YopClientException
     */
    public function merchantWechatauthCancel(Model\MerchantWechatauthCancelRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\MerchantWechatauthCancelRequestMarshaller::getInstance(),
            Model\MerchantWechatauthCancelResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\MerchantWechatauthQueryRequest $request
     * @return Model\MerchantWechatauthQueryResponse
     * @throws YopClientException
     */
    public function merchantWechatauthQuery(Model\MerchantWechatauthQueryRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        if ($request->getApplymentId() == null) {
            throw new YopClientException("request.applymentId is required.");
        }
        if ($request->getSubMerchantNo() == null) {
            throw new YopClientException("request.subMerchantNo is required.");
        }
        if ($request->getReportFee() == null) {
            throw new YopClientException("request.reportFee is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\MerchantWechatauthQueryRequestMarshaller::getInstance(),
            Model\MerchantWechatauthQueryResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\NotifyRepeatRequest $request
     * @return Model\NotifyRepeatResponse
     * @throws YopClientException
     */
    public function notifyRepeat(Model\NotifyRepeatRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\NotifyRepeatRequestMarshaller::getInstance(),
            Model\NotifyRepeatResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\ProductFeeModifyRequest $request
     * @return Model\ProductFeeModifyResponse
     * @throws YopClientException
     */
    public function productFeeModify(Model\ProductFeeModifyRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\ProductFeeModifyRequestMarshaller::getInstance(),
            Model\ProductFeeModifyResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\ProductFeeQueryRequest $request
     * @return Model\ProductFeeQueryResponse
     * @throws YopClientException
     */
    public function productFeeQuery(Model\ProductFeeQueryRequest $request)
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
        $clientExecutionParams = new ClientExecutionParams($request, Model\ProductFeeQueryRequestMarshaller::getInstance(),
            Model\ProductFeeQueryResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\ProductIncrementSettleOpenRequest $request
     * @return Model\ProductIncrementSettleOpenResponse
     * @throws YopClientException
     */
    public function productIncrementSettleOpen(Model\ProductIncrementSettleOpenRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\ProductIncrementSettleOpenRequestMarshaller::getInstance(),
            Model\ProductIncrementSettleOpenResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\RegisterQueryRequest $request
     * @return Model\RegisterQueryResponse
     * @throws YopClientException
     */
    public function registerQuery(Model\RegisterQueryRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        if ($request->getRequestNo() == null) {
            throw new YopClientException("request.requestNo is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\RegisterQueryRequestMarshaller::getInstance(),
            Model\RegisterQueryResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\RegisterSaasMerchantRequest $request
     * @return Model\RegisterSaasMerchantResponse
     * @throws YopClientException
     */
    public function registerSaasMerchant(Model\RegisterSaasMerchantRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\RegisterSaasMerchantRequestMarshaller::getInstance(),
            Model\RegisterSaasMerchantResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\RegisterSaasMicroRequest $request
     * @return Model\RegisterSaasMicroResponse
     * @throws YopClientException
     */
    public function registerSaasMicro(Model\RegisterSaasMicroRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\RegisterSaasMicroRequestMarshaller::getInstance(),
            Model\RegisterSaasMicroResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
}
