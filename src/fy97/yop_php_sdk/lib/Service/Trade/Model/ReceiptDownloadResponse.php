<?php


namespace Fy\Yeepay\Yop\Sdk\Service\Trade\Model;


use Fy\Yeepay\Yop\Sdk\Model\BaseResponse;
class ReceiptDownloadResponse extends BaseResponse
{
    /**
     * @var ReceiptDownloadReceiptResponseDTOResult
     */
    private $result;

    function getResultClass()
    {
        return '\Fy\Yeepay\Yop\Sdk\Service\Trade\Model\ReceiptDownloadReceiptResponseDTOResult';
    }

    /**
     * @param ReceiptDownloadReceiptResponseDTOResult $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return ReceiptDownloadReceiptResponseDTOResult
     */
    function getResult()
    {
        return $this->result;
    }
}
