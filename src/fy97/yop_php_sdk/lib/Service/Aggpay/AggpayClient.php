<?php


namespace Fy\Yeepay\Yop\Sdk\Service\Aggpay;


use Fy\Yeepay\Yop\Sdk\Client\ClientExecutionParams;
use Fy\Yeepay\Yop\Sdk\Client\ClientHandler;
use Fy\Yeepay\Yop\Sdk\Client\ClientParams;
use Fy\Yeepay\Yop\Sdk\Exception\YopClientException;
use Fy\Yeepay\Yop\Sdk\Service\Aggpay\Model as Model;

class AggpayClient
{
    /**
     * @var ClientHandler
     */
    private $clientHandler;

    /**
     * AggpayClient constructor.
     * @param ClientParams $clientParams
     */
    function __construct(ClientParams $clientParams)
    {
        $this->clientHandler = new ClientHandler($clientParams);
    }

    /**
     * @param Model\PayRequest $request
     * @return Model\PayResponse
     * @throws YopClientException
     */
    public function pay(Model\PayRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\PayRequestMarshaller::getInstance(),
            Model\PayResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\PrePayRequest $request
     * @return Model\PrePayResponse
     * @throws YopClientException
     */
    public function prePay(Model\PrePayRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\PrePayRequestMarshaller::getInstance(),
            Model\PrePayResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\ViolationWechatChannelRequest $request
     * @return Model\ViolationWechatChannelResponse
     * @throws YopClientException
     */
    public function violationWechatChannel(Model\ViolationWechatChannelRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        if ($request->getParentMerchantNo() == null) {
            throw new YopClientException("request.parentMerchantNo is required.");
        }
        if ($request->getBeginTime() == null) {
            throw new YopClientException("request.beginTime is required.");
        }
        if ($request->getEndTime() == null) {
            throw new YopClientException("request.endTime is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\ViolationWechatChannelRequestMarshaller::getInstance(),
            Model\ViolationWechatChannelResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\WechatConfigAddRequest $request
     * @return Model\WechatConfigAddResponse
     * @throws YopClientException
     */
    public function wechatConfigAdd(Model\WechatConfigAddRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        if ($request->getBody() == null) {
            throw new YopClientException("request.body is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\WechatConfigAddRequestMarshaller::getInstance(),
            Model\WechatConfigAddResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\WechatConfigAdd0Request $request
     * @return Model\WechatConfigAdd0Response
     * @throws YopClientException
     */
    public function wechatConfigAdd_0(Model\WechatConfigAdd0Request $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\WechatConfigAdd0RequestMarshaller::getInstance(),
            Model\WechatConfigAdd0ResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\WechatConfigQueryRequest $request
     * @return Model\WechatConfigQueryResponse
     * @throws YopClientException
     */
    public function wechatConfigQuery(Model\WechatConfigQueryRequest $request)
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
        $clientExecutionParams = new ClientExecutionParams($request, Model\WechatConfigQueryRequestMarshaller::getInstance(),
            Model\WechatConfigQueryResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\WechatConfigQuery0Request $request
     * @return Model\WechatConfigQuery0Response
     * @throws YopClientException
     */
    public function wechatConfigQuery_0(Model\WechatConfigQuery0Request $request)
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
        $clientExecutionParams = new ClientExecutionParams($request, Model\WechatConfigQuery0RequestMarshaller::getInstance(),
            Model\WechatConfigQuery0ResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
}
