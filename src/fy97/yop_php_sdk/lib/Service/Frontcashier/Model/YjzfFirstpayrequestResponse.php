<?php


namespace Fy\Yeepay\Yop\Sdk\Service\Frontcashier\Model;


use Fy\Yeepay\Yop\Sdk\Model\BaseResponse;
class YjzfFirstpayrequestResponse extends BaseResponse
{
    /**
     * @var YjzfFirstpayrequestAPIYJZFFirstPaymentResponseDTOResult
     */
    private $result;

    function getResultClass()
    {
        return '\Fy\Yeepay\Yop\Sdk\Service\Frontcashier\Model\YjzfFirstpayrequestAPIYJZFFirstPaymentResponseDTOResult';
    }

    /**
     * @param YjzfFirstpayrequestAPIYJZFFirstPaymentResponseDTOResult $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return YjzfFirstpayrequestAPIYJZFFirstPaymentResponseDTOResult
     */
    function getResult()
    {
        return $this->result;
    }
}
