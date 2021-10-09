<?php


namespace Fy\Yeepay\Yop\Sdk\Service\Account\Model;


use Fy\Yeepay\Yop\Sdk\Http\Headers;
use Fy\Yeepay\Yop\Sdk\Internal\DefaultRequest;
use Fy\Yeepay\Yop\Sdk\Internal\Request;
use Fy\Yeepay\Yop\Sdk\Model\Transform\RequestMarshaller;
use Fy\Yeepay\Yop\Sdk\Utils\ObjectSerializer;
use Fy\Yeepay\Yop\Sdk\Utils\UUIDUtils;

class AutoWithdrawRuleSetRequestMarshaller implements RequestMarshaller
{
    /**
     * @var AutoWithdrawRuleSetRequestMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new AutoWithdrawRuleSetRequestMarshaller();
    }

    /**
     * @return AutoWithdrawRuleSetRequestMarshaller
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
    private $resourcePath = '/rest/v1.0/account/auto-withdraw-rule/set';

    /**
     * @var string
     */
    private $contentType = 'application/x-www-form-urlencoded';


    /**
     * @param AutoWithdrawRuleSetRequest $request
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
        if($request->getBindId() != null){
            $internalRequest->addParameter('bindId', ObjectSerializer::sanitizeForSerialization($request->getBindId(), 'string'));
        }
        if($request->getBankAccountNo() != null){
            $internalRequest->addParameter('bankAccountNo', ObjectSerializer::sanitizeForSerialization($request->getBankAccountNo(), 'string'));
        }
        if($request->getReceiveType() != null){
            $internalRequest->addParameter('receiveType', ObjectSerializer::sanitizeForSerialization($request->getReceiveType(), 'string'));
        }
        if($request->getTriggerTime() != null){
            $internalRequest->addParameter('triggerTime', ObjectSerializer::sanitizeForSerialization($request->getTriggerTime(), 'string'));
        }
        if($request->getRemainAmount() != null){
            $internalRequest->addParameter('remainAmount', ObjectSerializer::sanitizeForSerialization($request->getRemainAmount(), 'float'));
        }
        if($request->getRemark() != null){
            $internalRequest->addParameter('remark', ObjectSerializer::sanitizeForSerialization($request->getRemark(), 'string'));
        }
        $internalRequest->addHeader(Headers::CONTENT_TYPE, $this->contentType);

        return $internalRequest;
    }
}
AutoWithdrawRuleSetRequestMarshaller::__init();
