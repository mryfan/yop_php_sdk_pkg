<?php


namespace Fy\Yeepay\Yop\Sdk\Service\P2f\Model;


use Fy\Yeepay\Yop\Sdk\Http\Headers;
use Fy\Yeepay\Yop\Sdk\Internal\DefaultRequest;
use Fy\Yeepay\Yop\Sdk\Internal\Request;
use Fy\Yeepay\Yop\Sdk\Model\Transform\RequestMarshaller;
use Fy\Yeepay\Yop\Sdk\Utils\ObjectSerializer;
use Fy\Yeepay\Yop\Sdk\Utils\UUIDUtils;

class FileUploadRequestMarshaller implements RequestMarshaller
{
    /**
     * @var FileUploadRequestMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new FileUploadRequestMarshaller();
    }

    /**
     * @return FileUploadRequestMarshaller
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
    private $resourcePath = '/yos/v1.0/p2f/file-upload';

    /**
     * @var string
     */
    private $contentType = 'multipart/form-data';


    /**
     * @param FileUploadRequest $request
     * @return Request
     */
    public function marshal($request)
    {
        $internalRequest = new DefaultRequest($this->serviceName);
        $internalRequest->setResourcePath($this->resourcePath);
        $internalRequest->setHttpMethod($this->httpMethod);
        $internalRequest->setYosFlag(true);
        if (!empty($request->getRequestConfig()) && !empty($request->getRequestConfig()->getCustomRequestHeaders())) {
            foreach ($request->getRequestConfig()->getCustomRequestHeaders() as $name => $value) {
                $internalRequest->addHeader($name, $value);
            }
        }
        if (!isset($internalRequest->getHeaders()[Headers::YOP_REQUEST_ID])) {
            $internalRequest->addHeader(Headers::YOP_REQUEST_ID, UUIDUtils::uuid());
        }
        if($request->getRequestNo() != null){
            $internalRequest->addParameter('requestNo', ObjectSerializer::sanitizeForSerialization($request->getRequestNo(), 'string'));
        }
        if($request->getIdentityType() != null){
            $internalRequest->addParameter('identityType', ObjectSerializer::sanitizeForSerialization($request->getIdentityType(), 'string'));
        }
        if($request->getIdentityId() != null){
            $internalRequest->addParameter('identityId', ObjectSerializer::sanitizeForSerialization($request->getIdentityId(), 'string'));
        }
        if($request->getIdType() != null){
            $internalRequest->addParameter('idType', ObjectSerializer::sanitizeForSerialization($request->getIdType(), 'string'));
        }
        if($request->getIdNO() != null){
            $internalRequest->addParameter('idNO', ObjectSerializer::sanitizeForSerialization($request->getIdNO(), 'string'));
        }
        if($request->getFileType() != null){
            $internalRequest->addParameter('fileType', ObjectSerializer::sanitizeForSerialization($request->getFileType(), 'string'));
        }
        if($request->getImage() != null){
            $internalRequest->addMultiPartFile('image', $request->getImage());
        }

        return $internalRequest;
    }
}
FileUploadRequestMarshaller::__init();
