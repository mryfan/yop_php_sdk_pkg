<?php


namespace Fy\Yeepay\Yop\Sdk\Service\Account\Model;


use Fy\Yeepay\Yop\Sdk\Model\BaseResponse;
class SupplierApplyResponse extends BaseResponse
{
    /**
     * @var SupplierApplyApplySupplierRespDTOResult
     */
    private $result;

    function getResultClass()
    {
        return '\Fy\Yeepay\Yop\Sdk\Service\Account\Model\SupplierApplyApplySupplierRespDTOResult';
    }

    /**
     * @param SupplierApplyApplySupplierRespDTOResult $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return SupplierApplyApplySupplierRespDTOResult
     */
    function getResult()
    {
        return $this->result;
    }
}
