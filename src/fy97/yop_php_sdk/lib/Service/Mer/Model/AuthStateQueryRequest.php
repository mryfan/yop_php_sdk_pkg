<?php


namespace Fy\Yeepay\Yop\Sdk\Service\Mer\Model;


use Fy\Yeepay\Yop\Sdk\Model\BaseRequest;

class AuthStateQueryRequest extends BaseRequest
{
    /**
     * @var string
     */
    private $merchantNo;
    /**
     * @var string
     */
    private $reportMerchantNo;
    /**
     * @var string
     */
    private $feeType;

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
     * @return AuthStateQueryRequest
     */
    public function setMerchantNo($merchantNo)
    {
        $this->merchantNo = $merchantNo;
        return $this;
    }
    /**
     * Gets reportMerchantNo
     *
     * @return string
     */
    public function getReportMerchantNo()
    {
        return $this->reportMerchantNo;
    }

    /**
     * Sets reportMerchantNo
     *
     * @param string $reportMerchantNo
     * @return AuthStateQueryRequest
     */
    public function setReportMerchantNo($reportMerchantNo)
    {
        $this->reportMerchantNo = $reportMerchantNo;
        return $this;
    }
    /**
     * Gets feeType
     *
     * @return string
     */
    public function getFeeType()
    {
        return $this->feeType;
    }

    /**
     * Sets feeType
     *
     * @param string $feeType
     * @return AuthStateQueryRequest
     */
    public function setFeeType($feeType)
    {
        $this->feeType = $feeType;
        return $this;
    }

    public static function getOperationId()
    {
        return 'authStateQuery';
    }


}
