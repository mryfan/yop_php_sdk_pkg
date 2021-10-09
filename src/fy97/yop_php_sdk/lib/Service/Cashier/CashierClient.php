<?php


namespace Fy\Yeepay\Yop\Sdk\Service\Cashier;


use Fy\Yeepay\Yop\Sdk\Client\ClientExecutionParams;
use Fy\Yeepay\Yop\Sdk\Client\ClientHandler;
use Fy\Yeepay\Yop\Sdk\Client\ClientParams;
use Fy\Yeepay\Yop\Sdk\Exception\YopClientException;
use Fy\Yeepay\Yop\Sdk\Service\Cashier\Model as Model;

class CashierClient
{
    /**
     * @var ClientHandler
     */
    private $clientHandler;

    /**
     * CashierClient constructor.
     * @param ClientParams $clientParams
     */
    function __construct(ClientParams $clientParams)
    {
        $this->clientHandler = new ClientHandler($clientParams);
    }

    /**
     * @param Model\PayLinkOrderRequest $request
     * @return Model\PayLinkOrderResponse
     * @throws YopClientException
     */
    public function payLinkOrder(Model\PayLinkOrderRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\PayLinkOrderRequestMarshaller::getInstance(),
            Model\PayLinkOrderResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
}
