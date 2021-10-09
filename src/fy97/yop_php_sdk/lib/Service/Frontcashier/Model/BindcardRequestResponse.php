<?php


namespace Fy\Yeepay\Yop\Sdk\Service\Frontcashier\Model;


use Fy\Yeepay\Yop\Sdk\Model\BaseResponse;
class BindcardRequestResponse extends BaseResponse
{
    /**
     * @var BindcardRequestOpenAuthBindCardResponseDTOResult
     */
    private $result;

    function getResultClass()
    {
        return '\Fy\Yeepay\Yop\Sdk\Service\Frontcashier\Model\BindcardRequestOpenAuthBindCardResponseDTOResult';
    }

    /**
     * @param BindcardRequestOpenAuthBindCardResponseDTOResult $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return BindcardRequestOpenAuthBindCardResponseDTOResult
     */
    function getResult()
    {
        return $this->result;
    }
}
