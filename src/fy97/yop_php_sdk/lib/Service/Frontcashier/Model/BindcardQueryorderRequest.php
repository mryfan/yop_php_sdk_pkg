<?php


namespace Fy\Yeepay\Yop\Sdk\Service\Frontcashier\Model;


use Fy\Yeepay\Yop\Sdk\Model\BaseRequest;

class BindcardQueryorderRequest extends BaseRequest
{
    /**
     * @var string
     */
    private $merchantNo;
    /**
     * @var string
     */
    private $merchantFlowId;
    /**
     * @var string
     */
    private $nopOrderId;
    /**
     * @var string
     */
    private $phone;

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
     * @return BindcardQueryorderRequest
     */
    public function setMerchantNo($merchantNo)
    {
        $this->merchantNo = $merchantNo;
        return $this;
    }
    /**
     * Gets merchantFlowId
     *
     * @return string
     */
    public function getMerchantFlowId()
    {
        return $this->merchantFlowId;
    }

    /**
     * Sets merchantFlowId
     *
     * @param string $merchantFlowId
     * @return BindcardQueryorderRequest
     */
    public function setMerchantFlowId($merchantFlowId)
    {
        $this->merchantFlowId = $merchantFlowId;
        return $this;
    }
    /**
     * Gets nopOrderId
     *
     * @return string
     */
    public function getNopOrderId()
    {
        return $this->nopOrderId;
    }

    /**
     * Sets nopOrderId
     *
     * @param string $nopOrderId
     * @return BindcardQueryorderRequest
     */
    public function setNopOrderId($nopOrderId)
    {
        $this->nopOrderId = $nopOrderId;
        return $this;
    }
    /**
     * Gets phone
     *
     * @return string
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * Sets phone
     *
     * @param string $phone
     * @return BindcardQueryorderRequest
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;
        return $this;
    }

    public static function getOperationId()
    {
        return 'bindcardQueryorder';
    }


}
