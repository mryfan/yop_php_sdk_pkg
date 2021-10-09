<?php


namespace Fy\Yeepay\Yop\Sdk\Service\Insurance\Model;


use Fy\Yeepay\Yop\Sdk\Http\Headers;
use Fy\Yeepay\Yop\Sdk\Internal\DefaultRequest;
use Fy\Yeepay\Yop\Sdk\Internal\Request;
use Fy\Yeepay\Yop\Sdk\Model\Transform\RequestMarshaller;
use Fy\Yeepay\Yop\Sdk\Utils\ObjectSerializer;
use Fy\Yeepay\Yop\Sdk\Utils\UUIDUtils;

class RealnameNotifyRequestMarshaller implements RequestMarshaller
{
    /**
     * @var RealnameNotifyRequestMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new RealnameNotifyRequestMarshaller();
    }

    /**
     * @return RealnameNotifyRequestMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @var string
     */
    private $serviceName = 'Insurance';

    /**
     * @var string
     */
    private $httpMethod = 'POST';

    /**
     * @var string
     */
    private $resourcePath = '/rest/v1.0/insurance/realname/notify';

    /**
     * @var string
     */
    private $contentType = 'application/x-www-form-urlencoded';


    /**
     * @param RealnameNotifyRequest $request
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
        if($request->getRequestNo() != null){
            $internalRequest->addParameter('requestNo', ObjectSerializer::sanitizeForSerialization($request->getRequestNo(), 'string'));
        }
        if($request->getQueryNo() != null){
            $internalRequest->addParameter('queryNo', ObjectSerializer::sanitizeForSerialization($request->getQueryNo(), 'string'));
        }
        if($request->getCustomrNo() != null){
            $internalRequest->addParameter('customrNo', ObjectSerializer::sanitizeForSerialization($request->getCustomrNo(), 'string'));
        }
        if($request->getCode() != null){
            $internalRequest->addParameter('code', ObjectSerializer::sanitizeForSerialization($request->getCode(), 'string'));
        }
        if($request->getAmount() != null){
            $internalRequest->addParameter('amount', ObjectSerializer::sanitizeForSerialization($request->getAmount(), 'string'));
        }
        if($request->getCardNo() != null){
            $internalRequest->addParameter('cardNo', ObjectSerializer::sanitizeForSerialization($request->getCardNo(), 'string'));
        }
        if($request->getTradeNo() != null){
            $internalRequest->addParameter('tradeNo', ObjectSerializer::sanitizeForSerialization($request->getTradeNo(), 'string'));
        }
        if($request->getDate() != null){
            $internalRequest->addParameter('date', ObjectSerializer::sanitizeForSerialization($request->getDate(), 'string'));
        }
        if($request->getSystemNo() != null){
            $internalRequest->addParameter('systemNo', ObjectSerializer::sanitizeForSerialization($request->getSystemNo(), 'string'));
        }
        if($request->getTerminalNo() != null){
            $internalRequest->addParameter('terminalNo', ObjectSerializer::sanitizeForSerialization($request->getTerminalNo(), 'string'));
        }
        if($request->getPaNo() != null){
            $internalRequest->addParameter('paNo', ObjectSerializer::sanitizeForSerialization($request->getPaNo(), 'string'));
        }
        if($request->getValidateSequenceNo() != null){
            $internalRequest->addParameter('validateSequenceNo', ObjectSerializer::sanitizeForSerialization($request->getValidateSequenceNo(), 'string'));
        }
        if($request->getRequestType() != null){
            $internalRequest->addParameter('requestType', ObjectSerializer::sanitizeForSerialization($request->getRequestType(), 'string'));
        }
        if($request->getWarrantBank() != null){
            $internalRequest->addParameter('warrantBank', ObjectSerializer::sanitizeForSerialization($request->getWarrantBank(), 'string'));
        }
        if($request->getAesKey() != null){
            $internalRequest->addParameter('aesKey', ObjectSerializer::sanitizeForSerialization($request->getAesKey(), 'string'));
        }
        if($request->getUser() != null){
            $internalRequest->addParameter('user', ObjectSerializer::sanitizeForSerialization($request->getUser(), 'string'));
        }
        if($request->getPassword() != null){
            $internalRequest->addParameter('password', ObjectSerializer::sanitizeForSerialization($request->getPassword(), 'string'));
        }
        if($request->getProdId() != null){
            $internalRequest->addParameter('prodId', ObjectSerializer::sanitizeForSerialization($request->getProdId(), 'string'));
        }
        if($request->getReqType() != null){
            $internalRequest->addParameter('reqType', ObjectSerializer::sanitizeForSerialization($request->getReqType(), 'string'));
        }
        if($request->getSysId() != null){
            $internalRequest->addParameter('sysId', ObjectSerializer::sanitizeForSerialization($request->getSysId(), 'string'));
        }
        if($request->getRequestUrl() != null){
            $internalRequest->addParameter('requestUrl', ObjectSerializer::sanitizeForSerialization($request->getRequestUrl(), 'string'));
        }
        if($request->getMacKey() != null){
            $internalRequest->addParameter('macKey', ObjectSerializer::sanitizeForSerialization($request->getMacKey(), 'string'));
        }
        if($request->getEnvironment() != null){
            $internalRequest->addParameter('environment', ObjectSerializer::sanitizeForSerialization($request->getEnvironment(), 'string'));
        }
        if($request->getTpdu() != null){
            $internalRequest->addParameter('tpdu', ObjectSerializer::sanitizeForSerialization($request->getTpdu(), 'string'));
        }
        $internalRequest->addHeader(Headers::CONTENT_TYPE, $this->contentType);

        return $internalRequest;
    }
}
RealnameNotifyRequestMarshaller::__init();
