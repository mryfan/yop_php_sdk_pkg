<?php


namespace Fy\Yeepay\Yop\Sdk\Service\Std\Model;


use Fy\Yeepay\Yop\Sdk\Model\BaseRequest;

class BillDividedaydownloadRequest extends BaseRequest
{
    /**
     * @var string
     */
    private $merchantNo;
    /**
     * @var string
     */
    private $dayString;

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
     * @return BillDividedaydownloadRequest
     */
    public function setMerchantNo($merchantNo)
    {
        $this->merchantNo = $merchantNo;
        return $this;
    }
    /**
     * Gets dayString
     *
     * @return string
     */
    public function getDayString()
    {
        return $this->dayString;
    }

    /**
     * Sets dayString
     *
     * @param string $dayString
     * @return BillDividedaydownloadRequest
     */
    public function setDayString($dayString)
    {
        $this->dayString = $dayString;
        return $this;
    }

    public static function getOperationId()
    {
        return 'billDividedaydownload';
    }


}
