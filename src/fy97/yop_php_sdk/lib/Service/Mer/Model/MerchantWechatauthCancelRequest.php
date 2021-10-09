<?php


namespace Fy\Yeepay\Yop\Sdk\Service\Mer\Model;


use Fy\Yeepay\Yop\Sdk\Model\BaseRequest;

class MerchantWechatauthCancelRequest extends BaseRequest
{
    /**
     * @var string
     */
    private $applymentId;
    /**
     * @var string
     */
    private $requestNo;
    /**
     * @var string
     */
    private $subMerchantNo;
    /**
     * @var string
     */
    private $reportFee;

    /**
     * Gets applymentId
     *
     * @return string
     */
    public function getApplymentId()
    {
        return $this->applymentId;
    }

    /**
     * Sets applymentId
     *
     * @param string $applymentId
     * @return MerchantWechatauthCancelRequest
     */
    public function setApplymentId($applymentId)
    {
        $this->applymentId = $applymentId;
        return $this;
    }
    /**
     * Gets requestNo
     *
     * @return string
     */
    public function getRequestNo()
    {
        return $this->requestNo;
    }

    /**
     * Sets requestNo
     *
     * @param string $requestNo
     * @return MerchantWechatauthCancelRequest
     */
    public function setRequestNo($requestNo)
    {
        $this->requestNo = $requestNo;
        return $this;
    }
    /**
     * Gets subMerchantNo
     *
     * @return string
     */
    public function getSubMerchantNo()
    {
        return $this->subMerchantNo;
    }

    /**
     * Sets subMerchantNo
     *
     * @param string $subMerchantNo
     * @return MerchantWechatauthCancelRequest
     */
    public function setSubMerchantNo($subMerchantNo)
    {
        $this->subMerchantNo = $subMerchantNo;
        return $this;
    }
    /**
     * Gets reportFee
     *
     * @return string
     */
    public function getReportFee()
    {
        return $this->reportFee;
    }

    /**
     * Sets reportFee
     *
     * @param string $reportFee
     * @return MerchantWechatauthCancelRequest
     */
    public function setReportFee($reportFee)
    {
        $this->reportFee = $reportFee;
        return $this;
    }

    public static function getOperationId()
    {
        return 'merchantWechatauthCancel';
    }


}
