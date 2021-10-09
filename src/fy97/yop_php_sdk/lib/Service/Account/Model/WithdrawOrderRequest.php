<?php


namespace Fy\Yeepay\Yop\Sdk\Service\Account\Model;


use Fy\Yeepay\Yop\Sdk\Model\BaseRequest;

class WithdrawOrderRequest extends BaseRequest
{
    /**
     * @var string
     */
    private $parentMerchantNo;
    /**
     * @var string
     */
    private $requestNo;
    /**
     * @var string
     */
    private $merchantNo;
    /**
     * @var string
     */
    private $bankCardId;
    /**
     * @var string
     */
    private $bankAccountNo;
    /**
     * @var string
     */
    private $receiveType;
    /**
     * @var float
     */
    private $orderAmount;
    /**
     * @var string
     */
    private $notifyUrl;
    /**
     * @var string
     */
    private $remark;
    /**
     * @var string
     */
    private $terminalType;

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
     * @return WithdrawOrderRequest
     */
    public function setParentMerchantNo($parentMerchantNo)
    {
        $this->parentMerchantNo = $parentMerchantNo;
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
     * @return WithdrawOrderRequest
     */
    public function setRequestNo($requestNo)
    {
        $this->requestNo = $requestNo;
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
     * @return WithdrawOrderRequest
     */
    public function setMerchantNo($merchantNo)
    {
        $this->merchantNo = $merchantNo;
        return $this;
    }
    /**
     * Gets bankCardId
     *
     * @return string
     */
    public function getBankCardId()
    {
        return $this->bankCardId;
    }

    /**
     * Sets bankCardId
     *
     * @param string $bankCardId
     * @return WithdrawOrderRequest
     */
    public function setBankCardId($bankCardId)
    {
        $this->bankCardId = $bankCardId;
        return $this;
    }
    /**
     * Gets bankAccountNo
     *
     * @return string
     */
    public function getBankAccountNo()
    {
        return $this->bankAccountNo;
    }

    /**
     * Sets bankAccountNo
     *
     * @param string $bankAccountNo
     * @return WithdrawOrderRequest
     */
    public function setBankAccountNo($bankAccountNo)
    {
        $this->bankAccountNo = $bankAccountNo;
        return $this;
    }
    /**
     * Gets receiveType
     *
     * @return string
     */
    public function getReceiveType()
    {
        return $this->receiveType;
    }

    /**
     * Sets receiveType
     *
     * @param string $receiveType
     * @return WithdrawOrderRequest
     */
    public function setReceiveType($receiveType)
    {
        $this->receiveType = $receiveType;
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
     * @return WithdrawOrderRequest
     */
    public function setOrderAmount($orderAmount)
    {
        $this->orderAmount = $orderAmount;
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
     * @return WithdrawOrderRequest
     */
    public function setNotifyUrl($notifyUrl)
    {
        $this->notifyUrl = $notifyUrl;
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
     * @return WithdrawOrderRequest
     */
    public function setRemark($remark)
    {
        $this->remark = $remark;
        return $this;
    }
    /**
     * Gets terminalType
     *
     * @return string
     */
    public function getTerminalType()
    {
        return $this->terminalType;
    }

    /**
     * Sets terminalType
     *
     * @param string $terminalType
     * @return WithdrawOrderRequest
     */
    public function setTerminalType($terminalType)
    {
        $this->terminalType = $terminalType;
        return $this;
    }

    public static function getOperationId()
    {
        return 'withdrawOrder';
    }


}
