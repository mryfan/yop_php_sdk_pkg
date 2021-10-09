<?php


namespace Fy\Yeepay\Yop\Sdk\Service\Account\Model;


use Fy\Yeepay\Yop\Sdk\Model\BaseRequest;

class ReceiptGetRequest extends BaseRequest
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
    private $tradeType;

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
     * @return ReceiptGetRequest
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
     * @return ReceiptGetRequest
     */
    public function setOrderNo($orderNo)
    {
        $this->orderNo = $orderNo;
        return $this;
    }
    /**
     * Gets tradeType
     *
     * @return string
     */
    public function getTradeType()
    {
        return $this->tradeType;
    }

    /**
     * Sets tradeType
     *
     * @param string $tradeType
     * @return ReceiptGetRequest
     */
    public function setTradeType($tradeType)
    {
        $this->tradeType = $tradeType;
        return $this;
    }

    public static function getOperationId()
    {
        return 'receiptGet';
    }


}
