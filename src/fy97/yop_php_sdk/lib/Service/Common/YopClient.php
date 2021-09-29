<?php


namespace Fy\Yeepay\Yop\Sdk\Service\Common;


use Fy\Yeepay\Yop\Sdk\Client\ClientExecutionParams;
use Fy\Yeepay\Yop\Sdk\Client\ClientHandler;
use Fy\Yeepay\Yop\Sdk\Client\ClientParams;
use Fy\Yeepay\Yop\Sdk\Exception\YopClientException;
use Fy\Yeepay\Yop\Sdk\Model\Transform\YosDownloadResponseUnMarshaller;
use Fy\Yeepay\Yop\Sdk\Model\YosDownloadResponse;
use Fy\Yeepay\Yop\Sdk\Service\Common\Model\YopRequest;
use Fy\Yeepay\Yop\Sdk\Service\Common\Model\YopRequestMarshaller;
use Fy\Yeepay\Yop\Sdk\Service\Common\Model\YopResponse;
use Fy\Yeepay\Yop\Sdk\Service\Common\Model\YopResponseUnMarshaller;

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
     * @param YopRequest $request
     * @return YopResponse
     * @throws YopClientException
     */
    public function sendRequest(YopRequest $request)
    {
        $clientExecutionParams = new ClientExecutionParams($request, new YopRequestMarshaller(), new YopResponseUnMarshaller());
        return $this->clientHandler->execute($clientExecutionParams);
    }

    /**
     * @param YopRequest $request
     * @return YosDownloadResponse
     * @throws YopClientException
     */
    public function sendDownloadRequest(YopRequest $request)
    {
        $clientExecutionParams = new ClientExecutionParams($request, new YopRequestMarshaller(), new YosDownloadResponseUnMarshaller());
        return $this->clientHandler->execute($clientExecutionParams);
    }

}