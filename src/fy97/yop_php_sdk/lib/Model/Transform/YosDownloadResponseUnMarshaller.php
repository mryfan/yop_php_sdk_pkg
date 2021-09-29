<?php


namespace Fy\Yeepay\Yop\Sdk\Model\Transform;


use Fy\Yeepay\Yop\Sdk\Exception\YopClientException;
use Fy\Yeepay\Yop\Sdk\Http\ContentType;
use Fy\Yeepay\Yop\Sdk\Http\HttpStatus;
use Fy\Yeepay\Yop\Sdk\Http\YopHttpResponse;
use Fy\Yeepay\Yop\Sdk\Model\BaseResponse;
use Fy\Yeepay\Yop\Sdk\Model\YosDownloadResponse;

class YosDownloadResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @return YosDownloadResponse
     */
    protected function getResponseInstance()
    {
        return new YosDownloadResponse();
    }

    protected function handleContent(YopHttpResponse $yopHttpResponse, $contentType, BaseResponse $response, ResponseUnMarshalParams $params)
    {
        $statusCode = $yopHttpResponse->getStatusCode();
        if ($statusCode / 100 == HttpStatus::SC_OK / 100 && $statusCode != HttpStatus::SC_NO_CONTENT) {
            $response->setResult($yopHttpResponse->getContent());
        } elseif ($statusCode >= HttpStatus::SC_INTERNAL_SERVER_ERROR && $statusCode != HttpStatus::SC_BAD_GATEWAY) {
            $content = $yopHttpResponse->readContent();
            if ($params->isNeedDecrypt() && $contentType == ContentType::APPLICATION_JSON) {
                $content = $params->getEncryptor()->decrypt($content);
            }
            $this->handleErrorResponse($content, $response->getMetadata(), $yopHttpResponse);
        } else {
            throw new YopClientException("Unexpected http statusCode:" . $statusCode);
        }
    }


}
