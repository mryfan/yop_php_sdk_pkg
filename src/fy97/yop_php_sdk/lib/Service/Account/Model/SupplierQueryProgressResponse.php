<?php


namespace Fy\Yeepay\Yop\Sdk\Service\Account\Model;


use Fy\Yeepay\Yop\Sdk\Model\BaseResponse;
class SupplierQueryProgressResponse extends BaseResponse
{
    /**
     * @var SupplierQueryProgressApplySupplierProgressRespDTOResult
     */
    private $result;

    function getResultClass()
    {
        return '\Fy\Yeepay\Yop\Sdk\Service\Account\Model\SupplierQueryProgressApplySupplierProgressRespDTOResult';
    }

    /**
     * @param SupplierQueryProgressApplySupplierProgressRespDTOResult $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return SupplierQueryProgressApplySupplierProgressRespDTOResult
     */
    function getResult()
    {
        return $this->result;
    }
}
