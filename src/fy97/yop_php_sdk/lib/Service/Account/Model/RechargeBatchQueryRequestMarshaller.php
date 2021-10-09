<?php


namespace Fy\Yeepay\Yop\Sdk\Service\Account\Model;


use Fy\Yeepay\Yop\Sdk\Http\Headers;
use Fy\Yeepay\Yop\Sdk\Internal\DefaultRequest;
use Fy\Yeepay\Yop\Sdk\Internal\Request;
use Fy\Yeepay\Yop\Sdk\Model\Transform\RequestMarshaller;
use Fy\Yeepay\Yop\Sdk\Utils\ObjectSerializer;
use Fy\Yeepay\Yop\Sdk\Utils\UUIDUtils;

class RechargeBatchQueryRequestMarshaller implements RequestMarshaller
{
    /**
     * @var RechargeBatchQueryRequestMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new RechargeBatchQueryRequestMarshaller();
    }

    /**
     * @return RechargeBatchQueryRequestMarshaller
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
    private $httpMethod = 'GET';

    /**
     * @var string
     */
    private $resourcePath = '/rest/v1.0/account/recharge/batch-query';

    /**
     * @var string
     */
    private $contentType = 'application/x-www-form-urlencoded';


    /**
     * @param RechargeBatchQueryRequest $request
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
        if($request->getQueryStartDate() != null){
            $internalRequest->addParameter('queryStartDate', ObjectSerializer::sanitizeForSerialization($request->getQueryStartDate(), 'string'));
        }
        if($request->getQueryEndDate() != null){
            $internalRequest->addParameter('queryEndDate', ObjectSerializer::sanitizeForSerialization($request->getQueryEndDate(), 'string'));
        }
        $internalRequest->addHeader(Headers::CONTENT_TYPE, $this->contentType);

        return $internalRequest;
    }
}
RechargeBatchQueryRequestMarshaller::__init();
