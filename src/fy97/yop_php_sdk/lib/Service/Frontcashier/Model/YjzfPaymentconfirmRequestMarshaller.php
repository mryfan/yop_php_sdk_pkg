<?php


namespace Fy\Yeepay\Yop\Sdk\Service\Frontcashier\Model;


use Fy\Yeepay\Yop\Sdk\Http\Headers;
use Fy\Yeepay\Yop\Sdk\Internal\DefaultRequest;
use Fy\Yeepay\Yop\Sdk\Internal\Request;
use Fy\Yeepay\Yop\Sdk\Model\Transform\RequestMarshaller;
use Fy\Yeepay\Yop\Sdk\Utils\ObjectSerializer;
use Fy\Yeepay\Yop\Sdk\Utils\UUIDUtils;

class YjzfPaymentconfirmRequestMarshaller implements RequestMarshaller
{
    /**
     * @var YjzfPaymentconfirmRequestMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new YjzfPaymentconfirmRequestMarshaller();
    }

    /**
     * @return YjzfPaymentconfirmRequestMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @var string
     */
    private $serviceName = 'Frontcashier';

    /**
     * @var string
     */
    private $httpMethod = 'POST';

    /**
     * @var string
     */
    private $resourcePath = '/rest/v1.0/frontcashier/yjzf/paymentconfirm';

    /**
     * @var string
     */
    private $contentType = 'application/x-www-form-urlencoded';


    /**
     * @param YjzfPaymentconfirmRequest $request
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
        if($request->getRecordId() != null){
            $internalRequest->addParameter('recordId', ObjectSerializer::sanitizeForSerialization($request->getRecordId(), 'string'));
        }
        if($request->getVerifyCode() != null){
            $internalRequest->addParameter('verifyCode', ObjectSerializer::sanitizeForSerialization($request->getVerifyCode(), 'string'));
        }
        if($request->getOwner() != null){
            $internalRequest->addParameter('owner', ObjectSerializer::sanitizeForSerialization($request->getOwner(), 'string'));
        }
        if($request->getIdNo() != null){
            $internalRequest->addParameter('idNo', ObjectSerializer::sanitizeForSerialization($request->getIdNo(), 'string'));
        }
        if($request->getPhoneNo() != null){
            $internalRequest->addParameter('phoneNo', ObjectSerializer::sanitizeForSerialization($request->getPhoneNo(), 'string'));
        }
        if($request->getCvv() != null){
            $internalRequest->addParameter('cvv', ObjectSerializer::sanitizeForSerialization($request->getCvv(), 'string'));
        }
        if($request->getAvlidDate() != null){
            $internalRequest->addParameter('avlidDate', ObjectSerializer::sanitizeForSerialization($request->getAvlidDate(), 'string'));
        }
        if($request->getBankPWD() != null){
            $internalRequest->addParameter('bankPWD', ObjectSerializer::sanitizeForSerialization($request->getBankPWD(), 'string'));
        }
        if($request->getPaymentExt() != null){
            $internalRequest->addParameter('paymentExt', ObjectSerializer::sanitizeForSerialization($request->getPaymentExt(), 'string'));
        }
        if($request->getToken() != null){
            $internalRequest->addParameter('token', ObjectSerializer::sanitizeForSerialization($request->getToken(), 'string'));
        }
        if($request->getVersion() != null){
            $internalRequest->addParameter('version', ObjectSerializer::sanitizeForSerialization($request->getVersion(), 'string'));
        }
        $internalRequest->addHeader(Headers::CONTENT_TYPE, $this->contentType);

        return $internalRequest;
    }
}
YjzfPaymentconfirmRequestMarshaller::__init();
