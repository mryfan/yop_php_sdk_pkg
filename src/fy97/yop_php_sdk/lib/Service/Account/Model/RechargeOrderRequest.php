<?php


namespace Fy\Yeepay\Yop\Sdk\Service\Account\Model;


use Fy\Yeepay\Yop\Sdk\Model\BaseRequest;

class RechargeOrderRequest extends BaseRequest
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
    private $requestNo;
    /**
     * @var float
     */
    private $amount;
    /**
     * @var string
     */
    private $remark;
    /**
     * @var string
     */
    private $payType;
    /**
     * @var string
     */
    private $notifyUrl;

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
     * @return RechargeOrderRequest
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
     * @return RechargeOrderRequest
     */
    public function setMerchantNo($merchantNo)
    {
        $this->merchantNo = $merchantNo;
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
     * @return RechargeOrderRequest
     */
    public function setRequestNo($requestNo)
    {
        $this->requestNo = $requestNo;
        return $this;
    }
    /**
     * Gets amount
     *
     * @return float
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * Sets amount
     *
     * @param float $amount
     * @return RechargeOrderRequest
     */
    public function setAmount($amount)
    {
        $this->amount = $amount;
        return $this;
    }
    /**
     * Gets remark
     *
     * @return string
     */
    public function getRemark()
    {
        return $this->remark;
    }

    /**
     * Sets remark
     *
     * @param string $remark
     * @return RechargeOrderRequest
     */
    public function setRemark($remark)
    {
        $this->remark = $remark;
        return $this;
    }
    /**
     * Gets payType
     *
     * @return string
     */
    public function getPayType()
    {
        return $this->payType;
    }

    /**
     * Sets payType
     *
     * @param string $payType
     * @return RechargeOrderRequest
     */
    public function setPayType($payType)
    {
        $this->payType = $payType;
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
     * @return RechargeOrderRequest
     */
    public function setNotifyUrl($notifyUrl)
    {
        $this->notifyUrl = $notifyUrl;
        return $this;
    }

    public static function getOperationId()
    {
        return 'rechargeOrder';
    }


}
