<?php


namespace Fy\Yeepay\Yop\Sdk\Service\Common\Authority;


use Fy\Yeepay\Yop\Sdk\Auth\AuthorizationReq;
use Fy\Yeepay\Yop\Sdk\Auth\AuthorizationReqRegistry;
use Fy\Yeepay\Yop\Sdk\Auth\AuthorizationReqSupport;

class MockAuthorityReqRegistry implements AuthorizationReqRegistry
{

    /**
     * @param $operationId string
     * @return AuthorizationReq
     */
    public function getAuthorizationReq($operationId)
    {
        return AuthorizationReqSupport::getAuthorizationReq('YOP-RSA2048-SHA256');
    }
}