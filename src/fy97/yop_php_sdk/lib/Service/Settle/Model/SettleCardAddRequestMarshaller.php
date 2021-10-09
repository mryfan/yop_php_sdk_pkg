<?php


namespace Fy\Yeepay\Yop\Sdk\Service\Settle\Model;


use Fy\Yeepay\Yop\Sdk\Http\Headers;
use Fy\Yeepay\Yop\Sdk\Internal\DefaultRequest;
use Fy\Yeepay\Yop\Sdk\Internal\Request;
use Fy\Yeepay\Yop\Sdk\Model\Transform\RequestMarshaller;
use Fy\Yeepay\Yop\Sdk\Utils\ObjectSerializer;
use Fy\Yeepay\Yop\Sdk\Utils\UUIDUtils;

class SettleCardAddRequestMarshaller implements RequestMarshaller
{
    /**
     * @var SettleCardAddRequestMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new SettleCardAddRequestMarshaller();
    }

    /**
     * @return SettleCardAddRequestMarshaller
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
    private $resourcePath = '/rest/v1.0/settle/settle-card/add';

    /**
     * @var string
     */
    private $contentType = 'application/x-www-form-urlencoded';


    /**
     * @param SettleCardAddRequest $request
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
        if($request->getBankCardNo() != null){
            $internalRequest->addParameter('bankCardNo', ObjectSerializer::sanitizeForSerialization($request->getBankCardNo(), 'string'));
        }
        if($request->getBankCardType() != null){
            $internalRequest->addParameter('bankCardType', ObjectSerializer::sanitizeForSerialization($request->getBankCardType(), 'string'));
        }
        if($request->getBankCode() != null){
            $internalRequest->addParameter('bankCode', ObjectSerializer::sanitizeForSerialization($request->getBankCode(), 'string'));
        }
        if($request->getDefaultSettleCard() != null){
            $internalRequest->addParameter('defaultSettleCard', ObjectSerializer::sanitizeForSerialization($request->getDefaultSettleCard(), 'bool'));
        }
        $internalRequest->addHeader(Headers::CONTENT_TYPE, $this->contentType);

        return $internalRequest;
    }
}
SettleCardAddRequestMarshaller::__init();
