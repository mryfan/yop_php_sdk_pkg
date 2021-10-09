<?php


namespace Fy\Yeepay\Yop\Sdk\Service\P2f\Model;


use Fy\Yeepay\Yop\Sdk\Model\BaseRequest;

class CompanyFinanceTransactionQueryRequest extends BaseRequest
{
    /**
     * @var string
     */
    private $startDate;
    /**
     * @var string
     */
    private $endDate;
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
     * Gets startDate
     *
     * @return string
     */
    public function getStartDate()
    {
        return $this->startDate;
    }

    /**
     * Sets startDate
     *
     * @param string $startDate
     * @return CompanyFinanceTransactionQueryRequest
     */
    public function setStartDate($startDate)
    {
        $this->startDate = $startDate;
        return $this;
    }
    /**
     * Gets endDate
     *
     * @return string
     */
    public function getEndDate()
    {
        return $this->endDate;
    }

    /**
     * Sets endDate
     *
     * @param string $endDate
     * @return CompanyFinanceTransactionQueryRequest
     */
    public function setEndDate($endDate)
    {
        $this->endDate = $endDate;
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
     * @return CompanyFinanceTransactionQueryRequest
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
     * @return CompanyFinanceTransactionQueryRequest
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
     * @return CompanyFinanceTransactionQueryRequest
     */
    public function setMerchantNo($merchantNo)
    {
        $this->merchantNo = $merchantNo;
        return $this;
    }

    public static function getOperationId()
    {
        return 'companyFinanceTransactionQuery';
    }


}
