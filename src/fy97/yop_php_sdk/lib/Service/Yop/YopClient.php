<?php


namespace Fy\Yeepay\Yop\Sdk\Service\Yop;


use Fy\Yeepay\Yop\Sdk\Client\ClientExecutionParams;
use Fy\Yeepay\Yop\Sdk\Client\ClientHandler;
use Fy\Yeepay\Yop\Sdk\Client\ClientParams;
use Fy\Yeepay\Yop\Sdk\Exception\YopClientException;
use Fy\Yeepay\Yop\Sdk\Service\Yop\Model as Model;

class YopClient
{
    /**
     * @var ClientHandler
     */
    private $clientHandler;

    /**
     * YopClient constructor.
     * @param ClientParams $clientParams
     */
    function __construct(ClientParams $clientParams)
    {
        $this->clientHandler = new ClientHandler($clientParams);
    }

    /**
     * @param Model\Oauth2ReportKeyRequest $request
     * @return Model\Oauth2ReportKeyResponse
     * @throws YopClientException
     */
    public function oauth2ReportKey(Model\Oauth2ReportKeyRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\Oauth2ReportKeyRequestMarshaller::getInstance(),
            Model\Oauth2ReportKeyResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
}
