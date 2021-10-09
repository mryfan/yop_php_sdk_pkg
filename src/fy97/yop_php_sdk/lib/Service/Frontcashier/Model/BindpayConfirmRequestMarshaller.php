<?php


namespace Fy\Yeepay\Yop\Sdk\Service\Frontcashier\Model;


use Fy\Yeepay\Yop\Sdk\Http\Headers;
use Fy\Yeepay\Yop\Sdk\Internal\DefaultRequest;
use Fy\Yeepay\Yop\Sdk\Internal\Request;
use Fy\Yeepay\Yop\Sdk\Model\Transform\RequestMarshaller;
use Fy\Yeepay\Yop\Sdk\Utils\ObjectSerializer;
use Fy\Yeepay\Yop\Sdk\Utils\UUIDUtils;

class BindpayConfirmRequestMarshaller implements RequestMarshaller
{
    /**
     * @var BindpayConfirmRequestMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new BindpayConfirmRequestMarshaller();
    }

    /**
     * @return BindpayConfirmRequestMarshaller
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
    private $resourcePath = '/rest/v1.0/frontcashier/bindpay/confirm';

    /**
     * @var string
     */
    private $contentType = 'application/x-www-form-urlencoded';


    /**
     * @param BindpayConfirmRequest $request
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
        if($request->getToken() != null){
            $internalRequest->addParameter('token', ObjectSerializer::sanitizeForSerialization($request->getToken(), 'string'));
        }
        if($request->getVersion() != null){
            $internalRequest->addParameter('version', ObjectSerializer::sanitizeForSerialization($request->getVersion(), 'string'));
        }
        if($request->getVerifyCode() != null){
            $internalRequest->addParameter('verifyCode', ObjectSerializer::sanitizeForSerialization($request->getVerifyCode(), 'string'));
        }
        if($request->getCardno() != null){
            $internalRequest->addParameter('cardno', ObjectSerializer::sanitizeForSerialization($request->getCardno(), 'string'));
        }
        if($request->getOwner() != null){
            $internalRequest->addParameter('owner', ObjectSerializer::sanitizeForSerialization($request->getOwner(), 'string'));
        }
        if($request->getIdno() != null){
            $internalRequest->addParameter('idno', ObjectSerializer::sanitizeForSerialization($request->getIdno(), 'string'));
        }
        if($request->getPhoneNo() != null){
            $internalRequest->addParameter('phoneNo', ObjectSerializer::sanitizeForSerialization($request->getPhoneNo(), 'string'));
        }
        if($request->getYpMobile() != null){
            $internalRequest->addParameter('ypMobile', ObjectSerializer::sanitizeForSerialization($request->getYpMobile(), 'string'));
        }
        if($request->getAvlidDate() != null){
            $internalRequest->addParameter('avlidDate', ObjectSerializer::sanitizeForSerialization($request->getAvlidDate(), 'string'));
        }
        if($request->getCvv2() != null){
            $internalRequest->addParameter('cvv2', ObjectSerializer::sanitizeForSerialization($request->getCvv2(), 'string'));
        }
        if($request->getIdCardType() != null){
            $internalRequest->addParameter('idCardType', ObjectSerializer::sanitizeForSerialization($request->getIdCardType(), 'string'));
        }
        if($request->getBankPWD() != null){
            $internalRequest->addParameter('bankPWD', ObjectSerializer::sanitizeForSerialization($request->getBankPWD(), 'string'));
        }
        $internalRequest->addHeader(Headers::CONTENT_TYPE, $this->contentType);

        return $internalRequest;
    }
}
BindpayConfirmRequestMarshaller::__init();
