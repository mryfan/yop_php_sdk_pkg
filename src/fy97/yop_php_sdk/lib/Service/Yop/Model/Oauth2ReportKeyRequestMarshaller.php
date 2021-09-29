<?php


namespace Fy\Yeepay\Yop\Sdk\Service\Yop\Model;


use Fy\Yeepay\Yop\Sdk\Http\Headers;
use Fy\Yeepay\Yop\Sdk\Internal\DefaultRequest;
use Fy\Yeepay\Yop\Sdk\Internal\Request;
use Fy\Yeepay\Yop\Sdk\Model\Transform\RequestMarshaller;
use Fy\Yeepay\Yop\Sdk\Utils\ObjectSerializer;
use Fy\Yeepay\Yop\Sdk\Utils\UUIDUtils;

class Oauth2ReportKeyRequestMarshaller implements RequestMarshaller
{
    /**
     * @var Oauth2ReportKeyRequestMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new Oauth2ReportKeyRequestMarshaller();
    }

    /**
     * @return Oauth2ReportKeyRequestMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @var string
     */
    private $serviceName = 'Yop';

    /**
     * @var string
     */
    private $httpMethod = 'POST';

    /**
     * @var string
     */
    private $resourcePath = '/rest/v1.0/yop/oauth2/report-key';

    /**
     * @var string
     */
    private $contentType = 'application/x-www-form-urlencoded';


    /**
     * @param Oauth2ReportKeyRequest $request
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
        if($request->getKeyType() != null){
            $internalRequest->addParameter('keyType', ObjectSerializer::sanitizeForSerialization($request->getKeyType(), 'string'));
        }
        if($request->getKey() != null){
            $internalRequest->addParameter('key', ObjectSerializer::sanitizeForSerialization($request->getKey(), 'string'));
        }
        $internalRequest->addHeader(Headers::CONTENT_TYPE, $this->contentType);

        return $internalRequest;
    }
}
Oauth2ReportKeyRequestMarshaller::__init();
