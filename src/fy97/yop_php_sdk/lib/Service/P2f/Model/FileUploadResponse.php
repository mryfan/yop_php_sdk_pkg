<?php


namespace Fy\Yeepay\Yop\Sdk\Service\P2f\Model;


use Fy\Yeepay\Yop\Sdk\Model\BaseResponse;
class FileUploadResponse extends BaseResponse
{
    /**
     * @var FileUploadCustFileUploadResponseDTOResult
     */
    private $result;

    function getResultClass()
    {
        return '\Fy\Yeepay\Yop\Sdk\Service\P2f\Model\FileUploadCustFileUploadResponseDTOResult';
    }

    /**
     * @param FileUploadCustFileUploadResponseDTOResult $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return FileUploadCustFileUploadResponseDTOResult
     */
    function getResult()
    {
        return $this->result;
    }
}
