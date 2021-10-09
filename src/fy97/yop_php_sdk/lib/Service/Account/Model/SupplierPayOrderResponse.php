<?php


namespace Fy\Yeepay\Yop\Sdk\Service\Account\Model;


use Fy\Yeepay\Yop\Sdk\Model\BaseResponse;
class SupplierPayOrderResponse extends BaseResponse
{
    /**
     * @var SupplierPayOrderRemitRespDTOResult
     */
    private $result;

    function getResultClass()
    {
        return '\Fy\Yeepay\Yop\Sdk\Service\Account\Model\SupplierPayOrderRemitRespDTOResult';
    }

    /**
     * @param SupplierPayOrderRemitRespDTOResult $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return SupplierPayOrderRemitRespDTOResult
     */
    function getResult()
    {
        return $this->result;
    }
}
