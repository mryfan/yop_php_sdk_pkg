<?php


namespace Fy\Yeepay\Yop\Sdk\Service\Insurance\Model;


use Fy\Yeepay\Yop\Sdk\Http\Headers;
use Fy\Yeepay\Yop\Sdk\Internal\DefaultRequest;
use Fy\Yeepay\Yop\Sdk\Internal\Request;
use Fy\Yeepay\Yop\Sdk\Model\Transform\RequestMarshaller;
use Fy\Yeepay\Yop\Sdk\Utils\ObjectSerializer;
use Fy\Yeepay\Yop\Sdk\Utils\UUIDUtils;

class RealnameAuthRequestMarshaller implements RequestMarshaller
{
    /**
     * @var RealnameAuthRequestMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new RealnameAuthRequestMarshaller();
    }

    /**
     * @return RealnameAuthRequestMarshaller
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
    private $resourcePath = '/rest/v1.0/insurance/realname/auth';

    /**
     * @var string
     */
    private $contentType = 'application/json';


    /**
     * @param RealnameAuthRequest $request
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
        $content = \Fy\GuzzleHttp\json_encode($request->getBody());
        $internalRequest->setContent(\Fy\GuzzleHttp\Psr7\stream_for($content));
        $internalRequest->addHeader(Headers::CONTENT_LENGTH, strlen($content));
        $internalRequest->addHeader(Headers::CONTENT_TYPE, $this->contentType);

        return $internalRequest;
    }
}
RealnameAuthRequestMarshaller::__init();
