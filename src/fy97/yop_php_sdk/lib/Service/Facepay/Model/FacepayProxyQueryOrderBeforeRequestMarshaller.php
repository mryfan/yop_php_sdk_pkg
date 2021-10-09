<?php


namespace Fy\Yeepay\Yop\Sdk\Service\Facepay\Model;


use Fy\Yeepay\Yop\Sdk\Http\Headers;
use Fy\Yeepay\Yop\Sdk\Internal\DefaultRequest;
use Fy\Yeepay\Yop\Sdk\Internal\Request;
use Fy\Yeepay\Yop\Sdk\Model\Transform\RequestMarshaller;
use Fy\Yeepay\Yop\Sdk\Utils\ObjectSerializer;
use Fy\Yeepay\Yop\Sdk\Utils\UUIDUtils;

class FacepayProxyQueryOrderBeforeRequestMarshaller implements RequestMarshaller
{
    /**
     * @var FacepayProxyQueryOrderBeforeRequestMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new FacepayProxyQueryOrderBeforeRequestMarshaller();
    }

    /**
     * @return FacepayProxyQueryOrderBeforeRequestMarshaller
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
    private $resourcePath = '/rest/v1.0/facepay/facepay-proxy/query-order-before';

    /**
     * @var string
     */
    private $contentType = 'application/json';


    /**
     * @param FacepayProxyQueryOrderBeforeRequest $request
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
FacepayProxyQueryOrderBeforeRequestMarshaller::__init();
