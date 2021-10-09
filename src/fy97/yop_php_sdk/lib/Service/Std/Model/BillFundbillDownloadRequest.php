<?php


namespace Fy\Yeepay\Yop\Sdk\Service\Std\Model;


use Fy\Yeepay\Yop\Sdk\Model\BaseRequest;

class BillFundbillDownloadRequest extends BaseRequest
{
    /**
     * @var string
     */
    private $merchantNo;
    /**
     * @var string
     */
    private $fileId;

    /**
     * Gets merchantNo
     *
     * @return string
     */
    public function getMerchantNo()
    {
        return $this->merchantNo;
    }

    /**
     * Sets merchantNo
     *
     * @param string $merchantNo
     * @return BillFundbillDownloadRequest
     */
    public function setMerchantNo($merchantNo)
    {
        $this->merchantNo = $merchantNo;
        return $this;
    }
    /**
     * Gets fileId
     *
     * @return string
     */
    public function getFileId()
    {
        return $this->fileId;
    }

    /**
     * Sets fileId
     *
     * @param string $fileId
     * @return BillFundbillDownloadRequest
     */
    public function setFileId($fileId)
    {
        $this->fileId = $fileId;
        return $this;
    }

    public static function getOperationId()
    {
        return 'billFundbillDownload';
    }


}
