<?php


namespace Fy\Yeepay\Yop\Sdk\Service\Nccashierapi\Model;


use Fy\Yeepay\Yop\Sdk\Model\BaseResponse;
class ApiPayResponse extends BaseResponse
{
    /**
     * @var ApiPayUnifiedAPICashierResponseDTOResult
     */
    private $result;

    function getResultClass()
    {
        return '\Fy\Yeepay\Yop\Sdk\Service\Nccashierapi\Model\ApiPayUnifiedAPICashierResponseDTOResult';
    }

    /**
     * @param ApiPayUnifiedAPICashierResponseDTOResult $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return ApiPayUnifiedAPICashierResponseDTOResult
     */
    function getResult()
    {
        return $this->result;
    }
}
