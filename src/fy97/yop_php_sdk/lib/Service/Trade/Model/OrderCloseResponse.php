<?php


namespace Fy\Yeepay\Yop\Sdk\Service\Trade\Model;


use Fy\Yeepay\Yop\Sdk\Model\BaseResponse;
class OrderCloseResponse extends BaseResponse
{
    /**
     * @var OrderCloseResponseOrderCloseDTOResult
     */
    private $result;

    function getResultClass()
    {
        return '\Fy\Yeepay\Yop\Sdk\Service\Trade\Model\OrderCloseResponseOrderCloseDTOResult';
    }

    /**
     * @param OrderCloseResponseOrderCloseDTOResult $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return OrderCloseResponseOrderCloseDTOResult
     */
    function getResult()
    {
        return $this->result;
    }
}
