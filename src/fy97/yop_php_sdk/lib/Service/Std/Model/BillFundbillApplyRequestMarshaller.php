<?php


namespace Fy\Yeepay\Yop\Sdk\Service\Std\Model;


use Fy\Yeepay\Yop\Sdk\Http\Headers;
use Fy\Yeepay\Yop\Sdk\Internal\DefaultRequest;
use Fy\Yeepay\Yop\Sdk\Internal\Request;
use Fy\Yeepay\Yop\Sdk\Model\Transform\RequestMarshaller;
use Fy\Yeepay\Yop\Sdk\Utils\ObjectSerializer;
use Fy\Yeepay\Yop\Sdk\Utils\UUIDUtils;

class BillFundbillApplyRequestMarshaller implements RequestMarshaller
{
    /**
     * @var BillFundbillApplyRequestMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new BillFundbillApplyRequestMarshaller();
    }

    /**
     * @return BillFundbillApplyRequestMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @var string
     */
    private $serviceName = 'Std';

    /**
     * @var string
     */
    private $httpMethod = 'POST';

    /**
     * @var string
     */
    private $resourcePath = '/rest/v1.0/std/bill/fundbill/apply';

    /**
     * @var string
     */
    private $contentType = 'application/x-www-form-urlencoded';


    /**
     * @param BillFundbillApplyRequest $request
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
        if($request->getStartDate() != null){
            $internalRequest->addParameter('startDate', ObjectSerializer::sanitizeForSerialization($request->getStartDate(), 'string'));
        }
        if($request->getEndDate() != null){
            $internalRequest->addParameter('endDate', ObjectSerializer::sanitizeForSerialization($request->getEndDate(), 'string'));
        }
        if($request->getMerchantNo() != null){
            $internalRequest->addParameter('merchantNo', ObjectSerializer::sanitizeForSerialization($request->getMerchantNo(), 'string'));
        }
        if($request->getSubMerchantNo() != null){
            $internalRequest->addParameter('subMerchantNo', ObjectSerializer::sanitizeForSerialization($request->getSubMerchantNo(), 'string'));
        }
        if($request->getAccountType() != null){
            $internalRequest->addParameter('accountType', ObjectSerializer::sanitizeForSerialization($request->getAccountType(), 'string'));
        }
        if($request->getNotifyUrl() != null){
            $internalRequest->addParameter('notifyUrl', ObjectSerializer::sanitizeForSerialization($request->getNotifyUrl(), 'string'));
        }
        $internalRequest->addHeader(Headers::CONTENT_TYPE, $this->contentType);

        return $internalRequest;
    }
}
BillFundbillApplyRequestMarshaller::__init();
