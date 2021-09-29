<?php


namespace Fy\Yeepay\Yop\Sdk\Service\Std\Model;


use Fy\Yeepay\Yop\Sdk\Model\BaseResponse;
class BillFundbillApplyResponse extends BaseResponse
{
    /**
     * @var BillFundbillApplyManualGenerationResponseDTOResult
     */
    private $result;

    function getResultClass()
    {
        return '\Fy\Yeepay\Yop\Sdk\Service\Std\Model\BillFundbillApplyManualGenerationResponseDTOResult';
    }

    /**
     * @param BillFundbillApplyManualGenerationResponseDTOResult $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return BillFundbillApplyManualGenerationResponseDTOResult
     */
    function getResult()
    {
        return $this->result;
    }
}
