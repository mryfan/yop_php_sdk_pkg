<?php


namespace Fy\Yeepay\Yop\Sdk\Service\Bill\Model;


use Fy\Yeepay\Yop\Sdk\Model\BaseRequest;

class DownloadRequest extends BaseRequest
{
    /**
     * @var string
     */
    private $bizType;
    /**
     * @var string
     */
    private $billDate;

    /**
     * Gets bizType
     *
     * @return string
     */
    public function getBizType()
    {
        return $this->bizType;
    }

    /**
     * Sets bizType
     *
     * @param string $bizType
     * @return DownloadRequest
     */
    public function setBizType($bizType)
    {
        $this->bizType = $bizType;
        return $this;
    }
    /**
     * Gets billDate
     *
     * @return string
     */
    public function getBillDate()
    {
        return $this->billDate;
    }

    /**
     * Sets billDate
     *
     * @param string $billDate
     * @return DownloadRequest
     */
    public function setBillDate($billDate)
    {
        $this->billDate = $billDate;
        return $this;
    }

    public static function getOperationId()
    {
        return 'download';
    }


}
