<?php


namespace Fy\Yeepay\Yop\Sdk\Service\Frontcashier\Model;


use Fy\Yeepay\Yop\Sdk\Model\BaseResponse;
class BindcardConfirm0Response extends BaseResponse
{
    /**
     * @var BindcardConfirmOpenAuthBindCardConfirmResponseDTOResult
     */
    private $result;

    function getResultClass()
    {
        return '\Fy\Yeepay\Yop\Sdk\Service\Frontcashier\Model\BindcardConfirmOpenAuthBindCardConfirmResponseDTOResult';
    }

    /**
     * @param BindcardConfirmOpenAuthBindCardConfirmResponseDTOResult $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return BindcardConfirmOpenAuthBindCardConfirmResponseDTOResult
     */
    function getResult()
    {
        return $this->result;
    }
}
