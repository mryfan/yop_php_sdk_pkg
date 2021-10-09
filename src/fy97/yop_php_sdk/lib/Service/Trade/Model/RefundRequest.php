<?php


namespace Fy\Yeepay\Yop\Sdk\Service\Trade\Model;


use Fy\Yeepay\Yop\Sdk\Model\BaseRequest;

class RefundRequest extends BaseRequest
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
    private $orderId;
    /**
     * @var string
     */
    private $refundRequestId;
    /**
     * @var string
     */
    private $uniqueOrderNo;
    /**
     * @var string
     */
    private $refundAmount;
    /**
     * @var string
     */
    private $description;
    /**
     * @var string
     */
    private $memo;
    /**
     * @var string
     */
    private $refundAccountType;
    /**
     * @var string
     */
    private $notifyUrl;
    /**
     * @var string
     */
    private $ypPromotionRefundInfo;

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
     * @return RefundRequest
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
     * @return RefundRequest
     */
    public function setMerchantNo($merchantNo)
    {
        $this->merchantNo = $merchantNo;
        return $this;
    }
    /**
     * Gets orderId
     *
     * @return string
     */
    public function getOrderId()
    {
        return $this->orderId;
    }

    /**
     * Sets orderId
     *
     * @param string $orderId
     * @return RefundRequest
     */
    public function setOrderId($orderId)
    {
        $this->orderId = $orderId;
        return $this;
    }
    /**
     * Gets refundRequestId
     *
     * @return string
     */
    public function getRefundRequestId()
    {
        return $this->refundRequestId;
    }

    /**
     * Sets refundRequestId
     *
     * @param string $refundRequestId
     * @return RefundRequest
     */
    public function setRefundRequestId($refundRequestId)
    {
        $this->refundRequestId = $refundRequestId;
        return $this;
    }
    /**
     * Gets uniqueOrderNo
     *
     * @return string
     */
    public function getUniqueOrderNo()
    {
        return $this->uniqueOrderNo;
    }

    /**
     * Sets uniqueOrderNo
     *
     * @param string $uniqueOrderNo
     * @return RefundRequest
     */
    public function setUniqueOrderNo($uniqueOrderNo)
    {
        $this->uniqueOrderNo = $uniqueOrderNo;
        return $this;
    }
    /**
     * Gets refundAmount
     *
     * @return string
     */
    public function getRefundAmount()
    {
        return $this->refundAmount;
    }

    /**
     * Sets refundAmount
     *
     * @param string $refundAmount
     * @return RefundRequest
     */
    public function setRefundAmount($refundAmount)
    {
        $this->refundAmount = $refundAmount;
        return $this;
    }
    /**
     * Gets description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Sets description
     *
     * @param string $description
     * @return RefundRequest
     */
    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }
    /**
     * Gets memo
     *
     * @return string
     */
    public function getMemo()
    {
        return $this->memo;
    }

    /**
     * Sets memo
     *
     * @param string $memo
     * @return RefundRequest
     */
    public function setMemo($memo)
    {
        $this->memo = $memo;
        return $this;
    }
    /**
     * Gets refundAccountType
     *
     * @return string
     */
    public function getRefundAccountType()
    {
        return $this->refundAccountType;
    }

    /**
     * Sets refundAccountType
     *
     * @param string $refundAccountType
     * @return RefundRequest
     */
    public function setRefundAccountType($refundAccountType)
    {
        $this->refundAccountType = $refundAccountType;
        return $this;
    }
    /**
     * Gets notifyUrl
     *
     * @return string
     */
    public function getNotifyUrl()
    {
        return $this->notifyUrl;
    }

    /**
     * Sets notifyUrl
     *
     * @param string $notifyUrl
     * @return RefundRequest
     */
    public function setNotifyUrl($notifyUrl)
    {
        $this->notifyUrl = $notifyUrl;
        return $this;
    }
    /**
     * Gets ypPromotionRefundInfo
     *
     * @return string
     */
    public function getYpPromotionRefundInfo()
    {
        return $this->ypPromotionRefundInfo;
    }

    /**
     * Sets ypPromotionRefundInfo
     *
     * @param string $ypPromotionRefundInfo
     * @return RefundRequest
     */
    public function setYpPromotionRefundInfo($ypPromotionRefundInfo)
    {
        $this->ypPromotionRefundInfo = $ypPromotionRefundInfo;
        return $this;
    }

    public static function getOperationId()
    {
        return 'refund';
    }


}
