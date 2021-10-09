<?php


namespace Fy\Yeepay\Yop\Sdk\Service\P2f\Model;


use Fy\Yeepay\Yop\Sdk\Http\Headers;
use Fy\Yeepay\Yop\Sdk\Internal\DefaultRequest;
use Fy\Yeepay\Yop\Sdk\Internal\Request;
use Fy\Yeepay\Yop\Sdk\Model\Transform\RequestMarshaller;
use Fy\Yeepay\Yop\Sdk\Utils\ObjectSerializer;
use Fy\Yeepay\Yop\Sdk\Utils\UUIDUtils;

class CompanyFinanceSmallPaymentRequestMarshaller implements RequestMarshaller
{
    /**
     * @var CompanyFinanceSmallPaymentRequestMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new CompanyFinanceSmallPaymentRequestMarshaller();
    }

    /**
     * @return CompanyFinanceSmallPaymentRequestMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @var string
     */
    private $serviceName = 'P2f';

    /**
     * @var string
     */
    private $httpMethod = 'POST';

    /**
     * @var string
     */
    private $resourcePath = '/rest/v1.0/p2f/company-finance/small-payment';

    /**
     * @var string
     */
    private $contentType = 'application/x-www-form-urlencoded';


    /**
     * @param CompanyFinanceSmallPaymentRequest $request
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
        if($request->getConfirmCheckCode() != null){
            $internalRequest->addParameter('confirmCheckCode', ObjectSerializer::sanitizeForSerialization($request->getConfirmCheckCode(), 'string'));
        }
        if($request->getChannelCode() != null){
            $internalRequest->addParameter('channelCode', ObjectSerializer::sanitizeForSerialization($request->getChannelCode(), 'string'));
        }
        if($request->getRequestNo() != null){
            $internalRequest->addParameter('requestNo', ObjectSerializer::sanitizeForSerialization($request->getRequestNo(), 'string'));
        }
        if($request->getMerchantNo() != null){
            $internalRequest->addParameter('merchantNo', ObjectSerializer::sanitizeForSerialization($request->getMerchantNo(), 'string'));
        }
        $internalRequest->addHeader(Headers::CONTENT_TYPE, $this->contentType);

        return $internalRequest;
    }
}
CompanyFinanceSmallPaymentRequestMarshaller::__init();
