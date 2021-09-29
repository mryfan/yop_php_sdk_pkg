<?php


namespace Fy\Yeepay\Yop\Sdk\Service\Divide\Model;


use Fy\Yeepay\Yop\Sdk\Model\BaseResponse;
class CompleteResponse extends BaseResponse
{
    /**
     * @var CompleteYopOrderEndDivideResDTOResult
     */
    private $result;

    function getResultClass()
    {
        return '\Fy\Yeepay\Yop\Sdk\Service\Divide\Model\CompleteYopOrderEndDivideResDTOResult';
    }

    /**
     * @param CompleteYopOrderEndDivideResDTOResult $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return CompleteYopOrderEndDivideResDTOResult
     */
    function getResult()
    {
        return $this->result;
    }
}
