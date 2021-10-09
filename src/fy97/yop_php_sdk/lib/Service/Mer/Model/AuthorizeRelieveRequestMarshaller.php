<?php


namespace Fy\Yeepay\Yop\Sdk\Service\Mer\Model;


use Fy\Yeepay\Yop\Sdk\Http\Headers;
use Fy\Yeepay\Yop\Sdk\Internal\DefaultRequest;
use Fy\Yeepay\Yop\Sdk\Internal\Request;
use Fy\Yeepay\Yop\Sdk\Model\Transform\RequestMarshaller;
use Fy\Yeepay\Yop\Sdk\Utils\ObjectSerializer;
use Fy\Yeepay\Yop\Sdk\Utils\UUIDUtils;

class AuthorizeRelieveRequestMarshaller implements RequestMarshaller
{
    /**
     * @var AuthorizeRelieveRequestMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new AuthorizeRelieveRequestMarshaller();
    }

    /**
     * @return AuthorizeRelieveRequestMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @var string
     */
    private $serviceName = 'Mer';

    /**
     * @var string
     */
    private $httpMethod = 'POST';

    /**
     * @var string
     */
    private $resourcePath = '/rest/v2.0/mer/authorize/relieve';

    /**
     * @var string
     */
    private $contentType = 'application/x-www-form-urlencoded';


    /**
     * @param AuthorizeRelieveRequest $request
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
        if($request->getAuthorizeMerchantNo() != null){
            $internalRequest->addParameter('authorizeMerchantNo', ObjectSerializer::sanitizeForSerialization($request->getAuthorizeMerchantNo(), 'string'));
        }
        if($request->getBizType() != null){
            $internalRequest->addParameter('bizType', ObjectSerializer::sanitizeForSerialization($request->getBizType(), 'string'));
        }
        $internalRequest->addHeader(Headers::CONTENT_TYPE, $this->contentType);

        return $internalRequest;
    }
}
AuthorizeRelieveRequestMarshaller::__init();
