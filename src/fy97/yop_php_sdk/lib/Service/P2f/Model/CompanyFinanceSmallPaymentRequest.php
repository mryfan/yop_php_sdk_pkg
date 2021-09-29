<?php


namespace Fy\Yeepay\Yop\Sdk\Service\P2f\Model;


use Fy\Yeepay\Yop\Sdk\Model\BaseRequest;

class CompanyFinanceSmallPaymentRequest extends BaseRequest
{
    /**
     * @var string
     */
    private $confirmCheckCode;
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
     * Gets confirmCheckCode
     *
     * @return string
     */
    public function getConfirmCheckCode()
    {
        return $this->confirmCheckCode;
    }

    /**
     * Sets confirmCheckCode
     *
     * @param string $confirmCheckCode
     * @return CompanyFinanceSmallPaymentRequest
     */
    public function setConfirmCheckCode($confirmCheckCode)
    {
        $this->confirmCheckCode = $confirmCheckCode;
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
     * @return CompanyFinanceSmallPaymentRequest
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
     * @return CompanyFinanceSmallPaymentRequest
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
     * @return CompanyFinanceSmallPaymentRequest
     */
    public function setMerchantNo($merchantNo)
    {
        $this->merchantNo = $merchantNo;
        return $this;
    }

    public static function getOperationId()
    {
        return 'companyFinanceSmallPayment';
    }


}
