<?php


namespace Fy\Yeepay\Yop\Sdk\Service\Trade\Model;


use Fy\Yeepay\Yop\Sdk\Model\BaseRequest;

class RefundFastRequest extends BaseRequest
{
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
    private $refundAmount;
    /**
     * @var string
     */
    private $description;
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
    private $memo;
    /**
     * @var string
     */
    private $cardInfo;
    /**
     * @var string
     */
    private $parentMerchantNo;
    /**
     * @var string
     */
    private $merchantNo;

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
     * @return RefundFastRequest
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
     * @return RefundFastRequest
     */
    public function setRefundRequestId($refundRequestId)
    {
        $this->refundRequestId = $refundRequestId;
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
     * @return RefundFastRequest
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
     * @return RefundFastRequest
     */
    public function setDescription($description)
    {
        $this->description = $description;
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
     * @return RefundFastRequest
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
     * @return RefundFastRequest
     */
    public function setNotifyUrl($notifyUrl)
    {
        $this->notifyUrl = $notifyUrl;
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
     * @return RefundFastRequest
     */
    public function setMemo($memo)
    {
        $this->memo = $memo;
        return $this;
    }
    /**
     * Gets cardInfo
     *
     * @return string
     */
    public function getCardInfo()
    {
        return $this->cardInfo;
    }

    /**
     * Sets cardInfo
     *
     * @param string $cardInfo
     * @return RefundFastRequest
     */
    public function setCardInfo($cardInfo)
    {
        $this->cardInfo = $cardInfo;
        return $this;
    }
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
     * @return RefundFastRequest
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
     * @return RefundFastRequest
     */
    public function setMerchantNo($merchantNo)
    {
        $this->merchantNo = $merchantNo;
        return $this;
    }

    public static function getOperationId()
    {
        return 'refundFast';
    }


}
