<?php


namespace Fy\Yeepay\Yop\Sdk\Service\Divide\Model;


use Fy\Yeepay\Yop\Sdk\Model\BaseResponse;
class BackQueryResponse extends BaseResponse
{
    /**
     * @var BackQueryYopQueryDivideBackResDTOResult
     */
    private $result;

    function getResultClass()
    {
        return '\Fy\Yeepay\Yop\Sdk\Service\Divide\Model\BackQueryYopQueryDivideBackResDTOResult';
    }

    /**
     * @param BackQueryYopQueryDivideBackResDTOResult $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return BackQueryYopQueryDivideBackResDTOResult
     */
    function getResult()
    {
        return $this->result;
    }
}
