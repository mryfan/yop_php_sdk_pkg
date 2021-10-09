<?php


namespace Fy\Yeepay\Yop\Sdk\Service\Account\Model;


use Fy\Yeepay\Yop\Sdk\Model\BaseRequest;

class PayCancelRequest extends BaseRequest
{
    /**
     * @var string
     */
    private $parentMerchantNo;
    /**
     * @var string
     */
    private $orderNo;
    /**
     * @var string
     */
    private $cancelReason;

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
     * @return PayCancelRequest
     */
    public function setParentMerchantNo($parentMerchantNo)
    {
        $this->parentMerchantNo = $parentMerchantNo;
        return $this;
    }
    /**
     * Gets orderNo
     *
     * @return string
     */
    public function getOrderNo()
    {
        return $this->orderNo;
    }

    /**
     * Sets orderNo
     *
     * @param string $orderNo
     * @return PayCancelRequest
     */
    public function setOrderNo($orderNo)
    {
        $this->orderNo = $orderNo;
        return $this;
    }
    /**
     * Gets cancelReason
     *
     * @return string
     */
    public function getCancelReason()
    {
        return $this->cancelReason;
    }

    /**
     * Sets cancelReason
     *
     * @param string $cancelReason
     * @return PayCancelRequest
     */
    public function setCancelReason($cancelReason)
    {
        $this->cancelReason = $cancelReason;
        return $this;
    }

    public static function getOperationId()
    {
        return 'payCancel';
    }


}
