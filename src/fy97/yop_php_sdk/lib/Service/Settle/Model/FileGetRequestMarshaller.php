<?php


namespace Fy\Yeepay\Yop\Sdk\Service\Settle\Model;


use Fy\Yeepay\Yop\Sdk\Http\Headers;
use Fy\Yeepay\Yop\Sdk\Internal\DefaultRequest;
use Fy\Yeepay\Yop\Sdk\Internal\Request;
use Fy\Yeepay\Yop\Sdk\Model\Transform\RequestMarshaller;
use Fy\Yeepay\Yop\Sdk\Utils\ObjectSerializer;
use Fy\Yeepay\Yop\Sdk\Utils\UUIDUtils;

class FileGetRequestMarshaller implements RequestMarshaller
{
    /**
     * @var FileGetRequestMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new FileGetRequestMarshaller();
    }

    /**
     * @return FileGetRequestMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @var string
     */
    private $serviceName = 'Settle';

    /**
     * @var string
     */
    private $httpMethod = 'GET';

    /**
     * @var string
     */
    private $resourcePath = '/yos/v1.0/settle/file/get';

    /**
     * @var string
     */
    private $contentType = 'application/x-www-form-urlencoded';


    /**
     * @param FileGetRequest $request
     * @return Request
     */
    public function marshal($request)
    {
        $internalRequest = new DefaultRequest($this->serviceName);
        $internalRequest->setResourcePath($this->resourcePath);
        $internalRequest->setHttpMethod($this->httpMethod);
        $internalRequest->setYosFlag(true);
        if (!empty($request->getRequestConfig()) && !empty($request->getRequestConfig()->getCustomRequestHeaders())) {
            foreach ($request->getRequestConfig()->getCustomRequestHeaders() as $name => $value) {
                $internalRequest->addHeader($name, $value);
            }
        }
        if (!isset($internalRequest->getHeaders()[Headers::YOP_REQUEST_ID])) {
            $internalRequest->addHeader(Headers::YOP_REQUEST_ID, UUIDUtils::uuid());
        }
        if($request->getMerchantNo() != null){
            $internalRequest->addParameter('merchantNo', ObjectSerializer::sanitizeForSerialization($request->getMerchantNo(), 'string'));
        }
        if($request->getParentMerchantNo() != null){
            $internalRequest->addParameter('parentMerchantNo', ObjectSerializer::sanitizeForSerialization($request->getParentMerchantNo(), 'string'));
        }
        if($request->getSettleRequestNo() != null){
            $internalRequest->addParameter('settleRequestNo', ObjectSerializer::sanitizeForSerialization($request->getSettleRequestNo(), 'string'));
        }
        if($request->getSettleDate() != null){
            $internalRequest->addParameter('settleDate', ObjectSerializer::sanitizeForSerialization($request->getSettleDate(), 'string'));
        }
        $internalRequest->addHeader(Headers::CONTENT_TYPE, $this->contentType);

        return $internalRequest;
    }
}
FileGetRequestMarshaller::__init();
