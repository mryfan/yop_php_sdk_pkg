<?php


namespace Fy\Yeepay\Yop\Sdk\Service\Frontcashier\Model;


use Fy\Yeepay\Yop\Sdk\Model\BaseRequest;

class BankTransferPayRequest extends BaseRequest
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
     * @var float
     */
    private $orderAmount;
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
    private $goodsName;
    /**
     * @var string
     */
    private $fundProcessType;
    /**
     * @var string
     */
    private $csUrl;
    /**
     * @var string
     */
    private $checkType;

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
     * @return BankTransferPayRequest
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
     * @return BankTransferPayRequest
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
     * @return BankTransferPayRequest
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
     * @return BankTransferPayRequest
     */
    public function setOrderAmount($orderAmount)
    {
        $this->orderAmount = $orderAmount;
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
     * @return BankTransferPayRequest
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
     * @return BankTransferPayRequest
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
     * @return BankTransferPayRequest
     */
    public function setMemo($memo)
    {
        $this->memo = $memo;
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
     * @return BankTransferPayRequest
     */
    public function setGoodsName($goodsName)
    {
        $this->goodsName = $goodsName;
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
     * @return BankTransferPayRequest
     */
    public function setFundProcessType($fundProcessType)
    {
        $this->fundProcessType = $fundProcessType;
        return $this;
    }
    /**
     * Gets csUrl
     *
     * @return string
     */
    public function getCsUrl()
    {
        return $this->csUrl;
    }

    /**
     * Sets csUrl
     *
     * @param string $csUrl
     * @return BankTransferPayRequest
     */
    public function setCsUrl($csUrl)
    {
        $this->csUrl = $csUrl;
        return $this;
    }
    /**
     * Gets checkType
     *
     * @return string
     */
    public function getCheckType()
    {
        return $this->checkType;
    }

    /**
     * Sets checkType
     *
     * @param string $checkType
     * @return BankTransferPayRequest
     */
    public function setCheckType($checkType)
    {
        $this->checkType = $checkType;
        return $this;
    }

    public static function getOperationId()
    {
        return 'bankTransferPay';
    }


}
