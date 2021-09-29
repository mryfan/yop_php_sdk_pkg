<?php


namespace Fy\Yeepay\Yop\Sdk\Service\Settle;


use Fy\Yeepay\Yop\Sdk\Client\ClientExecutionParams;
use Fy\Yeepay\Yop\Sdk\Client\ClientHandler;
use Fy\Yeepay\Yop\Sdk\Client\ClientParams;
use Fy\Yeepay\Yop\Sdk\Exception\YopClientException;
use Fy\Yeepay\Yop\Sdk\Model\YosDownloadResponse;
use Fy\Yeepay\Yop\Sdk\Model\YosDownloadResponseUnMarshaller;
use Fy\Yeepay\Yop\Sdk\Service\Settle\Model as Model;

class SettleClient
{
    /**
     * @var ClientHandler
     */
    private $clientHandler;

    /**
     * SettleClient constructor.
     * @param ClientParams $clientParams
     */
    function __construct(ClientParams $clientParams)
    {
        $this->clientHandler = new ClientHandler($clientParams);
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
        if ($request->getParentMerchantNo() == null) {
            throw new YopClientException("request.parentMerchantNo is required.");
        }
        if ($request->getMerchantNo() == null) {
            throw new YopClientException("request.merchantNo is required.");
        }
        if ($request->getOperatePeriod() == null) {
            throw new YopClientException("request.operatePeriod is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\BalanceQueryRequestMarshaller::getInstance(),
            Model\BalanceQueryResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\FileGetRequest $request
     * @return YosDownloadResponse
     * @throws YopClientException
     */
    public function fileGet(Model\FileGetRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        if ($request->getMerchantNo() == null) {
            throw new YopClientException("request.merchantNo is required.");
        }
        if ($request->getParentMerchantNo() == null) {
            throw new YopClientException("request.parentMerchantNo is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\FileGetRequestMarshaller::getInstance(),
            YosDownloadResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\RecordsQueryRequest $request
     * @return Model\RecordsQueryResponse
     * @throws YopClientException
     */
    public function recordsQuery(Model\RecordsQueryRequest $request)
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
        $clientExecutionParams = new ClientExecutionParams($request, Model\RecordsQueryRequestMarshaller::getInstance(),
            Model\RecordsQueryResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\SelfSettleApplyRequest $request
     * @return Model\SelfSettleApplyResponse
     * @throws YopClientException
     */
    public function selfSettleApply(Model\SelfSettleApplyRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\SelfSettleApplyRequestMarshaller::getInstance(),
            Model\SelfSettleApplyResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\SettleCardAddRequest $request
     * @return Model\SettleCardAddResponse
     * @throws YopClientException
     */
    public function settleCardAdd(Model\SettleCardAddRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\SettleCardAddRequestMarshaller::getInstance(),
            Model\SettleCardAddResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\SettleCardModifyRequest $request
     * @return Model\SettleCardModifyResponse
     * @throws YopClientException
     */
    public function settleCardModify(Model\SettleCardModifyRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\SettleCardModifyRequestMarshaller::getInstance(),
            Model\SettleCardModifyResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
}
