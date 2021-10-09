<?php


namespace Fy\Yeepay\Yop\Sdk\Service\Account\Model;


use Fy\Yeepay\Yop\Sdk\Http\Headers;
use Fy\Yeepay\Yop\Sdk\Internal\DefaultRequest;
use Fy\Yeepay\Yop\Sdk\Internal\Request;
use Fy\Yeepay\Yop\Sdk\Model\Transform\RequestMarshaller;
use Fy\Yeepay\Yop\Sdk\Utils\ObjectSerializer;
use Fy\Yeepay\Yop\Sdk\Utils\UUIDUtils;

class PayOrderRequestMarshaller implements RequestMarshaller
{
    /**
     * @var PayOrderRequestMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new PayOrderRequestMarshaller();
    }

    /**
     * @return PayOrderRequestMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @var string
     */
    private $serviceName = 'Account';

    /**
     * @var string
     */
    private $httpMethod = 'POST';

    /**
     * @var string
     */
    private $resourcePath = '/rest/v1.0/account/pay/order';

    /**
     * @var string
     */
    private $contentType = 'application/x-www-form-urlencoded';


    /**
     * @param PayOrderRequest $request
     * @return Request
     */
    public function marshal($request)
    {
        $internalRequest = new DefaultRequest($this->serviceName);
        $internalRequest->setResourcePath($this->resourcePath);
        $internalRequest->setHttpMethod($this->httpMethod);
        if (!empty($request->getRequestConfig()) && !empty($request->getRequestConfig()->getCustomRequestHeaders())) {
            foreach ($request->getRequestConfig()->getCustomRequestHeaders() as $name => $value) {
                $internalRequest->addHeader($name, $value);
            }
        }
        if (!isset($internalRequest->getHeaders()[Headers::YOP_REQUEST_ID])) {
            $internalRequest->addHeader(Headers::YOP_REQUEST_ID, UUIDUtils::uuid());
        }
        if($request->getParentMerchantNo() != null){
            $internalRequest->addParameter('parentMerchantNo', ObjectSerializer::sanitizeForSerialization($request->getParentMerchantNo(), 'string'));
        }
        if($request->getMerchantNo() != null){
            $internalRequest->addParameter('merchantNo', ObjectSerializer::sanitizeForSerialization($request->getMerchantNo(), 'string'));
        }
        if($request->getRequestNo() != null){
            $internalRequest->addParameter('requestNo', ObjectSerializer::sanitizeForSerialization($request->getRequestNo(), 'string'));
        }
        if($request->getOrderAmount() != null){
            $internalRequest->addParameter('orderAmount', ObjectSerializer::sanitizeForSerialization($request->getOrderAmount(), 'float'));
        }
        if($request->getFeeChargeSide() != null){
            $internalRequest->addParameter('feeChargeSide', ObjectSerializer::sanitizeForSerialization($request->getFeeChargeSide(), 'string'));
        }
        if($request->getReceiveType() != null){
            $internalRequest->addParameter('receiveType', ObjectSerializer::sanitizeForSerialization($request->getReceiveType(), 'string'));
        }
        if($request->getReceiverAccountNo() != null){
            $internalRequest->addParameter('receiverAccountNo', ObjectSerializer::sanitizeForSerialization($request->getReceiverAccountNo(), 'string'));
        }
        if($request->getReceiverAccountName() != null){
            $internalRequest->addParameter('receiverAccountName', ObjectSerializer::sanitizeForSerialization($request->getReceiverAccountName(), 'string'));
        }
        if($request->getReceiverBankCode() != null){
            $internalRequest->addParameter('receiverBankCode', ObjectSerializer::sanitizeForSerialization($request->getReceiverBankCode(), 'string'));
        }
        if($request->getBankAccountType() != null){
            $internalRequest->addParameter('bankAccountType', ObjectSerializer::sanitizeForSerialization($request->getBankAccountType(), 'string'));
        }
        if($request->getBranchBankCode() != null){
            $internalRequest->addParameter('branchBankCode', ObjectSerializer::sanitizeForSerialization($request->getBranchBankCode(), 'string'));
        }
        if($request->getComments() != null){
            $internalRequest->addParameter('comments', ObjectSerializer::sanitizeForSerialization($request->getComments(), 'string'));
        }
        if($request->getTerminalType() != null){
            $internalRequest->addParameter('terminalType', ObjectSerializer::sanitizeForSerialization($request->getTerminalType(), 'string'));
        }
        if($request->getNotifyUrl() != null){
            $internalRequest->addParameter('notifyUrl', ObjectSerializer::sanitizeForSerialization($request->getNotifyUrl(), 'string'));
        }
        if($request->getRemark() != null){
            $internalRequest->addParameter('remark', ObjectSerializer::sanitizeForSerialization($request->getRemark(), 'string'));
        }
        $internalRequest->addHeader(Headers::CONTENT_TYPE, $this->contentType);

        return $internalRequest;
    }
}
PayOrderRequestMarshaller::__init();
