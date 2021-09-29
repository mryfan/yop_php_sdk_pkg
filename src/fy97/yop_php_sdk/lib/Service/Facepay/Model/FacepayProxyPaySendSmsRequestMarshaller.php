<?php


namespace Fy\Yeepay\Yop\Sdk\Service\Facepay\Model;


use Fy\Yeepay\Yop\Sdk\Http\Headers;
use Fy\Yeepay\Yop\Sdk\Internal\DefaultRequest;
use Fy\Yeepay\Yop\Sdk\Internal\Request;
use Fy\Yeepay\Yop\Sdk\Model\Transform\RequestMarshaller;
use Fy\Yeepay\Yop\Sdk\Utils\ObjectSerializer;
use Fy\Yeepay\Yop\Sdk\Utils\UUIDUtils;

class FacepayProxyPaySendSmsRequestMarshaller implements RequestMarshaller
{
    /**
     * @var FacepayProxyPaySendSmsRequestMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new FacepayProxyPaySendSmsRequestMarshaller();
    }

    /**
     * @return FacepayProxyPaySendSmsRequestMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @var string
     */
    private $serviceName = 'Facepay';

    /**
     * @var string
     */
    private $httpMethod = 'POST';

    /**
     * @var string
     */
    private $resourcePath = '/rest/v1.0/facepay/facepay-proxy/pay-send-sms';

    /**
     * @var string
     */
    private $contentType = 'application/x-www-form-urlencoded';


    /**
     * @param FacepayProxyPaySendSmsRequest $request
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
        if($request->getUniquePayNo() != null){
            $internalRequest->addParameter('uniquePayNo', ObjectSerializer::sanitizeForSerialization($request->getUniquePayNo(), 'string'));
        }
        if($request->getBindBizNo() != null){
            $internalRequest->addParameter('bindBizNo', ObjectSerializer::sanitizeForSerialization($request->getBindBizNo(), 'string'));
        }
        if($request->getCvv2() != null){
            $internalRequest->addParameter('cvv2', ObjectSerializer::sanitizeForSerialization($request->getCvv2(), 'string'));
        }
        if($request->getExpireDate() != null){
            $internalRequest->addParameter('expireDate', ObjectSerializer::sanitizeForSerialization($request->getExpireDate(), 'string'));
        }
        if($request->getBizNo() != null){
            $internalRequest->addParameter('bizNo', ObjectSerializer::sanitizeForSerialization($request->getBizNo(), 'string'));
        }
        if($request->getBizToken() != null){
            $internalRequest->addParameter('bizToken', ObjectSerializer::sanitizeForSerialization($request->getBizToken(), 'string'));
        }
        if($request->getBizSystem() != null){
            $internalRequest->addParameter('bizSystem', ObjectSerializer::sanitizeForSerialization($request->getBizSystem(), 'string'));
        }
        if($request->getMtToken() != null){
            $internalRequest->addParameter('mtToken', ObjectSerializer::sanitizeForSerialization($request->getMtToken(), 'string'));
        }
        if($request->getMemberNo() != null){
            $internalRequest->addParameter('memberNo', ObjectSerializer::sanitizeForSerialization($request->getMemberNo(), 'string'));
        }
        $internalRequest->addHeader(Headers::CONTENT_TYPE, $this->contentType);

        return $internalRequest;
    }
}
FacepayProxyPaySendSmsRequestMarshaller::__init();
