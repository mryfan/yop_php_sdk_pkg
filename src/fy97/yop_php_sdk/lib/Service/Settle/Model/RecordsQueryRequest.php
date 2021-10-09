<?php


namespace Fy\Yeepay\Yop\Sdk\Service\Settle\Model;


use Fy\Yeepay\Yop\Sdk\Model\BaseRequest;

class RecordsQueryRequest extends BaseRequest
{
    /**
     * @var string
     */
    private $parentMerchantNo;
    /**
     * @var string
     */
    private $merchantNo;
    /**
     * @var string
     */
    private $settleRequestNo;
    /**
     * @var string
     */
    private $settleRequestBeginTime;
    /**
     * @var string
     */
    private $settleRequestEndTime;

    /**
     * Gets parentMerchantNo
     *
     * @return string
     */
    public function getParentMerchantNo()
    {
        return $this->parentMerchantNo;
    }

    /**
     * Sets parentMerchantNo
     *
     * @param string $parentMerchantNo
     * @return RecordsQueryRequest
     */
    public function setParentMerchantNo($parentMerchantNo)
    {
        $this->parentMerchantNo = $parentMerchantNo;
        return $this;
    }
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
     * @return RecordsQueryRequest
     */
    public function setMerchantNo($merchantNo)
    {
        $this->merchantNo = $merchantNo;
        return $this;
    }
    /**
     * Gets settleRequestNo
     *
     * @return string
     */
    public function getSettleRequestNo()
    {
        return $this->settleRequestNo;
    }

    /**
     * Sets settleRequestNo
     *
     * @param string $settleRequestNo
     * @return RecordsQueryRequest
     */
    public function setSettleRequestNo($settleRequestNo)
    {
        $this->settleRequestNo = $settleRequestNo;
        return $this;
    }
    /**
     * Gets settleRequestBeginTime
     *
     * @return string
     */
    public function getSettleRequestBeginTime()
    {
        return $this->settleRequestBeginTime;
    }

    /**
     * Sets settleRequestBeginTime
     *
     * @param string $settleRequestBeginTime
     * @return RecordsQueryRequest
     */
    public function setSettleRequestBeginTime($settleRequestBeginTime)
    {
        $this->settleRequestBeginTime = $settleRequestBeginTime;
        return $this;
    }
    /**
     * Gets settleRequestEndTime
     *
     * @return string
     */
    public function getSettleRequestEndTime()
    {
        return $this->settleRequestEndTime;
    }

    /**
     * Sets settleRequestEndTime
     *
     * @param string $settleRequestEndTime
     * @return RecordsQueryRequest
     */
    public function setSettleRequestEndTime($settleRequestEndTime)
    {
        $this->settleRequestEndTime = $settleRequestEndTime;
        return $this;
    }

    public static function getOperationId()
    {
        return 'recordsQuery';
    }


}
