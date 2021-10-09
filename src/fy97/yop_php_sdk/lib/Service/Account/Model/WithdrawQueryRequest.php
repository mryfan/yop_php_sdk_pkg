<?php


namespace Fy\Yeepay\Yop\Sdk\Service\Account\Model;


use Fy\Yeepay\Yop\Sdk\Model\BaseRequest;

class WithdrawQueryRequest extends BaseRequest
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
    private $orderNo;

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
     * @return WithdrawQueryRequest
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
     * @return WithdrawQueryRequest
     */
    public function setRequestNo($requestNo)
    {
        $this->requestNo = $requestNo;
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
     * @return WithdrawQueryRequest
     */
    public function setOrderNo($orderNo)
    {
        $this->orderNo = $orderNo;
        return $this;
    }

    public static function getOperationId()
    {
        return 'withdrawQuery';
    }


}
