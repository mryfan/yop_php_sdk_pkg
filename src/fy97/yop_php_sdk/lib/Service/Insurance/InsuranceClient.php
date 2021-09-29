<?php


namespace Fy\Yeepay\Yop\Sdk\Service\Insurance;


use Fy\Yeepay\Yop\Sdk\Client\ClientExecutionParams;
use Fy\Yeepay\Yop\Sdk\Client\ClientHandler;
use Fy\Yeepay\Yop\Sdk\Client\ClientParams;
use Fy\Yeepay\Yop\Sdk\Exception\YopClientException;
use Fy\Yeepay\Yop\Sdk\Service\Insurance\Model as Model;

class InsuranceClient
{
    /**
     * @var ClientHandler
     */
    private $clientHandler;

    /**
     * InsuranceClient constructor.
     * @param ClientParams $clientParams
     */
    function __construct(ClientParams $clientParams)
    {
        $this->clientHandler = new ClientHandler($clientParams);
    }

    /**
     * @param Model\RealnameAuthRequest $request
     * @return Model\RealnameAuthResponse
     * @throws YopClientException
     */
    public function realnameAuth(Model\RealnameAuthRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        if ($request->getBody() == null) {
            throw new YopClientException("request.body is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\RealnameAuthRequestMarshaller::getInstance(),
            Model\RealnameAuthResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\RealnameNotifyRequest $request
     * @return Model\RealnameNotifyResponse
     * @throws YopClientException
     */
    public function realnameNotify(Model\RealnameNotifyRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\RealnameNotifyRequestMarshaller::getInstance(),
            Model\RealnameNotifyResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
}
