<?php


namespace Fy\Yeepay\Yop\Sdk\Service\Facepay\Model;


use Fy\Yeepay\Yop\Sdk\Http\Headers;
use Fy\Yeepay\Yop\Sdk\Internal\DefaultRequest;
use Fy\Yeepay\Yop\Sdk\Internal\Request;
use Fy\Yeepay\Yop\Sdk\Model\Transform\RequestMarshaller;
use Fy\Yeepay\Yop\Sdk\Utils\ObjectSerializer;
use Fy\Yeepay\Yop\Sdk\Utils\UUIDUtils;

class FacepayProxyOpenFaceAccountRequestMarshaller implements RequestMarshaller
{
    /**
     * @var FacepayProxyOpenFaceAccountRequestMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new FacepayProxyOpenFaceAccountRequestMarshaller();
    }

    /**
     * @return FacepayProxyOpenFaceAccountRequestMarshaller
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
    private $resourcePath = '/rest/v1.0/facepay/facepay-proxy/open-face-account';

    /**
     * @var string
     */
    private $contentType = 'application/x-www-form-urlencoded';


    /**
     * @param FacepayProxyOpenFaceAccountRequest $request
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
        if($request->getFaceImageFirst() != null){
            $internalRequest->addParameter('faceImageFirst', ObjectSerializer::sanitizeForSerialization($request->getFaceImageFirst(), 'string'));
        }
        if($request->getFaceImageSecond() != null){
            $internalRequest->addParameter('faceImageSecond', ObjectSerializer::sanitizeForSerialization($request->getFaceImageSecond(), 'string'));
        }
        if($request->getFaceImageThird() != null){
            $internalRequest->addParameter('faceImageThird', ObjectSerializer::sanitizeForSerialization($request->getFaceImageThird(), 'string'));
        }
        if($request->getCollectType() != null){
            $internalRequest->addParameter('collectType', ObjectSerializer::sanitizeForSerialization($request->getCollectType(), 'string'));
        }
        if($request->getCollectDevice() != null){
            $internalRequest->addParameter('collectDevice', ObjectSerializer::sanitizeForSerialization($request->getCollectDevice(), 'string'));
        }
        if($request->getOrderToken() != null){
            $internalRequest->addParameter('orderToken', ObjectSerializer::sanitizeForSerialization($request->getOrderToken(), 'string'));
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
FacepayProxyOpenFaceAccountRequestMarshaller::__init();
