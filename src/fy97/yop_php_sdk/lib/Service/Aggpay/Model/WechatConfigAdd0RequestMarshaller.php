<?php


namespace Fy\Yeepay\Yop\Sdk\Service\Aggpay\Model;


use Fy\Yeepay\Yop\Sdk\Http\Headers;
use Fy\Yeepay\Yop\Sdk\Internal\DefaultRequest;
use Fy\Yeepay\Yop\Sdk\Internal\Request;
use Fy\Yeepay\Yop\Sdk\Model\Transform\RequestMarshaller;
use Fy\Yeepay\Yop\Sdk\Utils\ObjectSerializer;
use Fy\Yeepay\Yop\Sdk\Utils\UUIDUtils;

class WechatConfigAdd0RequestMarshaller implements RequestMarshaller
{
    /**
     * @var WechatConfigAdd0RequestMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new WechatConfigAdd0RequestMarshaller();
    }

    /**
     * @return WechatConfigAdd0RequestMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @var string
     */
    private $serviceName = 'Aggpay';

    /**
     * @var string
     */
    private $httpMethod = 'POST';

    /**
     * @var string
     */
    private $resourcePath = '/rest/v2.0/aggpay/wechat-config/add';

    /**
     * @var string
     */
    private $contentType = 'application/x-www-form-urlencoded';


    /**
     * @param WechatConfigAdd0Request $request
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
        if($request->getTradeAuthDirList() != null){
            $internalRequest->addParameter('tradeAuthDirList', ObjectSerializer::sanitizeForSerialization($request->getTradeAuthDirList(), 'string'));
        }
        if($request->getAppIdList() != null){
            $internalRequest->addParameter('appIdList', ObjectSerializer::sanitizeForSerialization($request->getAppIdList(), 'string'));
        }
        $internalRequest->addHeader(Headers::CONTENT_TYPE, $this->contentType);

        return $internalRequest;
    }
}
WechatConfigAdd0RequestMarshaller::__init();
