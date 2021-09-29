<?php


namespace Fy\Yeepay\Yop\Sdk\Service\Frontcashier;


use Fy\Yeepay\Yop\Sdk\Client\ClientExecutionParams;
use Fy\Yeepay\Yop\Sdk\Client\ClientHandler;
use Fy\Yeepay\Yop\Sdk\Client\ClientParams;
use Fy\Yeepay\Yop\Sdk\Exception\YopClientException;
use Fy\Yeepay\Yop\Sdk\Service\Frontcashier\Model as Model;

class FrontcashierClient
{
    /**
     * @var ClientHandler
     */
    private $clientHandler;

    /**
     * FrontcashierClient constructor.
     * @param ClientParams $clientParams
     */
    function __construct(ClientParams $clientParams)
    {
        $this->clientHandler = new ClientHandler($clientParams);
    }

    /**
     * @param Model\BankTransferPayRequest $request
     * @return Model\BankTransferPayResponse
     * @throws YopClientException
     */
    public function bankTransferPay(Model\BankTransferPayRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\BankTransferPayRequestMarshaller::getInstance(),
            Model\BankTransferPayResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\BankTransferQueryRequest $request
     * @return Model\BankTransferQueryResponse
     * @throws YopClientException
     */
    public function bankTransferQuery(Model\BankTransferQueryRequest $request)
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
        $clientExecutionParams = new ClientExecutionParams($request, Model\BankTransferQueryRequestMarshaller::getInstance(),
            Model\BankTransferQueryResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\BindcardConfirmRequest $request
     * @return Model\BindcardConfirmResponse
     * @throws YopClientException
     */
    public function bindcardConfirm(Model\BindcardConfirmRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\BindcardConfirmRequestMarshaller::getInstance(),
            Model\BindcardConfirmResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\BindcardConfirm0Request $request
     * @return Model\BindcardConfirm0Response
     * @throws YopClientException
     */
    public function bindcardConfirm_0(Model\BindcardConfirm0Request $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\BindcardConfirm0RequestMarshaller::getInstance(),
            Model\BindcardConfirm0ResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\BindcardGetcardbinRequest $request
     * @return Model\BindcardGetcardbinResponse
     * @throws YopClientException
     */
    public function bindcardGetcardbin(Model\BindcardGetcardbinRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\BindcardGetcardbinRequestMarshaller::getInstance(),
            Model\BindcardGetcardbinResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\BindcardQueryorderRequest $request
     * @return Model\BindcardQueryorderResponse
     * @throws YopClientException
     */
    public function bindcardQueryorder(Model\BindcardQueryorderRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\BindcardQueryorderRequestMarshaller::getInstance(),
            Model\BindcardQueryorderResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\BindcardRequestRequest $request
     * @return Model\BindcardRequestResponse
     * @throws YopClientException
     */
    public function bindcardRequest(Model\BindcardRequestRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\BindcardRequestRequestMarshaller::getInstance(),
            Model\BindcardRequestResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\BindcardRequest0Request $request
     * @return Model\BindcardRequest0Response
     * @throws YopClientException
     */
    public function bindcardRequest_0(Model\BindcardRequest0Request $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\BindcardRequest0RequestMarshaller::getInstance(),
            Model\BindcardRequest0ResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\BindpayConfirmRequest $request
     * @return Model\BindpayConfirmResponse
     * @throws YopClientException
     */
    public function bindpayConfirm(Model\BindpayConfirmRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\BindpayConfirmRequestMarshaller::getInstance(),
            Model\BindpayConfirmResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\BindpayRequestRequest $request
     * @return Model\BindpayRequestResponse
     * @throws YopClientException
     */
    public function bindpayRequest(Model\BindpayRequestRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\BindpayRequestRequestMarshaller::getInstance(),
            Model\BindpayRequestResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\BindpaySendsmsRequest $request
     * @return Model\BindpaySendsmsResponse
     * @throws YopClientException
     */
    public function bindpaySendsms(Model\BindpaySendsmsRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\BindpaySendsmsRequestMarshaller::getInstance(),
            Model\BindpaySendsmsResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\GetcardbinRequest $request
     * @return Model\GetcardbinResponse
     * @throws YopClientException
     */
    public function getcardbin(Model\GetcardbinRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\GetcardbinRequestMarshaller::getInstance(),
            Model\GetcardbinResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\YjzfBindpayrequestRequest $request
     * @return Model\YjzfBindpayrequestResponse
     * @throws YopClientException
     */
    public function yjzfBindpayrequest(Model\YjzfBindpayrequestRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\YjzfBindpayrequestRequestMarshaller::getInstance(),
            Model\YjzfBindpayrequestResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\YjzfFirstpayrequestRequest $request
     * @return Model\YjzfFirstpayrequestResponse
     * @throws YopClientException
     */
    public function yjzfFirstpayrequest(Model\YjzfFirstpayrequestRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\YjzfFirstpayrequestRequestMarshaller::getInstance(),
            Model\YjzfFirstpayrequestResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\YjzfPaymentconfirmRequest $request
     * @return Model\YjzfPaymentconfirmResponse
     * @throws YopClientException
     */
    public function yjzfPaymentconfirm(Model\YjzfPaymentconfirmRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\YjzfPaymentconfirmRequestMarshaller::getInstance(),
            Model\YjzfPaymentconfirmResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\YjzfSendsmsRequest $request
     * @return Model\YjzfSendsmsResponse
     * @throws YopClientException
     */
    public function yjzfSendsms(Model\YjzfSendsmsRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\YjzfSendsmsRequestMarshaller::getInstance(),
            Model\YjzfSendsmsResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
}
