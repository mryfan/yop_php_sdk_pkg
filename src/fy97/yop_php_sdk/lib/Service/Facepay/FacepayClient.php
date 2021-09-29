<?php


namespace Fy\Yeepay\Yop\Sdk\Service\Facepay;


use Fy\Yeepay\Yop\Sdk\Client\ClientExecutionParams;
use Fy\Yeepay\Yop\Sdk\Client\ClientHandler;
use Fy\Yeepay\Yop\Sdk\Client\ClientParams;
use Fy\Yeepay\Yop\Sdk\Exception\YopClientException;
use Fy\Yeepay\Yop\Sdk\Service\Facepay\Model as Model;

class FacepayClient
{
    /**
     * @var ClientHandler
     */
    private $clientHandler;

    /**
     * FacepayClient constructor.
     * @param ClientParams $clientParams
     */
    function __construct(ClientParams $clientParams)
    {
        $this->clientHandler = new ClientHandler($clientParams);
    }

    /**
     * @param Model\FacepayProxyBindConfirmSmsRequest $request
     * @return Model\FacepayProxyBindConfirmSmsResponse
     * @throws YopClientException
     */
    public function facepayProxyBindConfirmSms(Model\FacepayProxyBindConfirmSmsRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\FacepayProxyBindConfirmSmsRequestMarshaller::getInstance(),
            Model\FacepayProxyBindConfirmSmsResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\FacepayProxyBindFirstCardRequest $request
     * @return Model\FacepayProxyBindFirstCardResponse
     * @throws YopClientException
     */
    public function facepayProxyBindFirstCard(Model\FacepayProxyBindFirstCardRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\FacepayProxyBindFirstCardRequestMarshaller::getInstance(),
            Model\FacepayProxyBindFirstCardResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\FacepayProxyBindSendSmsRequest $request
     * @return Model\FacepayProxyBindSendSmsResponse
     * @throws YopClientException
     */
    public function facepayProxyBindSendSms(Model\FacepayProxyBindSendSmsRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\FacepayProxyBindSendSmsRequestMarshaller::getInstance(),
            Model\FacepayProxyBindSendSmsResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\FacepayProxyCertificateNoAuthRequest $request
     * @return Model\FacepayProxyCertificateNoAuthResponse
     * @throws YopClientException
     */
    public function facepayProxyCertificateNoAuth(Model\FacepayProxyCertificateNoAuthRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\FacepayProxyCertificateNoAuthRequestMarshaller::getInstance(),
            Model\FacepayProxyCertificateNoAuthResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\FacepayProxyCheckLogonSmscodeRequest $request
     * @return Model\FacepayProxyCheckLogonSmscodeResponse
     * @throws YopClientException
     */
    public function facepayProxyCheckLogonSmscode(Model\FacepayProxyCheckLogonSmscodeRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\FacepayProxyCheckLogonSmscodeRequestMarshaller::getInstance(),
            Model\FacepayProxyCheckLogonSmscodeResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\FacepayProxyConfirmFirstCardSmscodeRequest $request
     * @return Model\FacepayProxyConfirmFirstCardSmscodeResponse
     * @throws YopClientException
     */
    public function facepayProxyConfirmFirstCardSmscode(Model\FacepayProxyConfirmFirstCardSmscodeRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\FacepayProxyConfirmFirstCardSmscodeRequestMarshaller::getInstance(),
            Model\FacepayProxyConfirmFirstCardSmscodeResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\FacepayProxyConfirmVerifySmscodeRequest $request
     * @return Model\FacepayProxyConfirmVerifySmscodeResponse
     * @throws YopClientException
     */
    public function facepayProxyConfirmVerifySmscode(Model\FacepayProxyConfirmVerifySmscodeRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\FacepayProxyConfirmVerifySmscodeRequestMarshaller::getInstance(),
            Model\FacepayProxyConfirmVerifySmscodeResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\FacepayProxyCreateBindCardRequest $request
     * @return Model\FacepayProxyCreateBindCardResponse
     * @throws YopClientException
     */
    public function facepayProxyCreateBindCard(Model\FacepayProxyCreateBindCardRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\FacepayProxyCreateBindCardRequestMarshaller::getInstance(),
            Model\FacepayProxyCreateBindCardResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\FacepayProxyCreateOrderRequest $request
     * @return Model\FacepayProxyCreateOrderResponse
     * @throws YopClientException
     */
    public function facepayProxyCreateOrder(Model\FacepayProxyCreateOrderRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\FacepayProxyCreateOrderRequestMarshaller::getInstance(),
            Model\FacepayProxyCreateOrderResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\FacepayProxyFaceLogonRequest $request
     * @return Model\FacepayProxyFaceLogonResponse
     * @throws YopClientException
     */
    public function facepayProxyFaceLogon(Model\FacepayProxyFaceLogonRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\FacepayProxyFaceLogonRequestMarshaller::getInstance(),
            Model\FacepayProxyFaceLogonResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\FacepayProxyOpenFaceAccountRequest $request
     * @return Model\FacepayProxyOpenFaceAccountResponse
     * @throws YopClientException
     */
    public function facepayProxyOpenFaceAccount(Model\FacepayProxyOpenFaceAccountRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\FacepayProxyOpenFaceAccountRequestMarshaller::getInstance(),
            Model\FacepayProxyOpenFaceAccountResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\FacepayProxyPaySendSmsRequest $request
     * @return Model\FacepayProxyPaySendSmsResponse
     * @throws YopClientException
     */
    public function facepayProxyPaySendSms(Model\FacepayProxyPaySendSmsRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\FacepayProxyPaySendSmsRequestMarshaller::getInstance(),
            Model\FacepayProxyPaySendSmsResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\FacepayProxyQueryBindCardInfoRequest $request
     * @return Model\FacepayProxyQueryBindCardInfoResponse
     * @throws YopClientException
     */
    public function facepayProxyQueryBindCardInfo(Model\FacepayProxyQueryBindCardInfoRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\FacepayProxyQueryBindCardInfoRequestMarshaller::getInstance(),
            Model\FacepayProxyQueryBindCardInfoResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\FacepayProxyQueryOrderAfterRequest $request
     * @return Model\FacepayProxyQueryOrderAfterResponse
     * @throws YopClientException
     */
    public function facepayProxyQueryOrderAfter(Model\FacepayProxyQueryOrderAfterRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\FacepayProxyQueryOrderAfterRequestMarshaller::getInstance(),
            Model\FacepayProxyQueryOrderAfterResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\FacepayProxyQueryOrderBeforeRequest $request
     * @return Model\FacepayProxyQueryOrderBeforeResponse
     * @throws YopClientException
     */
    public function facepayProxyQueryOrderBefore(Model\FacepayProxyQueryOrderBeforeRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        if ($request->getBody() == null) {
            throw new YopClientException("request.body is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\FacepayProxyQueryOrderBeforeRequestMarshaller::getInstance(),
            Model\FacepayProxyQueryOrderBeforeResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\FacepayProxySendFirstCardSmscodeRequest $request
     * @return Model\FacepayProxySendFirstCardSmscodeResponse
     * @throws YopClientException
     */
    public function facepayProxySendFirstCardSmscode(Model\FacepayProxySendFirstCardSmscodeRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\FacepayProxySendFirstCardSmscodeRequestMarshaller::getInstance(),
            Model\FacepayProxySendFirstCardSmscodeResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\FacepayProxySendLogonSmscodeRequest $request
     * @return Model\FacepayProxySendLogonSmscodeResponse
     * @throws YopClientException
     */
    public function facepayProxySendLogonSmscode(Model\FacepayProxySendLogonSmscodeRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\FacepayProxySendLogonSmscodeRequestMarshaller::getInstance(),
            Model\FacepayProxySendLogonSmscodeResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\FacepayProxySendVerifySmscodeRequest $request
     * @return Model\FacepayProxySendVerifySmscodeResponse
     * @throws YopClientException
     */
    public function facepayProxySendVerifySmscode(Model\FacepayProxySendVerifySmscodeRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\FacepayProxySendVerifySmscodeRequestMarshaller::getInstance(),
            Model\FacepayProxySendVerifySmscodeResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\FacepayProxyVerifyUserInfoRequest $request
     * @return Model\FacepayProxyVerifyUserInfoResponse
     * @throws YopClientException
     */
    public function facepayProxyVerifyUserInfo(Model\FacepayProxyVerifyUserInfoRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\FacepayProxyVerifyUserInfoRequestMarshaller::getInstance(),
            Model\FacepayProxyVerifyUserInfoResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\OAuth2TokenGenerateTokenRequest $request
     * @return Model\OAuth2TokenGenerateTokenResponse
     * @throws YopClientException
     */
    public function oAuth2TokenGenerateToken(Model\OAuth2TokenGenerateTokenRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\OAuth2TokenGenerateTokenRequestMarshaller::getInstance(),
            Model\OAuth2TokenGenerateTokenResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\SosDeleteBindNoRequest $request
     * @return Model\SosDeleteBindNoResponse
     * @throws YopClientException
     */
    public function sosDeleteBindNo(Model\SosDeleteBindNoRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\SosDeleteBindNoRequestMarshaller::getInstance(),
            Model\SosDeleteBindNoResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
}
