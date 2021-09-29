<?php


namespace Fy\Yeepay\Yop\Sdk\Service\Account\Model;


use Fy\Yeepay\Yop\Sdk\Model\BaseResponse;
class SupplierQueryResponse extends BaseResponse
{
    /**
     * @var SupplierQueryQuerySupplierRespDTOResult
     */
    private $result;

    function getResultClass()
    {
        return '\Fy\Yeepay\Yop\Sdk\Service\Account\Model\SupplierQueryQuerySupplierRespDTOResult';
    }

    /**
     * @param SupplierQueryQuerySupplierRespDTOResult $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return SupplierQueryQuerySupplierRespDTOResult
     */
    function getResult()
    {
        return $this->result;
    }
}
