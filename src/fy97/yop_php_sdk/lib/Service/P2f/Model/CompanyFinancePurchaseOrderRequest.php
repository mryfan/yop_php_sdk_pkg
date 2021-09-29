<?php


namespace Fy\Yeepay\Yop\Sdk\Service\P2f\Model;


use Fy\Yeepay\Yop\Sdk\Model\BaseRequest;

class CompanyFinancePurchaseOrderRequest extends BaseRequest
{
    /**
     * @var string
     */
    private $prodCode;
    /**
     * @var float
     */
    private $amount;
    /**
     * @var string
     */
    private $channelCode;
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
    private $p2fOpenAcctNo;

    /**
     * Gets prodCode
     *
     * @return string
     */
    public function getProdCode()
    {
        return $this->prodCode;
    }

    /**
     * Sets prodCode
     *
     * @param string $prodCode
     * @return CompanyFinancePurchaseOrderRequest
     */
    public function setProdCode($prodCode)
    {
        $this->prodCode = $prodCode;
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
     * @return CompanyFinancePurchaseOrderRequest
     */
    public function setAmount($amount)
    {
        $this->amount = $amount;
        return $this;
    }
    /**
     * Gets channelCode
     *
     * @return string
     */
    public function getChannelCode()
    {
        return $this->channelCode;
    }

    /**
     * Sets channelCode
     *
     * @param string $channelCode
     * @return CompanyFinancePurchaseOrderRequest
     */
    public function setChannelCode($channelCode)
    {
        $this->channelCode = $channelCode;
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
     * @return CompanyFinancePurchaseOrderRequest
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
     * @return CompanyFinancePurchaseOrderRequest
     */
    public function setMerchantNo($merchantNo)
    {
        $this->merchantNo = $merchantNo;
        return $this;
    }
    /**
     * Gets p2fOpenAcctNo
     *
     * @return string
     */
    public function getP2fOpenAcctNo()
    {
        return $this->p2fOpenAcctNo;
    }

    /**
     * Sets p2fOpenAcctNo
     *
     * @param string $p2fOpenAcctNo
     * @return CompanyFinancePurchaseOrderRequest
     */
    public function setP2fOpenAcctNo($p2fOpenAcctNo)
    {
        $this->p2fOpenAcctNo = $p2fOpenAcctNo;
        return $this;
    }

    public static function getOperationId()
    {
        return 'companyFinancePurchaseOrder';
    }


}
