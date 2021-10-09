<?php


namespace Fy\Yeepay\Yop\Sdk\Service\Account\Model;


use Fy\Yeepay\Yop\Sdk\Model\BaseRequest;

class EnterpriseWithholdingOrderRequest extends BaseRequest
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
    private $payerMerchantNo;
    /**
     * @var string
     */
    private $orderId;
    /**
     * @var float
     */
    private $orderAmount;
    /**
     * @var string
     */
    private $fundProcessType;
    /**
     * @var string
     */
    private $goodsName;
    /**
     * @var string
     */
    private $expiredTime;
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
    private $payerNotifyUrl;

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
     * @return EnterpriseWithholdingOrderRequest
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
     * @return EnterpriseWithholdingOrderRequest
     */
    public function setMerchantNo($merchantNo)
    {
        $this->merchantNo = $merchantNo;
        return $this;
    }
    /**
     * Gets payerMerchantNo
     *
     * @return string
     */
    public function getPayerMerchantNo()
    {
        return $this->payerMerchantNo;
    }

    /**
     * Sets payerMerchantNo
     *
     * @param string $payerMerchantNo
     * @return EnterpriseWithholdingOrderRequest
     */
    public function setPayerMerchantNo($payerMerchantNo)
    {
        $this->payerMerchantNo = $payerMerchantNo;
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
     * @return EnterpriseWithholdingOrderRequest
     */
    public function setOrderId($orderId)
    {
        $this->orderId = $orderId;
        return $this;
    }
    /**
     * Gets orderAmount
     *
     * @return float
     */
    public function getOrderAmount()
    {
        return $this->orderAmount;
    }

    /**
     * Sets orderAmount
     *
     * @param float $orderAmount
     * @return EnterpriseWithholdingOrderRequest
     */
    public function setOrderAmount($orderAmount)
    {
        $this->orderAmount = $orderAmount;
        return $this;
    }
    /**
     * Gets fundProcessType
     *
     * @return string
     */
    public function getFundProcessType()
    {
        return $this->fundProcessType;
    }

    /**
     * Sets fundProcessType
     *
     * @param string $fundProcessType
     * @return EnterpriseWithholdingOrderRequest
     */
    public function setFundProcessType($fundProcessType)
    {
        $this->fundProcessType = $fundProcessType;
        return $this;
    }
    /**
     * Gets goodsName
     *
     * @return string
     */
    public function getGoodsName()
    {
        return $this->goodsName;
    }

    /**
     * Sets goodsName
     *
     * @param string $goodsName
     * @return EnterpriseWithholdingOrderRequest
     */
    public function setGoodsName($goodsName)
    {
        $this->goodsName = $goodsName;
        return $this;
    }
    /**
     * Gets expiredTime
     *
     * @return string
     */
    public function getExpiredTime()
    {
        return $this->expiredTime;
    }

    /**
     * Sets expiredTime
     *
     * @param string $expiredTime
     * @return EnterpriseWithholdingOrderRequest
     */
    public function setExpiredTime($expiredTime)
    {
        $this->expiredTime = $expiredTime;
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
     * @return EnterpriseWithholdingOrderRequest
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
     * @return EnterpriseWithholdingOrderRequest
     */
    public function setMemo($memo)
    {
        $this->memo = $memo;
        return $this;
    }
    /**
     * Gets payerNotifyUrl
     *
     * @return string
     */
    public function getPayerNotifyUrl()
    {
        return $this->payerNotifyUrl;
    }

    /**
     * Sets payerNotifyUrl
     *
     * @param string $payerNotifyUrl
     * @return EnterpriseWithholdingOrderRequest
     */
    public function setPayerNotifyUrl($payerNotifyUrl)
    {
        $this->payerNotifyUrl = $payerNotifyUrl;
        return $this;
    }

    public static function getOperationId()
    {
        return 'enterpriseWithholdingOrder';
    }


}
