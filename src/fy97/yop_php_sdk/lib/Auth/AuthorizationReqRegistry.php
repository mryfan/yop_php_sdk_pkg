<?php


namespace Fy\Yeepay\Yop\Sdk\Auth;


interface AuthorizationReqRegistry
{
    /**
     * @param $operationId string
     * @return AuthorizationReq
     */
    public function getAuthorizationReq($operationId);

}
