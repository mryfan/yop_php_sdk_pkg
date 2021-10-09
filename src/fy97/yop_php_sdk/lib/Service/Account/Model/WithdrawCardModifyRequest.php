<?php


namespace Fy\Yeepay\Yop\Sdk\Service\Account\Model;


use Fy\Yeepay\Yop\Sdk\Model\BaseRequest;

class WithdrawCardModifyRequest extends BaseRequest
{
    /**
     * @var string
     */
    private $merchantNo;
    /**
     * @var string
     */
    private $accountNo;
    /**
     * @var int
     */
    private $bindId;
    /**
     * @var string
     */
    private $bankCardOperateType;
    /**
     * @var string
     */
    private $bankCode;
    /**
     * @var string
     */
    private $branchCode;

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
     * @return WithdrawCardModifyRequest
     */
    public function setMerchantNo($merchantNo)
    {
        $this->merchantNo = $merchantNo;
        return $this;
    }
    /**
     * Gets accountNo
     *
     * @return string
     */
    public function getAccountNo()
    {
        return $this->accountNo;
    }

    /**
     * Sets accountNo
     *
     * @param string $accountNo
     * @return WithdrawCardModifyRequest
     */
    public function setAccountNo($accountNo)
    {
        $this->accountNo = $accountNo;
        return $this;
    }
    /**
     * Gets bindId
     *
     * @return int
     */
    public function getBindId()
    {
        return $this->bindId;
    }

    /**
     * Sets bindId
     *
     * @param int $bindId
     * @return WithdrawCardModifyRequest
     */
    public function setBindId($bindId)
    {
        $this->bindId = $bindId;
        return $this;
    }
    /**
     * Gets bankCardOperateType
     *
     * @return string
     */
    public function getBankCardOperateType()
    {
        return $this->bankCardOperateType;
    }

    /**
     * Sets bankCardOperateType
     *
     * @param string $bankCardOperateType
     * @return WithdrawCardModifyRequest
     */
    public function setBankCardOperateType($bankCardOperateType)
    {
        $this->bankCardOperateType = $bankCardOperateType;
        return $this;
    }
    /**
     * Gets bankCode
     *
     * @return string
     */
    public function getBankCode()
    {
        return $this->bankCode;
    }

    /**
     * Sets bankCode
     *
     * @param string $bankCode
     * @return WithdrawCardModifyRequest
     */
    public function setBankCode($bankCode)
    {
        $this->bankCode = $bankCode;
        return $this;
    }
    /**
     * Gets branchCode
     *
     * @return string
     */
    public function getBranchCode()
    {
        return $this->branchCode;
    }

    /**
     * Sets branchCode
     *
     * @param string $branchCode
     * @return WithdrawCardModifyRequest
     */
    public function setBranchCode($branchCode)
    {
        $this->branchCode = $branchCode;
        return $this;
    }

    public static function getOperationId()
    {
        return 'withdrawCardModify';
    }


}
