<?php


namespace Fy\Yeepay\Yop\Sdk\Service\P2f\Model;


use Fy\Yeepay\Yop\Sdk\Http\Headers;
use Fy\Yeepay\Yop\Sdk\Internal\DefaultRequest;
use Fy\Yeepay\Yop\Sdk\Internal\Request;
use Fy\Yeepay\Yop\Sdk\Model\Transform\RequestMarshaller;
use Fy\Yeepay\Yop\Sdk\Utils\ObjectSerializer;
use Fy\Yeepay\Yop\Sdk\Utils\UUIDUtils;

class CompanyFinanceAccountRequestMarshaller implements RequestMarshaller
{
    /**
     * @var CompanyFinanceAccountRequestMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new CompanyFinanceAccountRequestMarshaller();
    }

    /**
     * @return CompanyFinanceAccountRequestMarshaller
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
    private $resourcePath = '/rest/v1.0/p2f/company-finance/account';

    /**
     * @var string
     */
    private $contentType = 'application/x-www-form-urlencoded';


    /**
     * @param CompanyFinanceAccountRequest $request
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
        if($request->getCompName() != null){
            $internalRequest->addParameter('compName', ObjectSerializer::sanitizeForSerialization($request->getCompName(), 'string'));
        }
        if($request->getCompNo() != null){
            $internalRequest->addParameter('compNo', ObjectSerializer::sanitizeForSerialization($request->getCompNo(), 'string'));
        }
        if($request->getCustomerCertExpiry() != null){
            $internalRequest->addParameter('customerCertExpiry', ObjectSerializer::sanitizeForSerialization($request->getCustomerCertExpiry(), 'string'));
        }
        if($request->getRegSerialNoExpired() != null){
            $internalRequest->addParameter('regSerialNoExpired', ObjectSerializer::sanitizeForSerialization($request->getRegSerialNoExpired(), 'string'));
        }
        if($request->getCompTelephone() != null){
            $internalRequest->addParameter('compTelephone', ObjectSerializer::sanitizeForSerialization($request->getCompTelephone(), 'string'));
        }
        if($request->getOrgSMSMobile() != null){
            $internalRequest->addParameter('orgSMSMobile', ObjectSerializer::sanitizeForSerialization($request->getOrgSMSMobile(), 'string'));
        }
        if($request->getUniteCreditCode() != null){
            $internalRequest->addParameter('uniteCreditCode', ObjectSerializer::sanitizeForSerialization($request->getUniteCreditCode(), 'string'));
        }
        if($request->getCompEmail() != null){
            $internalRequest->addParameter('compEmail', ObjectSerializer::sanitizeForSerialization($request->getCompEmail(), 'string'));
        }
        if($request->getCompAddr() != null){
            $internalRequest->addParameter('compAddr', ObjectSerializer::sanitizeForSerialization($request->getCompAddr(), 'string'));
        }
        if($request->getZipCode() != null){
            $internalRequest->addParameter('zipCode', ObjectSerializer::sanitizeForSerialization($request->getZipCode(), 'string'));
        }
        if($request->getBizScope() != null){
            $internalRequest->addParameter('bizScope', ObjectSerializer::sanitizeForSerialization($request->getBizScope(), 'string'));
        }
        if($request->getLegalName() != null){
            $internalRequest->addParameter('legalName', ObjectSerializer::sanitizeForSerialization($request->getLegalName(), 'string'));
        }
        if($request->getLegalIdNo() != null){
            $internalRequest->addParameter('legalIdNo', ObjectSerializer::sanitizeForSerialization($request->getLegalIdNo(), 'string'));
        }
        if($request->getLegalStartDate() != null){
            $internalRequest->addParameter('legalStartDate', ObjectSerializer::sanitizeForSerialization($request->getLegalStartDate(), 'string'));
        }
        if($request->getLegalExpiredDate() != null){
            $internalRequest->addParameter('legalExpiredDate', ObjectSerializer::sanitizeForSerialization($request->getLegalExpiredDate(), 'string'));
        }
        if($request->getLegalMobile() != null){
            $internalRequest->addParameter('legalMobile', ObjectSerializer::sanitizeForSerialization($request->getLegalMobile(), 'string'));
        }
        if($request->getBankCode() != null){
            $internalRequest->addParameter('bankCode', ObjectSerializer::sanitizeForSerialization($request->getBankCode(), 'string'));
        }
        if($request->getBankName() != null){
            $internalRequest->addParameter('bankName', ObjectSerializer::sanitizeForSerialization($request->getBankName(), 'string'));
        }
        if($request->getBankCardNo() != null){
            $internalRequest->addParameter('bankCardNo', ObjectSerializer::sanitizeForSerialization($request->getBankCardNo(), 'string'));
        }
        if($request->getBindType() != null){
            $internalRequest->addParameter('bindType', ObjectSerializer::sanitizeForSerialization($request->getBindType(), 'string'));
        }
        if($request->getBindAcctBranch() != null){
            $internalRequest->addParameter('bindAcctBranch', ObjectSerializer::sanitizeForSerialization($request->getBindAcctBranch(), 'string'));
        }
        if($request->getThreeInOneFlag() != null){
            $internalRequest->addParameter('threeInOneFlag', ObjectSerializer::sanitizeForSerialization($request->getThreeInOneFlag(), 'string'));
        }
        if($request->getUniteCreditCodePath() != null){
            $internalRequest->addParameter('uniteCreditCodePath', ObjectSerializer::sanitizeForSerialization($request->getUniteCreditCodePath(), 'string'));
        }
        if($request->getFrontPhotoPath() != null){
            $internalRequest->addParameter('frontPhotoPath', ObjectSerializer::sanitizeForSerialization($request->getFrontPhotoPath(), 'string'));
        }
        if($request->getBackPhotoPath() != null){
            $internalRequest->addParameter('backPhotoPath', ObjectSerializer::sanitizeForSerialization($request->getBackPhotoPath(), 'string'));
        }
        if($request->getOpenAcctPermitCodePath() != null){
            $internalRequest->addParameter('openAcctPermitCodePath', ObjectSerializer::sanitizeForSerialization($request->getOpenAcctPermitCodePath(), 'string'));
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
CompanyFinanceAccountRequestMarshaller::__init();
