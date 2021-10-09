<?php


namespace Fy\Yeepay\Yop\Sdk\Model\Transform;


use Fy\Yeepay\Yop\Sdk\Internal\Request;
use Fy\Yeepay\Yop\Sdk\Model\BaseRequest;

interface RequestMarshaller
{
    /**
     * @param BaseRequest $request
     * @return Request
     */
    public function marshal($request);
}