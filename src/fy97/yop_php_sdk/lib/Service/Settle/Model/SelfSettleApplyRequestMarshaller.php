<?php


namespace Fy\Yeepay\Yop\Sdk\Service\Settle\Model;


use Fy\Yeepay\Yop\Sdk\Http\Headers;
use Fy\Yeepay\Yop\Sdk\Internal\DefaultRequest;
use Fy\Yeepay\Yop\Sdk\Internal\Request;
use Fy\Yeepay\Yop\Sdk\Model\Transform\RequestMarshaller;
use Fy\Yeepay\Yop\Sdk\Utils\ObjectSerializer;
use Fy\Yeepay\Yop\Sdk\Utils\UUIDUtils;

class SelfSettleApplyRequestMarshaller implements RequestMarshaller
{
    /**
     * @var SelfSettleApplyRequestMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new SelfSettleApplyRequestMarshaller();
    }

    /**
     * @return SelfSettleApplyRequestMarshaller
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
    private $httpMethod = 'POST';

    /**
     * @var string
     */
    private $resourcePath = '/rest/v1.0/settle/self-settle/apply';

    /**
     * @var string
     */
    private $contentType = 'application/x-www-form-urlencoded';


    /**
     * @param SelfSettleApplyRequest $request
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
        if($request->getSettleRequestNo() != null){
            $internalRequest->addParameter('settleRequestNo', ObjectSerializer::sanitizeForSerialization($request->getSettleRequestNo(), 'string'));
        }
        if($request->getOperatePeriod() != null){
            $internalRequest->addParameter('operatePeriod', ObjectSerializer::sanitizeForSerialization($request->getOperatePeriod(), 'string'));
        }
        if($request->getEndTime() != null){
            $internalRequest->addParameter('endTime', ObjectSerializer::sanitizeForSerialization($request->getEndTime(), 'string', 'date-time'));
        }
        if($request->getNotifyUrl() != null){
            $internalRequest->addParameter('notifyUrl', ObjectSerializer::sanitizeForSerialization($request->getNotifyUrl(), 'string', 'url'));
        }
        $internalRequest->addHeader(Headers::CONTENT_TYPE, $this->contentType);

        return $internalRequest;
    }
}
SelfSettleApplyRequestMarshaller::__init();
