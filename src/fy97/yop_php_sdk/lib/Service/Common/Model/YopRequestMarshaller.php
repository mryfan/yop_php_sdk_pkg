<?php


namespace Fy\Yeepay\Yop\Sdk\Service\Common\Model;


use Fy\Yeepay\Yop\Sdk\Exception\YopClientException;
use Fy\Yeepay\Yop\Sdk\Http\ContentType;
use Fy\Yeepay\Yop\Sdk\Http\Headers;
use Fy\Yeepay\Yop\Sdk\Internal\DefaultRequest;
use Fy\Yeepay\Yop\Sdk\Internal\Request;
use Fy\Yeepay\Yop\Sdk\Model\Transform\RequestMarshaller;

class YopRequestMarshaller implements RequestMarshaller
{

    /**
     * @param YopRequest $request
     * @return Request
     * @throws YopClientException
     */
    public function marshal($request)
    {
        $parts = explode('/', $request->getApiUri());
        $result = new DefaultRequest($parts[3]);
        $result->setResourcePath($request->getApiUri());
        $result->setHttpMethod($request->getMethod());
        if ($parts[1] == 'yos') {
            $result->setYosFlag(true);
        }
        if (!empty($request->getMultipartFiles())) {
            foreach ($request->getMultipartFiles() as $key => $values) {
                foreach ($values as $value) {
                    $result->addMultiPartFile($key, $value);
                }
            }
            if (!empty($request->getParameters())) {
                $result->setParameters($this->marshalParameters($request->getParameters()));
            }
            return $result;
        }
        if (!empty($request->getParameters())) {
            $result->setParameters($this->marshalParameters($request->getParameters()));
            $result->addHeader(Headers::CONTENT_TYPE, ContentType::APPLICATION_FORM_URLENCODED);
            return $result;
        }
        if (!empty($request->getContent())) {
            if (is_string($request->getContent())) {
                $result->addHeader(Headers::CONTENT_TYPE, ContentType::APPLICATION_JSON);
            } else {
                $result->addHeader(Headers::CONTENT_TYPE, ContentType::APPLICATION_OCTET_STREAM);
            }
            $result->setContent(\Fy\GuzzleHttp\Psr7\stream_for($request->getContent()));
            return $result;
        }
        throw new YopClientException("empty request");
    }

    /**
     * @param array $parameters
     * @return array
     */
    private function marshalParameters(array $parameters)
    {
        $targetParameters = array();
        foreach ($parameters as $key => $values) {
            $targetValues = array();
            foreach ($values as $value) {
                $targetValues[] = strval($value);
            }
            $targetParameters[$key] = $targetValues;
        }
        return $targetParameters;
    }
}
