<?php


namespace Fy\Yeepay\Yop\Sdk\Service\P2f\Model;


use Fy\Yeepay\Yop\Sdk\Model\BaseRequest;

class CompanyFinanceOrderQueryRequest extends BaseRequest
{
    /**
     * @var string
     */
    private $bizType;
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
     * Gets bizType
     *
     * @return string
     */
    public function getBizType()
    {
        return $this->bizType;
    }

    /**
     * Sets bizType
     *
     * @param string $bizType
     * @return CompanyFinanceOrderQueryRequest
     */
    public function setBizType($bizType)
    {
        $this->bizType = $bizType;
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
     * @return CompanyFinanceOrderQueryRequest
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
     * @return CompanyFinanceOrderQueryRequest
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
     * @return CompanyFinanceOrderQueryRequest
     */
    public function setMerchantNo($merchantNo)
    {
        $this->merchantNo = $merchantNo;
        return $this;
    }

    public static function getOperationId()
    {
        return 'companyFinanceOrderQuery';
    }


}
