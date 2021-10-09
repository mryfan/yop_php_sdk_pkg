<?php


namespace Fy\Yeepay\Yop\Sdk\Service\Mer\Model;


use Fy\Yeepay\Yop\Sdk\Model\BaseResponse;
class RegisterSaasMicroResponse extends BaseResponse
{
    /**
     * @var RegisterSaasMicroContributeMicroMerchantNetInRespDtoResult
     */
    private $result;

    function getResultClass()
    {
        return '\Fy\Yeepay\Yop\Sdk\Service\Mer\Model\RegisterSaasMicroContributeMicroMerchantNetInRespDtoResult';
    }

    /**
     * @param RegisterSaasMicroContributeMicroMerchantNetInRespDtoResult $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return RegisterSaasMicroContributeMicroMerchantNetInRespDtoResult
     */
    function getResult()
    {
        return $this->result;
    }
}
