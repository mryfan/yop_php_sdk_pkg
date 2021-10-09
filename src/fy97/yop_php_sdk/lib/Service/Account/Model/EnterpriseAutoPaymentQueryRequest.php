<?php


namespace Fy\Yeepay\Yop\Sdk\Service\Account\Model;


use Fy\Yeepay\Yop\Sdk\Model\BaseRequest;

class EnterpriseAutoPaymentQueryRequest extends BaseRequest
{
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
    private $orderDate;
    /**
     * @var string
     */
    private $uniqueOrderNo;

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
     * @return EnterpriseAutoPaymentQueryRequest
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
     * @return EnterpriseAutoPaymentQueryRequest
     */
    public function setOrderId($orderId)
    {
        $this->orderId = $orderId;
        return $this;
    }
    /**
     * Gets orderDate
     *
     * @return string
     */
    public function getOrderDate()
    {
        return $this->orderDate;
    }

    /**
     * Sets orderDate
     *
     * @param string $orderDate
     * @return EnterpriseAutoPaymentQueryRequest
     */
    public function setOrderDate($orderDate)
    {
        $this->orderDate = $orderDate;
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
     * @return EnterpriseAutoPaymentQueryRequest
     */
    public function setUniqueOrderNo($uniqueOrderNo)
    {
        $this->uniqueOrderNo = $uniqueOrderNo;
        return $this;
    }

    public static function getOperationId()
    {
        return 'enterpriseAutoPaymentQuery';
    }


}
