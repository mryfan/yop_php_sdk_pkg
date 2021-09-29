<?php


namespace Fy\Yeepay\Yop\Sdk\Service\Divide\Model;


use Fy\Yeepay\Yop\Sdk\Model\BaseResponse;
class BackResponse extends BaseResponse
{
    /**
     * @var BackYopDivideBackResDTOResult
     */
    private $result;

    function getResultClass()
    {
        return '\Fy\Yeepay\Yop\Sdk\Service\Divide\Model\BackYopDivideBackResDTOResult';
    }

    /**
     * @param BackYopDivideBackResDTOResult $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return BackYopDivideBackResDTOResult
     */
    function getResult()
    {
        return $this->result;
    }
}
