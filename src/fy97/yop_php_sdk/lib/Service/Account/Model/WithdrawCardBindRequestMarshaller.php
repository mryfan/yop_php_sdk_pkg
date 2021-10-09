<?php


namespace Fy\Yeepay\Yop\Sdk\Service\Account\Model;


use Fy\Yeepay\Yop\Sdk\Http\Headers;
use Fy\Yeepay\Yop\Sdk\Internal\DefaultRequest;
use Fy\Yeepay\Yop\Sdk\Internal\Request;
use Fy\Yeepay\Yop\Sdk\Model\Transform\RequestMarshaller;
use Fy\Yeepay\Yop\Sdk\Utils\ObjectSerializer;
use Fy\Yeepay\Yop\Sdk\Utils\UUIDUtils;

class WithdrawCardBindRequestMarshaller implements RequestMarshaller
{
    /**
     * @var WithdrawCardBindRequestMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new WithdrawCardBindRequestMarshaller();
    }

    /**
     * @return WithdrawCardBindRequestMarshaller
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
    private $httpMethod = 'POST';

    /**
     * @var string
     */
    private $resourcePath = '/rest/v1.0/account/withdraw/card/bind';

    /**
     * @var string
     */
    private $contentType = 'application/x-www-form-urlencoded';


    /**
     * @param WithdrawCardBindRequest $request
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
        if($request->getMerchantNo() != null){
            $internalRequest->addParameter('merchantNo', ObjectSerializer::sanitizeForSerialization($request->getMerchantNo(), 'string'));
        }
        if($request->getBankCardType() != null){
            $internalRequest->addParameter('bankCardType', ObjectSerializer::sanitizeForSerialization($request->getBankCardType(), 'string'));
        }
        if($request->getAccountNo() != null){
            $internalRequest->addParameter('accountNo', ObjectSerializer::sanitizeForSerialization($request->getAccountNo(), 'string'));
        }
        if($request->getBankCode() != null){
            $internalRequest->addParameter('bankCode', ObjectSerializer::sanitizeForSerialization($request->getBankCode(), 'string'));
        }
        if($request->getBranchCode() != null){
            $internalRequest->addParameter('branchCode', ObjectSerializer::sanitizeForSerialization($request->getBranchCode(), 'string'));
        }
        $internalRequest->addHeader(Headers::CONTENT_TYPE, $this->contentType);

        return $internalRequest;
    }
}
WithdrawCardBindRequestMarshaller::__init();
