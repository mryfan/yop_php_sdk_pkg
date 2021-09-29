<?php


namespace Fy\Yeepay\Yop\Sdk\Service\Account\Model;


use Fy\Yeepay\Yop\Sdk\Model\BaseRequest;

class AutoWithdrawRuleSetRequest extends BaseRequest
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
    private $bindId;
    /**
     * @var string
     */
    private $bankAccountNo;
    /**
     * @var string
     */
    private $receiveType;
    /**
     * @var string
     */
    private $triggerTime;
    /**
     * @var float
     */
    private $remainAmount;
    /**
     * @var string
     */
    private $remark;

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
     * @return AutoWithdrawRuleSetRequest
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
     * @return AutoWithdrawRuleSetRequest
     */
    public function setMerchantNo($merchantNo)
    {
        $this->merchantNo = $merchantNo;
        return $this;
    }
    /**
     * Gets bindId
     *
     * @return string
     */
    public function getBindId()
    {
        return $this->bindId;
    }

    /**
     * Sets bindId
     *
     * @param string $bindId
     * @return AutoWithdrawRuleSetRequest
     */
    public function setBindId($bindId)
    {
        $this->bindId = $bindId;
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
     * @return AutoWithdrawRuleSetRequest
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
     * @return AutoWithdrawRuleSetRequest
     */
    public function setReceiveType($receiveType)
    {
        $this->receiveType = $receiveType;
        return $this;
    }
    /**
     * Gets triggerTime
     *
     * @return string
     */
    public function getTriggerTime()
    {
        return $this->triggerTime;
    }

    /**
     * Sets triggerTime
     *
     * @param string $triggerTime
     * @return AutoWithdrawRuleSetRequest
     */
    public function setTriggerTime($triggerTime)
    {
        $this->triggerTime = $triggerTime;
        return $this;
    }
    /**
     * Gets remainAmount
     *
     * @return float
     */
    public function getRemainAmount()
    {
        return $this->remainAmount;
    }

    /**
     * Sets remainAmount
     *
     * @param float $remainAmount
     * @return AutoWithdrawRuleSetRequest
     */
    public function setRemainAmount($remainAmount)
    {
        $this->remainAmount = $remainAmount;
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
     * @return AutoWithdrawRuleSetRequest
     */
    public function setRemark($remark)
    {
        $this->remark = $remark;
        return $this;
    }

    public static function getOperationId()
    {
        return 'autoWithdrawRuleSet';
    }


}
