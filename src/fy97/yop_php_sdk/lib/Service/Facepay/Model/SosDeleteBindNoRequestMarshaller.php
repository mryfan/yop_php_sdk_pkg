<?php


namespace Fy\Yeepay\Yop\Sdk\Service\Facepay\Model;


use Fy\Yeepay\Yop\Sdk\Http\Headers;
use Fy\Yeepay\Yop\Sdk\Internal\DefaultRequest;
use Fy\Yeepay\Yop\Sdk\Internal\Request;
use Fy\Yeepay\Yop\Sdk\Model\Transform\RequestMarshaller;
use Fy\Yeepay\Yop\Sdk\Utils\ObjectSerializer;
use Fy\Yeepay\Yop\Sdk\Utils\UUIDUtils;

class SosDeleteBindNoRequestMarshaller implements RequestMarshaller
{
    /**
     * @var SosDeleteBindNoRequestMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new SosDeleteBindNoRequestMarshaller();
    }

    /**
     * @return SosDeleteBindNoRequestMarshaller
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
    private $resourcePath = '/rest/v1.0/facepay/sos/delete-bind-no';

    /**
     * @var string
     */
    private $contentType = 'application/x-www-form-urlencoded';


    /**
     * @param SosDeleteBindNoRequest $request
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
        if($request->getString0() != null){
            $internalRequest->addParameter('string0', ObjectSerializer::sanitizeForSerialization($request->getString0(), 'string'));
        }
        if($request->getString1() != null){
            $internalRequest->addParameter('string1', ObjectSerializer::sanitizeForSerialization($request->getString1(), 'string'));
        }
        $internalRequest->addHeader(Headers::CONTENT_TYPE, $this->contentType);

        return $internalRequest;
    }
}
SosDeleteBindNoRequestMarshaller::__init();
